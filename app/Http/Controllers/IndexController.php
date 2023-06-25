<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\CategoryProduct;
use App\Models\Checkout;
use App\Models\Delivery;
use App\Models\Payment;
use App\Models\Products;
use App\Models\StatusProduct;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IndexController extends Controller
{
    public function index()
    {
        $title = 'No.1 Beauty online shop';
        $categories = CategoryProduct::limit(12)->get();
        $products = Products::inRandomOrder()->paginate('9')->withQueryString();
        $cts = CategoryProduct::where('id', 1)->first();
        $pts1 = Products::orderBy('id', 'asc')->first();
        $pts2 = Products::orderBy('id', 'desc')->first();
        return view('index', compact('categories', 'products', 'cts', 'title', 'pts1', 'pts2'));
    }

    public function dashboard()
    {
        if (auth()->guest()) {
            return redirect('/');
        }
        if (auth()->user()->is_admin == 0) {
            abort(404);
        }
        $title = 'dashboard';
        $product = Products::with('CategoryProduct')->count();
        $user = User::where('is_admin', 0)->count();
        $transaksi = Checkout::where('status', 'Success')->count();
        $checkout = Checkout::where('status', 'Success')->get();
        $totaluang = 0;
        foreach ($checkout as $cd) {
            $totaluang += $cd->subtotal;
        }
        $category = CategoryProduct::count();
        $delivery = Delivery::count();
        $payment = Payment::count();
        return view('d.index', compact('title', 'product', 'user', 'transaksi', 'totaluang', 'category', 'payment', 'delivery'));
    }

    public function report()
    {
        if (auth()->guest()) {
            return redirect('/');
        }
        if (auth()->user()->is_admin == 0) {
            abort(404);
        }
        $title = "Monthly Report";
        $chart1 = StatusProduct::where('status', 'Keluar')->where('desc', 'Checkout')->orderBy('id', 'asc')->get()->groupby(function ($chart1) {
            return Carbon::parse($chart1->waktu)->format('M');
        });
        $chart2 = StatusProduct::where('status', 'Keluar')->with('products')->where('desc', 'Checkout')->orderBy('id', 'asc')->get()->groupby(function ($chart2) {
            return Carbon::parse($chart2->waktu)->format('M');
        });

        // dd($chart2);

        // Chart 1
        $months = [];
        $count = [];
        $income = [];
        foreach ($chart1 as $month => $value) {
            $months[] = $month;
            $p = 0;
            foreach ($value as $sp) {
                $p += $sp->jumlah;
            }
            $count[] = $p;
        }
        // Chart 2
        foreach ($chart2 as $month => $value) {
            $count_income = 0;
            foreach ($value as $sp) {
                $count_income += $sp->products->price * $sp->jumlah;
            }
            $income[$month] = $count_income;
        }
        return view('d.report', compact('title', 'months', 'count', 'income'));
    }
}
