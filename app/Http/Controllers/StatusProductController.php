<?php

namespace App\Http\Controllers;

use App\Models\StatusProduct;
use Illuminate\Http\Request;
use Carbon\Carbon;

class StatusProductController extends Controller
{
    public function index(){
        $title = 'Riwayat status barang';
        $statusbarang = StatusProduct::with('users','Products')->orderBy('id', 'desc')->get();

        // dd($statusbarang);
        if(auth()->guest()){
            return redirect('/');}
        if(auth()->user()->is_admin == 0){
            abort(404);}
        return view('d.status-barang.index', compact('title','statusbarang'));
    }
    public function all(){
        $title = 'Riwayat status barang';
        $statusbarang = StatusProduct::with('users','Products')->orderBy('id', 'desc')->get();
        $count = 0;
        foreach($statusbarang as $sb){
            $count += $sb->jumlah;
            // $count[] = $p;
        }
        // dd($pp);

        if(auth()->guest()){
            return redirect('/');}
        if(auth()->user()->is_admin == 0){
            abort(404);}
        return view('d.status-barang.all', compact('title','statusbarang', 'count'));
    }
}
