<?php

namespace App\Http\Controllers;

use App\Models\Delivery;
use Illuminate\Http\Request;

class DeliveryController extends Controller
{
    public function dashboardindex(){
        $delivery = Delivery::all();
        if(request('search')){
            $delivery->where('nm_deliver', 'like', '%'. request('search') . '%' )
            ->orWhere('id', 'like', '%' . request('search'))->orWhere('ongkir', 'like', '%'. request('search'));
        }
        return view('d.delivery.index', ['delivery' => $delivery, 'title' => 'Delivery']);
    }

    public function create(Request $request)
    {
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
        $delivery = delivery::findOrFail($id);
        return view('d.delivery.edit', ['delivery'=> $delivery, 'title' => 'Edit data delivery']);

    }

    public function update(Request $request, $id)
    {
        $delivery = delivery::findOrFail($id);
        $delivery->update($request->all());
        return redirect('/dashboard/delivery')->with('success','Category Product  Berhasil di Perbarui');
    }

    public function delete($id){
        $delivery = delivery::findOrFail($id);
        $delivery->delete($delivery);
        return redirect('/dashboard/delivery')->with('success','Category Product Sukses Di Dihapus');
    }

}
