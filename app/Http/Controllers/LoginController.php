<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use RealRashid\SweetAlert\Facades\Alert;

class LoginController extends Controller
{
    public function index(){
        Alert::error('title', 'body');
        return view('login.login');
        Alert::error('title', 'body');
    }

    public function authenticate(Request $request){
        $jamal = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        if (Auth::attempt($jamal)){
            $request->session()->regenerate();
            return redirect()->intended('/')->with('success','Login anda berhasil, Welcome back');
        }

        return back()->with('loginError', 'Login Failed!');
    }

    public function logout(){
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect('/');
    }
}
