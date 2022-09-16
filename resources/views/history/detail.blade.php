@extends('layouts.main')

@section('title')
<title>Cakra | {{ $title }}</title>
@endsection
@section('content')

<div class="containerass" style="margin-bottom: 50px; margin-top:100px;">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">

                            <h3 class="mb-3"><i class="fa fa-shopping-cart"></i> History checkout</h3></th>
                            @if (!$checkout->image)
                            <h5 style="font-weight: 380">Pesanan anda pada tanggal {{$checkout->tgl}} berhasil dipesan, selanjutnya silahkan transfer dan kirim bukti pembayaran!</h5></th>
                            @else
                            <h5 style="font-weight: 380">Pesanan anda pada tanggal {{$checkout->tgl}} berhasil dipesan dan dibayar.
                            @endif
                        </tr>
                    </table>
                    @if(!empty($checkout))

                </div>
                <div class="card-body">

                    <h5 class="mb-2">Status  @if ($checkout->image)
                        <span style="color: green"> Sudah bayar
                        @else
                        <span style="color: red">Belum bayar
                    @endif </span></h5>
                    <h5 class="mb-1">No resi : {{ $checkout->no_resi }}</h4>
                    <h5 class="mb-4">Transfer ke No Rekening : 332312304</h5>
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
                                <td  >{{ $no++}}</td>
                                <td  ><a href="/products/{{ $cd->products->slug }}" style="text-decoration:none;color:black">{{$cd->products->nm_products}}</a></td>
                                <td  >{{ $checkout->payments->nm_payment}}</td>
                                <td  >{{ $checkout->deliveries->nm_deliver}}</td>
                                <td >
                                    {{ number_format($cd->quantity) }}
                                </td>
                                <td  > Rp.{{ number_format($cd->products->price)}}</td>
                                <td  style="text-align: left">Rp.{{number_format($cd->subtotal)}}</td>

                            </tr>
                            @endforeach

                            <tr>
                                <td colspan="6" class="text-end"><h6>Subtotal :</strong></h6></td>
                                <td colspan="7" align="left"><h6>Rp.{{ number_format($checkout->total_products) }}</strong></h6></td>
                            </tr>
                            <tr>
                                <td colspan="6" class="text-end"><h6>Ongkir :</strong></h6></td>
                                <td colspan="7" align="left"><h6>Rp.{{ number_format($checkout->total_delivery) }}</strong></h6></td>
                            </tr>
                            <tr>
                                <td colspan="6" class="text-end"><h6>Fee :</strong></h6></td>
                                <td colspan="7" align="left"><h6>Rp.{{ number_format($checkout->total_fee) }}</strong></h6></td>
                            </tr>
                            @if ($checkout->status == 'Pending')
                            <tr>
                                <td colspan="6" class="text-end"><h6>Total yang harus dibayar :</strong></h6></td>
                                <td colspan="7" align="left"><h4> <span style="color: red"> Rp.{{ number_format($checkout->subtotal) }} </span></strong></h4></td>

                            </tr>
                            <tr>
                                @if ($checkout->image)

                                {{-- <td></td> --}}
                                <td colspan="5"></td>
                                <td colspan="2">
                                {{-- <td> --}}
                                        <h5>Pembayaran berhasil, Tunggu Konfirmasi!</h5>
                                    @else
                                    <td colspan="6"></td>
                                    <td>
                                    <form action="/history/{{ $checkout->id }}/kirim-bukti" method="get">
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
                                <td colspan="7" align="left"><h4> <span style="color: red"> Rp.{{ number_format($checkout->subtotal) }} </span></strong></h4></td>
                            </tr>
                        @endif
                        </tbody>
                        </table>

                        @endif
                </div>
            </div>
        </div>

    </div>
</div>
@endsection

@section('scripts')
<script type="text/javascript">
</script>

@endsection
