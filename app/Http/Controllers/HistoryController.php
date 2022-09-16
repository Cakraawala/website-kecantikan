<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\CartDetail;
use App\Models\Checkout;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class HistoryController extends Controller
{
    public function index(){
        if(!Auth::check()){
            return redirect('/login')->with('asking', 'Please login first!');
        }

        $title = 'My Order Lists';
        $checkout = Checkout::where('users_id', Auth::user()->id)->where('status','!=', 'cart')->with('payments','deliveries')->get();
        return view('history.index', compact('checkout', 'title'));
    }
    public function detail($id){
        if(!Auth::check()){
            return redirect('/login')->with('asking', 'Please login first!');
        }
        $title = 'My Order';
        $checkout = Checkout::where('id', $id)->first();
        // dd($id);
        $p = mt_rand(10000,9999999999);
        if(!empty($checkout)){
        $detail = CartDetail::where('carts_id', $checkout->carts->id)->with('cart')->get();
        return view('history.detail', compact('title','detail','checkout','p'));
        }else {
            Alert::error('Error!', 'Tidak ada history Pembelian!');
            return back();
        }
    }

    public function bukti($id){
        if(!Auth::check()){
            return redirect('/login')->with('asking', 'Please Login first!');
        }
        $checkout = Checkout::where('users_id', Auth::user()->id)->where('id',$id)->with('payments','deliveries')->first();
        $title = 'Kirim bukti';
        // dd($id);
        return view('history.bukti', compact('title','checkout'));
    }

    public function kirimbukti(Request $request, $id){
        if(!Auth::check()){
            return redirect('/login')->with('asking', 'Please Login first!');
        }
        $checkout = Checkout::where('users_id', Auth::user()->id)->where('id',$id)->with('payments','deliveries')->first();

        $validatedData = $request->validate([
            'image' => 'nullable|image|file|max:3072'
        ]);

        if($request->file('image')){
            $image = $validatedData['image'] = $request->file('image')->store('bukti-pembayaran');
            // dd($image);
            $checkout->image = $image;
            $checkout->update();
        }

        return redirect('/history')->with('success', 'Berhasil');
        // dd($checkout);
    }
}
