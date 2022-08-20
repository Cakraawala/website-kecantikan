<?php

namespace App\Http\Controllers;

use App\Models\Products;
use App\Models\Cart;
use App\Models\CartDetail;
use Carbon\Carbon;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class CartController extends Controller
{

    // public function index(Request $request){
    //     $itemuser = $request->user();//ambil data user
    //     $itemcart = Cart::where('users_id', $itemuser->id)
    //                     ->where('status', 'cart')
    //                     ->first();
    //     $data = array('title' => 'Shopping Cart',
    //                 'itemcart' => $itemcart);
    //     return view('cart.cart', $data)->with('no', 1);

    // }

   public function cart()
    {
        if(!Auth::check()){
            return redirect('/login')->with('asking', 'Please login first!');
        }

        $title = 'Cart';
        $checkout = Cart::where('users_id', Auth::user()->id)->where('status', 'cart')->first();

        if(!empty($checkout)){
            $checkout_detail = CartDetail::where('carts_id', $checkout->id)->get();
            return view('cart', compact('checkout', 'checkout_detail', 'title'));
        } else {
            $checkout_detail = CartDetail::where('carts_id', $checkout->id ?? 0)->get();
            return view('cart', compact('checkout', 'checkout_detail', 'title'));
        }

    }

    public function checkout(){
        $checkout = Cart::where('users_id', Auth::user()->id)->where('status', 'cart')->first();
        $title = 'Checkout';

        if(!empty($checkout)){
            $checkout_detail = CartDetail::where('carts_id', $checkout->id)->get();
            return view('checkout', compact('checkout', 'checkout_detail', 'title'));
        } else {
            $checkout_detail = CartDetail::where('carts_id', $checkout->id ?? 0)->get();
            return view('checkout', compact('checkout', 'checkout_detail', 'title'));
        }
    }

    // public function addToCart($id)
    // {
    //     // $product = Products::findOrFail($id);
    //     // $cart = session()->get('cart', []);
    //     // if(isset($cart[$id])) {
    //     //     $cart[$id]['quantity']++;
    //     // } else {
    //     //     $cart[$id] = [
    //     //         "nm_products" => $product->nm_products,
    //     //         "quantity" => 1 ,
    //     //         "price" => $product->price,
    //     //         "image" => $product->image
    //     //     ];
    //     // }

    //     // session()->put('cart', $cart);
    //     // return redirect()->back()->with('success', 'Product added to cart successfully!');
    // }

    public function addToCart(Request $request, $id){
       $product = Products::where('id', $id)->first();
       $tgl = Carbon::now();

       //validasi stok
       if($request->quantity > $product->quantity){
        return back()->with('error', 'Jumlah melebihi stock yang ada!');
       }

       if(empty($request->quantity)){
        $request->quantity = 1;
       }
        //cek cart lagi
        // post ke db
       $cek_checkout = Cart::where('users_id', Auth::user()->id)->where('status', 'cart')->first();
       if(empty($cek_checkout)){
        $checkout = new Cart;
        $checkout->users_id = Auth::user()->id;
        $no_invoice = Cart::where('users_id', $checkout->users_id)->count();
         $checkout->tgl = $tgl;
         $checkout->status = 'cart';
         $checkout->no_resi = Str::random(10). ' ' .str_pad(($no_invoice + 1), '3', '0', STR_PAD_LEFT);
         $checkout->subtotal = 0;
         $checkout->status_pembayaran = 0;
         $checkout->total = 0;
         $checkout->save();
       }
        // simpan ke db detail
        $checkout_new = Cart::where('users_id', Auth::user()->id)->where('status', 'cart')->first();

        $cek_checkout_detail = CartDetail::where('products_id', $product->id)->where('carts_id', $checkout_new->id)->first();

        if(empty($cek_checkout_detail)){
        $checkout_detail = new CartDetail;
        $checkout_detail->products_id = $product->id;
        $checkout_detail->carts_id = $checkout_new->id;
        $checkout_detail->quantity = $request->quantity;
        $checkout_detail->subtotal = $product->price* $request->quantity;
        $checkout_detail->save();

        }else{
            $checkout_detail = CartDetail::where('products_id', $product->id)->where('carts_id', $checkout_new->id)->first();

            $checkout_detail->quantity = $checkout_detail->quantity+$request->quantity;

            $subtotal_checkout_detail_new = $product->price*$request->quantity;
            $checkout_detail->subtotal = $checkout_detail->subtotal + $subtotal_checkout_detail_new;
            $checkout_detail->update();
        }

        // subtotal
        $checkout = Cart::where('users_id', Auth::user()->id)->where('status', 'cart')->first();
        $checkout->subtotal = $checkout->subtotal + $product->price* $request->quantity;
        $checkout->update();

        Alert::success('Success', 'Success Added to Cart');
        return redirect('/');
        // $cart = session('cart');
        // $carts_id = Cart::new_cart();
        // foreach($cart as $ct => $details){
        //     $products_id= $ct;
        //     $quantity = $details['quantity'];
        //     CartDetail::new_detail_cart($products_id, $carts_id, $quantity);
        // }

        // session()->forget('cart');

        // return redirect('/cart');
    }

    public function update(Request $request)
    {
        // $checkout = Cart::where('users_id', Auth::user()->id)->where('status', 'cart')->first();
        // $checkout_detail = CartDetail::where('carts_id', $checkout->id)->get();

        if($request->id && $request->quantity){
            $cart = Cart::where('users_id', Auth::user()->id)->where('status', 'cart')->first()->get();
            $cart_detail = CartDetail::where('carts_id', $request->id);
            $cart[$request->id]["quantity"] = $request->quantity;
            $cart->put('cart', $cart);
            return back()->flash('success', 'Cart updated successfully');
        }
    }

    public function confirm(Request $request){
        $cart = Cart::where('users_id', Auth::user()->id)->where('status', 'cart')->first();
        $cart_id = $cart->id;
        $cart->status = 'Pending';
        $cart->update();

        $cart_detail = CartDetail::where('carts_id', $cart_id)->get();
        foreach($cart_detail as $cd){
            $product = Products::where('id', $cd->products_id)->first();
            $product->quantity = $product->quantity- $cd->quantity;
            $product->update();
        }

        Alert::success('Success', 'Checkout Success');
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function remove(Request $request)
    {
        $checkout = Cart::where('users_id', Auth::user()->id)->where('status', 'cart')->first();
        $checkout_detail = CartDetail::where('carts_id', $checkout->id)->get();
        if($request->checkout_detail->id) {
            $cart = session()->get('cart');
            if(isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart', $cart);
            }
            session()->flash('success', 'Product removed successfully');
        }
    }

    public function delete($id){
        // Alert::question('Question Title', 'Question Message');
        $checkout_detail = CartDetail::where('id', $id)->first();
        $checkout = Cart::where('id', $checkout_detail->carts_id)->first();
        $checkout->subtotal = $checkout->subtotal-$checkout_detail->subtotal;
        $checkout->update();
        $checkout_detail->delete();

        Alert::success('Product Successfully Deleted', 'Delete');
        return back();
    }
}
