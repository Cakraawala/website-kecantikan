<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\CategoryProduct;
use App\Models\Checkout;
use App\Models\Delivery;
use App\Models\Payment;
use App\Models\Products;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IndexController extends Controller
{
    public function index(){
        $title = 'No.1 Beauty online shop';
        $categories = CategoryProduct::all();
        $products = Products::inRandomOrder()->paginate('9')->withQueryString();
        $cts = CategoryProduct::where('id', 1)->first();
        $pts1 = Products::orderBy('id', 'asc')->first();
        $pts2 = Products::orderBy('id', 'desc')->first();
        return view('index' , compact('categories', 'products', 'cts', 'title','pts1', 'pts2'));}

    public function dashboard(){
        if(auth()->guest()){
            return redirect('/');}
        if(auth()->user()->is_admin == 0){
            abort(404);}
        $title = 'dashboard';
        $product = Products::with('CategoryProduct')->count();
        $user = User::where('is_admin', 0)->count();
        $transaksi = Checkout::where('status', 'Success')->count();
        $checkout = Checkout::where('status', 'Success')->get();
        $totaluang = 0;
        foreach($checkout as $cd){
            $totaluang += $cd->subtotal;}
        $category = CategoryProduct::count();
        $delivery = Delivery::count();
        $payment = Payment::count();
        return view('d.index', compact('title','product','user','transaksi', 'totaluang','category', 'payment','delivery'));
    }
}
