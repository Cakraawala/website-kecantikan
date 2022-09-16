<?php

namespace App\Http\Controllers;

use App\Models\Checkout;
use App\Models\District;
use App\Models\Province;
use App\Models\Regency;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        if(auth()->guest()){
            return redirect('/');
        }
        if(auth()->user()->is_admin == 0){
            abort(404);
        }
         $User = User::orderBy('id', 'asc')->where('is_admin', 0);
         // $userprovince = $User->Province->name;
        if(request('search')){
            $User->where('name', 'like', '%'. request('search') . '%' )
            ->orWhere('id', 'like', '%' . request('search'))->orWhere('username', 'like', '%' . request('search'))->orWhere('email', 'like', '%' . request('search') . '%');
        }
        // $user = User::with('province', 'regency', 'district')->orderBy('id', 'asc');
        return view('d.user.user', ['user' => $User->get()->where('is_admin', 0), 'title' => 'User']);
    }

    public function create(Request $request)
    {
        if(auth()->guest()){
            return redirect('/');
        }
        if(auth()->user()->is_admin == 0){
            abort(404);
        }
        return view('d.user.create', ['user' => User::all(), 'title' => 'Buat data User']);
        User::create($request->all());
        return redirect('/dashboard/user')->with('success', 'Data User Berhasil Dibuat');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        User::create($request->all());
        return redirect('/dashboard/user')->with('success', 'Data User Berhasil Dibuat');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if(auth()->guest()){
            return redirect('/');
        }
        if(auth()->user()->is_admin == 0){
            abort(404);
        }
        // $admin = User::find($id);
        $user = User::findOrFail($id);
        $title = $user->username;
        $checkout = Checkout::where('users_id', $user->id)->get();
        // $c = Checkout::where('users_id', $user->id)->first();
        // $cc = $c->carts->detail;
        // dd($cc);
        return view('d.user.show', compact('user','title','checkout'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if(auth()->guest()){
            return redirect('/');
        }
        if(auth()->user()->is_admin == 0){
            abort(404);
        }
        $user = User::findOrFail($id);
        return view('d.user.edit', ['user'=> $user,'title' => 'Edit data User']);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $user->update($request->all());
        return redirect('/dashboard/user')->with('success','Database  Berhasil di Perbarui');
    }

    public function delete($id){
        $user = User::findOrFail($id);
        $user->delete($user);
        return redirect('/dashboard/user')->with('success','Data Sukses Di Dihapus');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
