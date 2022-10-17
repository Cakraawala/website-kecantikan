<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StatusProductController extends Controller
{
    public function index(){
        return view('d.status-barang.index');
    }
}
