@extends('layouts.main')

@section('title')
    <title>Cakra | {{ $title }}</title>
@endsection
@section('content')

    <div class="container" style="padding-top:12vh">
        <div class="row">
            <div class="col-md-12 col-lg-12 col-12">
                <div class="card border-0 shadow">
                    <div class="card-body">
                        <h3 class="mb-3"><i class="fa fa-shopping-cart"></i> History checkout</h3>
                        <hr>
                        @if (!$checkout->image)
                            <h5 style="font-weight: 380">Pesanan anda pada tanggal {{ $checkout->tgl }} berhasil dipesan,
                                selanjutnya silahkan transfer dan kirim bukti pembayaran!</h5>
                        @else
                            <h5 style="font-weight: 380">Pesanan anda pada tanggal {{ $checkout->tgl }} berhasil dipesan dan
                                dibayar.
                        @endif

                        @if (!empty($checkout))
                            <h5 class="mb-2">Status @if ($checkout->image)
                                    <span style="color: green"> Sudah bayar
                                    @else
                                        <span style="color: red">Belum bayar
                                @endif </span></h5>
                            <h5 class="mb-1">No resi : {{ $checkout->no_resi }}</h4>
                                <h5 class="mb-4">Transfer ke No Rekening : 332312304</h5>
                        @endif

                        <table class="table table-sm table-striped">
                            <thead>
                                <tr>
                                    <th width="5%">No.</th>
                                    <th>Product</th>
                                    <th>Payments</th>
                                    <th>Delivery</th>
                                    <th>Quantity</th>
                                    <th>Price</th>
                                    <th style="text-align: left">Total</th>

                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $no = 1;
                                @endphp
                                @foreach ($detail as $cd)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td class="subtite"><a href="/products/{{ $cd->products->slug }}"
                                                style="text-decoration:none;color:black">{{ $cd->products->nm_products }}</a>
                                        </td>
                                        <td>{{ $checkout->payments->nm_payment }}</td>
                                        <td>{{ $checkout->deliveries->nm_deliver }}</td>
                                        <td>
                                            {{ number_format($cd->quantity) }}
                                        </td>
                                        <td> Rp.{{ number_format($cd->products->price) }}</td>
                                        <td style="text-align: left">Rp.{{ number_format($cd->subtotal) }}</td>

                                    </tr>
                                @endforeach

                                <tr>
                                    <td colspan="6" class="text-end">
                                        <h6>Subtotal :</h6>
                                    </td>
                                    <td colspan="7" align="left">
                                        <h6>Rp.{{ number_format($checkout->total_products) }}</h6>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="6" class="text-end">
                                        <h6>Ongkir :</h6>
                                    </td>
                                    <td colspan="7" align="left">
                                        <h6>Rp.{{ number_format($checkout->total_delivery) }}</h6>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="6" class="text-end">
                                        <h6>Fee :</h6>
                                    </td>
                                    <td colspan="7" align="left">
                                        <h6>Rp.{{ number_format($checkout->total_fee) }}</h6>
                                    </td>
                                </tr>
                                @if ($checkout->status == 'Pending')
                                    <tr>
                                        <td colspan="6" class="text-end">
                                            <h6>Total yang harus dibayar :</h6>
                                        </td>
                                        <td colspan="7" align="left">
                                            <h6> <span style="color: red">
                                                    Rp.{{ number_format($checkout->subtotal) }}
                                                </span></h4>
                                        </td>

                                    </tr>
                                    <tr>
                                        @if ($checkout->image)
                                            <td colspan="4"></td>
                                            <td colspan="3" class="text-center">
                                                <h6>Pembayaran berhasil, Tunggu Konfirmasi!</h6>
                                            </td>
                                        @else
                                            <td colspan="6"></td>
                                            <td width="20%">
                                                <form action="/history/{{ $checkout->id }}/kirim-bukti" method="get">
                                                    @csrf
                                                    <button class="btn btn-primary text-end">
                                                        <span>
                                                            Bayar
                                                        </span>
                                                    </button>
                                                </form>
                                            </td>
                                        @endif
                                        {{-- <a href="" class="btn btn-primary text-end">Bayar Sekarang</a> --}}
                                    </tr>
                                @else
                                    <tr>
                                        <td colspan="6" class="text-end">
                                            <h5>Total :</h5>
                                        </td>
                                        <td colspan="7" align="left">
                                            <h5> <span style="color: red">
                                                    Rp.{{ number_format($checkout->subtotal) }}
                                                </span></h5>
                                        </td>
                                    </tr>
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection

@section('scripts')
    <script type="text/javascript"></script>
@endsection
