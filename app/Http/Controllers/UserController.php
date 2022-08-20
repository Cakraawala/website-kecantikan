<?php

namespace App\Http\Controllers;

use App\Models\District;
use App\Models\Province;
use App\Models\Regency;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
         $User = User::orderBy('id', 'asc')->where('is_admin', 0);
         // $userprovince = $User->Province->name;
        if(request('search')){
            $User->where('name', 'like', '%'. request('search') . '%' )
            ->orWhere('id', 'like', '%' . request('search'))->orWhere('username', 'like', '%' . request('search'));
        }
        // $user = User::with('province', 'regency', 'district')->orderBy('id', 'asc');
        return view('d.user.user', ['user' => $User->get()->where('is_admin', 0), 'title' => 'User']);
    }

    public function create(Request $request)
    {
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
        // $admin = User::find($id);
        $admin = User::findOrFail($id);
        $barang = User::where('id_supplier', '=' , $id)->get();
        return view('admin.show',  ['data_supplier' => $admin, 'data_barang' => $barang]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
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
