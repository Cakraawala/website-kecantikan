<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;

class StatusController extends Controller
{
    public function dashboardindex(){
        $cart = Cart::where('status', 'Pending')->with('users')->orderBy('id', 'desc');
        return view('d.status.c-pending', ['cart' => $cart->get(), 'title' => 'Status pending']);
    }
}
