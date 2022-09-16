@extends('layouts.main')

@section('title')
<title>Cakra | {{ $title }}</title>
@endsection
@section('content')

<div class="containerass" style="margin-bottom: 200px; margin-top:100px;">
    <div class="row">
        <div class="col-md-12">
            <form action="/confirm-checkout" method="post">
                @csrf
                <div class="card">
                    <div class="card-header">
                    <h3><i class="fa fa-shopping-cart"></i> Checkout</h3>
                </div>
                <div class="card-body">
                    <div class="card">
                        <div class="card-header">
                            <h5><i class="fa fa-map-marker"></i> Shipping Address</h5>
                        </div>
                        <div class="card-body">
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <td width= "20%"> <h6><strong>{{ $user->name}} {{ $user->no_wa }}</>  </h6></td>
                                        <td width="70%"><h6> {{ $user->address }}</h6></td>
                                        <td><a href="/my-account/edit" style="text-decoration: none">Ubah</a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card mt-4">
                        <div class="card-header">
                            <h5>Ordered Product</h5>
                            @if(!empty($checkout_detail))

                        </div>
                        <div class="card-body">
                            <table class="table table-striped">
                                {{-- <thead> --}}
                                    <tr>
                                        <th width="5%">No.</th>
                                        <th width="40%">Product</th>
                                        <th width="5%">Quantity</th>
                                        <th width="20%">Price</th>
                                        <th width="20%">Subtotal product</th>
                                        {{-- <th width="10%">Action</th> --}}
                                    </tr>
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
                                {{-- </tbody> --}}
                                {{-- <tfoot> --}}
                                    <tr>
                                        @php
                                        $checkout_main = \App\Models\Cart::where('users_id', auth()->user()->id)->where('status', 'cart')->first();
                                             $notif = \App\Models\CartDetail::where('carts_id', $checkout_main->id)->count();
                                        @endphp
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td align="right"><h5><strong>Subtotal ({{$notif ?? '0'}} Product): </strong></td>
                                        <td align="left"> <h5><span style="color:red">Rp.{{ number_format($checkout->subtotal ?? 0) }} </span>  </h5></td>
                                    </tr>
                                    {{-- </tfoot> --}}
                                </table>
                                @endif
                        </div>
                        </div>
                        <div class="card mt-3">
                            <div class="card-body">
                                <table class="table table-borderless mb-5">
                                    <tbody>
                                        @php
                                        $no = 1;
                                        @endphp
                                    <tr>
                                        <td width="20%"><h5>Delivery Option</h5> </td>
                                        <td width="10%">:</td>
                                        <td align="left" width="40%">
                                            <select name="deliveries_id" id="deliveries_id" required class="form-select @error('deliveries_id') is-invalid @enderror">
                                              <option selected value="">Pilih delivery</option>
                                              @foreach ($delivery as $dv )
                                              <option value="{{ $dv->id }}" id="deliveries_id"> {{ $dv->nm_deliver }} </option>
                                              @endforeach
                                        </td>
                                        <td width="8.5%"></td>

                                        <td align="left" ><h6><strong>Rp.<span name="ongkir" id="ongkir"></span></strong></h6></td>
                                    </tr>
                                    </tbody>
                                </table>
                                <table class="table table-borderless mt-5">
                                    <tbody>
                                        @php
                                        $no = 1;
                                        @endphp
                                    <tr>
                                        <td width="20%"><h5>Payment methode</h5> </td>
                                        <td width=10%>:</td>
                                        <td align="left" width="40%">
                                            <select name="payments_id" id="payments_id" required class="form-select @error('payments_id') is-invalid @enderror">
                                              <option selected>Pilih Payment</option>
                                              @foreach ($payment as $pay)
                                              <option value="{{ $pay->id }}" id="payments_id"> {{ $pay->nm_payment }} </option>
                                              @endforeach
                                        </td>
                                        <td width="8.5%"></td>
                                        <td align="left" ><h6><strong>Rp.<span name="fee" id="fee" ></span></strong></h6></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                            <div class="card">
                                <div class="card-body">
                                    <table class="table table-borderless mt-5">
                                        <tbody>
                                            @php
                                            $no = 1;
                                            @endphp
                                        <tr>
                                            <td> </td>
                                            <td></td>
                                            <td width="15%">Subtotal Produk :</td>

                                            <td width="21%">Rp. {{ number_format($checkout->subtotal ?? 0) }}</td>
                                        </tr>
                                        <tr>
                                            <td> </td>
                                            <td></td>
                                            <td width="15%">Ongkos Kirim :</td>

                                            <td width="21%">Rp. <span name="ongkir1" id="ongkir1"></span></td>
                                        </tr>
                                        <tr>
                                            <td> </td>
                                            <td></td>
                                            <td width="15%">Pajak Pembayaran :</td>

                                            <td width="21%">Rp. <span name="fee1" id="fee1"></span></td>
                                        </tr>

                                        <tr>
                                            <td> </td>
                                            <td></td>
                                            <td width="15%"><h5 class="mt-1">Subtotal :</h5></td>

                                            <td width="21%"><h3 style="color: red" class="mt-1">Rp. <span name="subtotal" id="subtotal" onChange=""></span></h3></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-body">
                                    <table class="table table-borderless">
                                        <tr>

                                            <td colspan="5" class="text-end">
                                                <button type="submit" class="btn btn-danger me-5">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Confirm Checkout &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                </td>
                                            </tr>
                                    </table>

                                </div>
                            </div>

                        </div>
                </div>
            </div>
        </form>
        </div>

    </div>
</div>
  <script>
    document.querySelector('#deliveries_id').addEventListener('change', (e) => {
                $.ajax({
                    url: '/ongkir',
                    type: 'GET',
                    data:{
                        id: $("#deliveries_id").val()
                    },
                    dataType: "JSON",
                    success: function(data){
                        // $(".form-group").show();
                        $("#ongkir").text(data.ongkir);
                        $("#ongkir1").text(data.ongkir);
                        // console.log(data);
                        let total = parseInt("{{ $checkout->subtotal }}")
                        let ongkir = parseInt($('span[name="ongkir"]').html())
                        // let pajak = parseInt($('span[name="fee1"]').html())
                        let subtotal = (total + ongkir)
                        var sss = subtotal.toLocaleString('en-US');
                        $('#subtotal').html(sss)
                    }
                })
    })

    document.querySelector('#payments_id').addEventListener('change', (e) => {
                $.ajax({
                    url: '/fee',
                    type: 'GET',
                    data:{
                        id: $("#payments_id").val()
                    },
                    dataType: "JSON",
                    success: function(data){
                        // $(".form-group").show();
                        $("#fee").text(data.fee);
                        $("#fee1").text(data.fee);

                        let total = parseInt("{{ $checkout->subtotal }}")
                        let ongkir = parseInt($('span[name="ongkir"]').html())
                        let pajak = parseInt($('span[name="fee1"]').html())
                        let subtotal = (total + ongkir + pajak)

                        var sss = subtotal.toLocaleString('en-US');

                        $('#subtotal').html(sss)
                        // console.log(data);
                    }
                })
    })


</script>
@endsection
