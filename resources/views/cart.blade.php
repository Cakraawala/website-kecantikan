@extends('layouts.main')

@section('title')
<title>{{ $title }}</title>
@endsection
@section('content')

<div class="containerass" style="margin-bottom: 400px; margin-top:100px;">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3><i class="fa fa-shopping-cart"></i> YOUR CART</h3>
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
                                <th width="20%">Total</th>
                                <th width="10%">Action</th>
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
                                <td style="text-align: center">
                                    <input type="number" value="{{ number_format($cd->quantity) }}" class="form-control quantity update-cart" />
                                </td>
                                {{-- <td style="text-align: center">{{$cd->quantity}}</td> --}}
                                <td> Rp.{{ number_format($cd->products->price)}}</td>
                                <td>Rp.{{number_format($cd->subtotal)}}</td>
                                <td>
                                    <form action="/cart/{{ $cd->id }}/delete" method="post">
                                        @csrf
                                        {{-- {{ method_field('DELETE')}} --}}
                                        <button  onclick="return confirm(' Are you sure to delete this post?')" class="btn btn-danger btn-sm remove-from-cart" type="submit"><i class="fa fa-trash-o"></i></button>
                                    </form>

                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="6" class="text-end"><h3><strong>Total Rp.{{ number_format($checkout->subtotal ?? 0) }}</strong></h3></td>
                            </tr>
                            <tr>
                                <td colspan="6" class="text-end">
                                    <a href="/products" class="btn btn-warning"><i class="fa fa-angle-left"></i> Continue Shopping</a>
                                    <a href="/checkout" class="btn btn-success">Checkout</button>
                                    </td>
                                </tr>
                            </tfoot>
                        </table>
                        @endif
                </div>
            </div>
        </div>

    </div>
</div>












{{-- <!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Main content -->
    <section class="content" style="margin-bottom: 300px;">
        <div class="album py-5 bg-light"  style="margin-top: 130px;">
            <div class="container">

<table id="cart" class="table table-hover table-condensed mb-5">
    <thead>
        <tr>
            <th style="width:50%">Product</th>
            <th style="width:10%">Price</th>
            <th style="width:8%">Quantity</th>
            <th style="width:22%" class="text-center">Subtotal</th>
            <th style="width:10%"></th>
        </tr>
    </thead>
    <tbody>
        @php $total = 0 @endphp
        @if(session('cart'))
            @foreach(session('cart') as $id => $details)
                @php $total += $details['price'] * $details['quantity'] @endphp
                <tr data-id="{{ $id }}">
                    <td data-th="Product">
                        <div class="row">
                            <div class="col-sm-3 hidden-xs"><img src="{{ $details['image'] }}" width="100" height="100" class="img-responsive"/></div>
                            <div class="col-sm-9">
                                <h4 class="nomargin">{{ $details['nm_products'] }}</h4>
                            </div>
                        </div>
                    </td>
                    <td data-th="Price">Rp.{{ number_format($details['price']) }}</td>
                    <td data-th="Quantity">
                        <input type="number" value="{{ number_format($details['quantity']) }}" class="form-control quantity update-cart" />
                    </td>
                    <td data-th="Subtotal" class="text-center">Rp.{{ number_format($details['price'] * $details['quantity']) }}</td>
                    <td class="actions" data-th="">
                        <button class="btn btn-danger btn-sm remove-from-cart"><i class="fa fa-trash-o"></i></button>
                    </td>
                </tr>
            @endforeach
        @endif
    </tbody>
    <tfoot>
        <tr>
            <td colspan="5" class="text-end"><h3><strong>Total Rp.{{ number_format($total) }}</strong></h3></td>
        </tr>
        <tr>
            <td colspan="5" class="text-end">
                <a href="/" class="btn btn-warning"><i class="fa fa-angle-left"></i> Continue Shopping</a>
                <a href="/transaksi/checkout" class="btn btn-success">Checkout</button>
            </td>
        </tr>
    </tfoot>
</table>
</div>
</div>
</section>
</div> --}}
@endsection

@section('scripts')
<script type="text/javascript">

    $(".update-cart").change(function (e) {
        e.preventDefault();

        var ele = $(this);

        $.ajax({
            url: '{{ route('update.cart') }}',
            method: "patch",
            data: {
                _token: '{{ csrf_token() }}',
                id: ele.parents("tr").attr("data-id"),
                quantity: ele.parents("tr").find(".quantity").val()
            },
            success: function (response) {
               window.location.reload();
            }
        });
    });

    // $(".remove-from-cart").click(function (e) {
    //     e.preventDefault();

    //     var ele = $(this);

    //     if(confirm("Are you sure want to remove?")) {
    //         $.ajax({
    //             url: '{{ route('remove.from.cart') }}',
    //             method: "DELETE",
    //             data: {
    //                 _token: '{{ csrf_token() }}',
    //                 id: ele.parents("tr").attr("data-id")
    //             },
    //             success: function (response) {
    //                 window.location.reload();
    //             }
    //         });
    //     }
    // });

</script>

@endsection
