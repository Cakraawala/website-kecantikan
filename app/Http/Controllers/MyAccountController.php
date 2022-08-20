<?php

namespace App\Http\Controllers;

use App\Models\District;
use App\Models\Province;
use App\Models\Regency;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class MyAccountController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $title = 'My Profile Account';
        $user = User::where('id', Auth::user()->id)->first();
        return view('user.index', compact('user', 'title', 'province', 'regency', 'district'));
    }

    public function edit(){
        $title = 'Edit Profile Account';
        $user = User::where('id', Auth::user()->id)->first();
        return view('user.edit', compact('user', 'title', 'province', 'regency', 'district'));
    }


    public function update(Request $request){
        $this->validate($request, [
            'password' => 'required|min:3|max:255',
            'confirmed_password' => 'required|same:password'
        ]);
        $user = User::where('id', Auth::user()->id)->first();
        $user->name = $request->name;
        $user->username = $request->username;
        $user->no_wa = $request->no_wa;
        $user->email = $request->address;
        $user->jk = $request->jk;
        $user->password = Hash::make($request->password);
        dd($request);
    }
}
