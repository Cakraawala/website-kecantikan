<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function dashboardindex(){
        if(auth()->guest()){
            return redirect('/');
        }
        if(auth()->user()->is_admin == 0){
            abort(404);
        }
        $payment = Payment::orderBy('id', 'asc');

        if(request('search')){
            $payment->where('nm_payment', 'like', '%'. request('search') . '%' )
            ->orWhere('fee', 'like', '%' . request('search'). '%')->orWhere('id', 'like' , '%' . request('search'));
        }

        return view('d.payment.index', ['payment' => $payment->get(), 'title' => 'Payment']);
    }


    public function fee(Request $request){
        $Payment = Payment::where('id', $request->id)->first();
        return json_encode($Payment);
    }


    public function create(Request $request)
    {
        if(auth()->guest()){
            return redirect('/');
        }
        if(auth()->user()->is_admin == 0){
            abort(404);
        }
        $payment = Payment::all();
        return view('d.payment.create', ['payment' => $payment,  'title' => 'Buat data Payment', 'payment' => $payment]);
        Payment::create($request->all());
        return redirect('/dashboard/payment')->with('success', 'Data payment Berhasil Dibuat');
    }

    public function store(Request $request)
    {
        Payment::create($request->all());
        return redirect('/dashboard/payment')->with('success', 'Data payment Berhasil Dibuat');
    }

    public function edit($id)
    {
        if(auth()->guest()){
            return redirect('/');
        }
        if(auth()->user()->is_admin == 0){
            abort(404);
        }
        $payment = Payment::findOrFail($id);
        // dd($payment);
        return view('d.payment.edit', ['payment'=> $payment, 'title' => 'Edit data payment']);

    }
    public function update(Request $request, $id)
    {
        $payment = Payment::findOrFail($id);
        $payment->update($request->all());
        return redirect('/dashboard/payment')->with('success','Payment  Berhasil di Perbarui');
    }

    public function delete($id){
        $payment = Payment::findOrFail($id);
        $payment->delete($payment);
        return redirect('/dashboard/payment')->with('success','Payment Sukses Di Dihapus');
    }

}
