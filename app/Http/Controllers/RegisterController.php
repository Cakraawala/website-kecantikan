<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index(){
        return view('login.register');
    }

    public function store(Request $request){
        $validated = $request->validate([
            'name' => 'required|max:255',
            'username' => ['required', 'min:3', 'max:255', 'unique:users'],
            'password' => ['required', 'min:3', 'max:255'],
            'confirmation_password' => ['required,same:password']
        ]);

        $validated['password'] = bcrypt($validated['password']);

       User::create($validated);

       $request->session();

       return redirect('/login')->with('success', 'Registration successfull. Please Login');
    }
}
