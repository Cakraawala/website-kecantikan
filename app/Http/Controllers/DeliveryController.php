<?php

namespace App\Http\Controllers;

use App\Models\Delivery;
use Illuminate\Http\Request;

class DeliveryController extends Controller
{
    public function dashboardindex(){
        if(auth()->guest()){
            return redirect('/');
        }
        if(auth()->user()->is_admin == 0){
            abort(404);
        }
        $delivery = Delivery::orderBy('id', 'asc');
        if(request('search')){
            $delivery->where('nm_deliver', 'like', '%'. request('search') . '%' )->orWhere('id', 'like', '%' . request('search'). '%')->orWhere('ongkir', 'like', '%'. request('search') . '%')->orWhere('estimasi', 'like', '%' . request('search') . '%');
        }
        return view('d.delivery.index', ['delivery' => $delivery->get(), 'title' => 'Delivery']);
    }

    public function ongkir(Request $request){
        $delivery = Delivery::where('id', $request->id)->first();
        return json_encode($delivery);
    }

    public function create(Request $request)
    {
        if(auth()->guest()){
            return redirect('/');
        }
        if(auth()->user()->is_admin == 0){
            abort(404);
        }
        return view('d.delivery.create', ['delivery' => Delivery::all(),  'title' => 'Buat data Delivery']);
        delivery::create($request->all());
        return redirect('/dashboard/delivery')->with('success', 'Data Category product Berhasil Dibuat');
    }
    public function store(Request $request)
    {
        delivery::create($request->all());
        return redirect('/dashboard/delivery')->with('success', 'Data Category Product Berhasil Dibuat');
    }

    public function edit($id)
    {
        if(auth()->guest()){
            return redirect('/');
        }
        if(auth()->user()->is_admin == 0){
            abort(404);
        }
        $delivery = Delivery::findOrFail($id);
        return view('d.delivery.edit', ['delivery'=> $delivery, 'title' => 'Edit data delivery']);

    }

    public function update(Request $request, $id)
    {
        $delivery = Delivery::findOrFail($id);
        $delivery->update($request->all());
        return redirect('/dashboard/delivery')->with('success','Category Product  Berhasil di Perbarui');
    }

    public function delete($id){
        $delivery = Delivery::findOrFail($id);
        $delivery->delete($delivery);
        return redirect('/dashboard/delivery')->with('success','Category Product Sukses Di Dihapus');
    }

}
