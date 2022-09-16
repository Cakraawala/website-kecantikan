<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\CartDetail;
use App\Models\Checkout;
use Illuminate\Http\Request;

class StatusController extends Controller
{
    public function pdashboardindex(){
        if(auth()->guest()){
            return redirect('/');
        }
        if(auth()->user()->is_admin == 0){
            abort(404);
        }
        $cart = Checkout::where('status','Pending')->with('users','carts')->orderBy('id', 'desc');
        if(request('search')){
            $cart->where('users_id', 'like', '%'. request('search') . '%' )
            ->orWhere('no_resi', 'like', '%' . request('search'))->orWhere('tgl', 'like', '%' . request('search'));
        }
        return view('d.status.c-pending', ['cart' => $cart->get(), 'title' => 'Status pending']);
    }
    public function sdashboardindex(){
        if(auth()->guest()){
            return redirect('/');
        }
        if(auth()->user()->is_admin == 0){
            abort(404);
        }
        $cart = Checkout::where('status','Success')->with('users','carts')->orderBy('id', 'desc');
          if(request('search')){
            $cart->where('users_id', 'like', '%'. request('search') . '%' )
            ->orWhere('no_resi', 'like', '%' . request('search'))->orWhere('tgl', 'like', '%' . request('search'));
        }
        $checkout = Checkout::where('status', 'Success')->get();
        $totaluang = 0;
        foreach($checkout as $cd){
            $totaluang += $cd->subtotal;
        }

        return view('d.status.c-success', ['cart' => $cart->get(), 'title' => 'Status Success', 'totaluang' => $totaluang]);
    }
    public function showsuccess($id){
        if(auth()->guest()){
            return redirect('/');
        }
        if(auth()->user()->is_admin == 0){
            abort(404);
        }
        $cart = Checkout::where('id', $id)->where('status' , 'Success')->first();
        $detail = CartDetail::where('carts_id', $cart->carts->id)->with('cart')->get();
        // dd($detail);
        $title = 'Detail checkout Success';

        return view('d.status.show-success', compact('title','cart','detail'));
    }

    public function confirm($id){
        $checkout = Checkout::where('id', $id)->first();
        $checkout->status = 'Success';
        // dd($checkout);
        $checkout->update();
        return redirect('/dashboard/c-Pending')->with('success', 'Bukti Pembayaran berhasil di konfirmasi');
    }

    public function tolak($id){
        $checkout = Checkout::where('id', $id)->first();
        $checkout->image = null;
        // dd($checkout);
        $checkout->update();
        return redirect('/dashboard/c-Pending')->with('success', 'Bukti Pembayaran berhasil di Tolak!');
    }
}
