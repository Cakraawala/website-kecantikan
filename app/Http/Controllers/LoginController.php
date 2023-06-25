<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Session;
use RealRashid\SweetAlert\Facades\Alert;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.login');
    }

    public function authenticate(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);
        $remember = $request->has('remember') ? true : false;
        $minutes = 1440;
        if (Auth::attempt(['username' => $request->input('username'), 'password' => $request->input('password')], $remember)) {
            if ($request->has('remember')) {
                Cookie::queue('username', $request->username, $minutes);
                Cookie::queue('password', $request->password, $minutes);
            }
            $nama = Auth()->user()->name;
            Alert::success('Welcome back ' . $nama, 'Selamat berbelanja!');
            return redirect()->intended('/');
        }

        return back()->with('loginError', 'Login Failed!');
    }

    public function logout()
    {
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        Alert::success('Success', 'Akun Anda Berhasil Di Logout!');
        return redirect('/');
    }
}
