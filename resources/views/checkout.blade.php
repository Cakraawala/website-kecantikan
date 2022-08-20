@extends('layouts.main')

@section('title')
<title>Cakra | {{ $title }}</title>
@endsection
@section('content')

<div class="containerass" style="margin-bottom: 400px; margin-top:100px;">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3>Checkout</h3>
                </div>
                <div class="card-body">
                    <div class="card">
                        <div class="card-header">
                            <h4> Alamat pengiriman</h4>
                        </div>
                        <div class="card-body">

                        </div>
                    </div>
                    <div class="card mt-4">
                        <div class="card-header">
                            <h3><i class="fa fa-shopping-cart"></i> Checkout</h3>
                            @if(!empty($checkout_detail))

                        </div>
                        <div class="card-body">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th width="5%">No.</th>
                                        <th width="40%">Product</th>
                                        <th width="5%">Quantity</th>
                                        <th width="20%">Price</th>
                                        <th width="20%">Subtotal product</th>
                                        {{-- <th width="10%">Action</th> --}}
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $no = 1;
                                    @endphp
                                    @foreach ($checkout_detail as $cd)
                                    <tr>
                                        <td>{{ $no++}}</td>
                                        <td>{{$cd->products->nm_products}}</td>
                                        <td align="center">{{ $cd->quantity }}</td>
                                        {{-- <td style="text-align: center">{{$cd->quantity}}</td> --}}
                                        <td> Rp.{{ number_format($cd->products->price)}}</td>
                                        <td>Rp.{{number_format($cd->subtotal)}}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                                </table>
                                @endif
                        </div>
                        </div>
                        <div class="card mt-3">
                            <div class="card-header">
                                <h3>Delivery Option</h3>
                            </div>
                            <div class="card-body">

                            </div>
                        </div>
                        <div class="card mt-3">
                            <div class="card-header">
                                <h3>Payment Methode</h3>
                            </div>
                            <div class="card-body">

                            </div>
                        </div>
                        </div>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
