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
                                <td><a href="/products/{{ $cd->products->slug }}" class="nav-link" style="color:black">{{$cd->products->nm_products}}</a></td>
                                <td style="text-align: center">
                                    <form action="{{ route('update.cart') }}" method="post">
                                        @csrf
                                    <input type="hidden" name="id" value="{{$cd->id}}">
                                    <input type="number" value="{{ number_format($cd->quantity) }}" class="form-control quantity update-cart" name="quantity">
                                    <button class="btn btn-success" type="submit">Update</button>
                                    </form>
                                </td>
                                {{-- <td style="text-align: center">{{$cd->quantity}}</td> --}}
                                <td> Rp.{{ number_format($cd->products->price)}}</td>
                                <td>Rp.{{number_format($cd->subtotal)}}</td>
                                <td>
                                    <form action="/cart/{{ $cd->id }}/delete" method="post">
                                        @csrf
                                        {{-- {{ method_field('DELETE')}} --}}
                                        <button  onclick="return confirm(' Are you sure to delete this Product?')" class="btn btn-danger btn-sm remove-from-cart" type="submit"><i class="fa fa-trash-o"></i></button>
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
                                <td colspan="2" class="text-start">
                                    <a href="/products" class="btn btn-warning"><i class="fa fa-angle-left"></i> Continue Shopping</a>
                                </td>
                                <td colspan="5" class="text-end">
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
@endsection

@section('scripts')
<script type="text/javascript">
</script>

@endsection
