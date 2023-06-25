@extends('layouts.main')

@section('title')
    <title>Cakra | Product {{ $title }}</title>
@endsection
@section('content')
    <div class="con" style="margin-top: 100px; margin-bottom:200px;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    @if (session()->has('error'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert"> {{ session('error') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
                        </div>
                    @endif
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    @if ($product->image)
                                        <a href="{{ asset('storage/' . $product->image) }}">
                                            <img class="bd-placeholder-img overflow-hidden bd-placeholder-img-lg featurette-image img-fluid mx-auto"
                                                width="500" height="500"
                                                src="{{ asset('storage/' . $product->image) }}"
                                                alt="{{ $product->CategoryProduct->nm_category }}">
                                        </a>
                                    @else
                                        <img src="https://source.unsplash.com/700x400?{{ $product->CategoryProduct->nm_category }}"
                                            class="bd-placeholder-img card-img-top"
                                            alt="{{ $product->CategoryProduct->nm_category }}" width="250"
                                            height="400">
                                    @endif
                                </div>
                                <div class="col-md-6 mt-5">
                                    <h1 style="font-family: Calisto MT">&nbsp;{{ $product->nm_products }}</h1>
                                    <h6>&nbsp; in <a href="/categories/{{ $product->CategoryProduct->slug }}"
                                            style="text-decoration: none;"> {{ $product->CategoryProduct->nm_category }}
                                    </h6></a>
                                    <table class="table table-borderless">
                                        <tbody>
                                            <tr>
                                                <td>Price</td>
                                                <td>:</td>
                                                <td>Rp. {{ number_format($product->price) }}</td>
                                            </tr>
                                            <tr>
                                                <td>Stock</td>
                                                <td>:</td>
                                                <td>{{ number_format($product->quantity) }}</td>
                                            </tr>
                                            <tr>
                                                <td>Deskripsi</td>
                                                <td>:</td>
                                                <td>{{ $product->deskripsi ?? '-' }}</td>
                                            </tr>
                                            <tr>
                                                <td>Quantity</td>
                                                <td>:</td>
                                                <td>
                                                    <form action="/add-to-cart/{{ $product->id }}" method="POST">
                                                        @csrf
                                                        <div class="row">
                                                            <div class="col-6 col-md-8 col-lg-6">
                                                                <input type="number" class="form-control" name="quantity"
                                                                    required value="1">
                                                                <button class="btn btn-primary mt-3" type="submit"><i
                                                                        class="fa fa-shopping-cart"></i>&nbsp; &nbsp;Add To
                                                                    Cart</button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
