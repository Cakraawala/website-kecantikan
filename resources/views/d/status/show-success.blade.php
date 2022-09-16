@extends('d.dpartials.layouts')

@section('title')
<title>Cakra | {{ $title }}</title>
@endsection

@section('content')

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">

       <h2 class="nav-link" style="color: black">Detail Pesanan No : {{ $cart->no_resi }}</h2>
  </div>
    @if (session()->has('success'))

    <div class="alert alert-success alert-dismissible fade show" role="alert"> {{session('success')}}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
    </div>

    @endif
    <div class="card">
    <div class="card-header">

                <h3 class="mb-3"><i class="fa fa-shopping-cart"></i> History cart</h3></th>

                <h5 style="font-weight: 380">Pesanan {{$cart->users->name }} pada tanggal {{$cart->tgl}}</h5></th>
            </tr>
        </table>
        @if(!empty($cart))

    </div>
    <div class="card-body">

        <h5 class="mb-2">Status  @if ($cart->image)
            <span style="color: green"> Sudah bayar
            @else
            <span style="color: red">Belum bayar
        @endif </span></h5>
        <h5 class="mb-1">No resi : {{ $cart->no_resi }}</h4>
        {{-- <h5 class="mb-4">Transfer ke No Rekening : {{ $p }}</h5> --}}
        <table class="table table-striped">
            <thead>
                <tr>
                    <th width="5%">No.</th>
                    <th >Product</th>
                    <th >Payments</th>
                    <th >Delivery</th>
                    <th >Quantity</th>
                    <th >Price</th>
                    <th style="text-align: left">Total</th>

                </tr>
            </thead>
            <tbody>
                @php
                    $no = 1;
                @endphp
                @foreach ($detail as $cd)
                <tr>
                    <td>{{ $no++}}</td>
                    <td><a href="/products/{{ $cd->products->slug }}" style="text-decoration:none;color:black">{{$cd->products->nm_products}}</a></td>
                    <td  >{{ $cart->payments->nm_payment}}</td>
                    <td  >{{ $cart->deliveries->nm_deliver}}</td>
                    <td >
                        {{ number_format($cd->quantity) }}
                    </td>
                    <td  > Rp.{{ number_format($cd->products->price)}}</td>
                    <td  style="text-align: left">Rp.{{number_format($cd->subtotal)}}</td>

                </tr>
                @endforeach

                <tr>
                    <td colspan="6" class="text-end"><h6>Subtotal :</strong></h6></td>
                    <td colspan="7" align="left"><h6>Rp.{{ number_format($cart->total_products) }}</strong></h6></td>
                </tr>
                <tr>
                    <td colspan="6" class="text-end"><h6>Ongkir :</strong></h6></td>
                    <td colspan="7" align="left"><h6>Rp.{{ number_format($cart->total_delivery) }}</strong></h6></td>
                </tr>
                <tr>
                    <td colspan="6" class="text-end"><h6>Fee :</strong></h6></td>
                    <td colspan="7" align="left"><h6>Rp.{{ number_format($cart->total_fee) }}</strong></h6></td>
                </tr>
                @if ($cart->status == 'Pending')
                <tr>
                    <td colspan="6" class="text-end"><h6>Total yang harus dibayar :</strong></h6></td>
                    <td colspan="7" align="left"><h4> <span style="color: red"> Rp.{{ number_format($cart->subtotal) }} </span></strong></h4></td>

                </tr>
                <tr>
                    @if ($cart->image)

                    {{-- <td></td> --}}
                    <td colspan="5"></td>
                    <td colspan="2">
                    {{-- <td> --}}
                            <h5>Pembayaran berhasil, Tunggu Konfirmasi!</h5>
                        @else
                        <td colspan="6"></td>
                        <td>
                        <form action="/history/{{ $cart->id }}/kirim-bukti" method="get">
                            @csrf
                            <button class="btn btn-primary text-end">
                                <span>
                                    Bayar sekarang!
                                </span>
                            </button>
                        </form>
                        @endif
                        {{-- <a href="" class="btn btn-primary text-end">Bayar Sekarang</a> --}}
                    </td>
                </tr>
                @else
                <tr>
                    <td colspan="6" class="text-end"><h5>Total :</strong></h5></td>
                    <td colspan="7" align="left"><h4> <span style="color: red"> Rp.{{ number_format($cart->subtotal) }} </span></strong></h4></td>
                </tr>
            @endif
            </tbody>
            </table>

            @endif
    </div>
</div>
</main>


@endsection
