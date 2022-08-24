<?php

namespace App\Http\Controllers;

use App\Models\District;
use App\Models\Province;
use App\Models\Regency;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

class MyAccountController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $title = 'My Profile Account';
        $user = User::where('id', Auth::user()->id)->first();
        return view('user.index', compact('user', 'title'));
    }

    public function edit(){
        $title = 'Edit Profile Account';
        $user = User::where('id', Auth::user()->id)->first();
        return view('user.edit', compact('user', 'title'));
    }


    public function update(Request $request){
        $this->validate($request, [
            'password' => 'confirmed',
            'confirmed_password' => 'same:password'
        ]);
        $user = User::where('id', Auth::user()->id)->first();
        $user->name = $request->name;
        $user->username = $request->username;
        $user->no_wa = $request->no_wa;
        $user->email = $request->email;
        $user->jk = $request->jk;
        $user->tgl_lhr = $request->tgl_lhr;
        $user->code_pos = $request->code_pos;
        $user->address = $request->address;
        if(!empty($request->password)){
            $user->password = Hash::make($request->password);
        }
        $user->update();
        Alert::success('Update succes', 'Your profile successfully update!');
        return redirect('/my-account');
    }
}
