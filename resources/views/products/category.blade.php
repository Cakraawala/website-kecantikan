@extends('layouts.main')

@section('title')
    <title> CAKRA | All Product {{ $title }}</title>
@endsection
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Main content -->
        <section class="content">
            <div class="album py-5 bg-light">
                <div class="container mt-5">
                    <h2 class="mb-5">Category : {{ $title }}</h2>
                    <div class="row g-3">
                        @foreach ($products as $product)
                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="card shadow-sm shadow-outline-success">
                                    <a href="/products/{{ $product->slug }}">

                                        @if ($product->image)
                                            <img src="{{ asset('storage/' . $product->image) }}"
                                                class="bd-placeholder-img card-img-top" alt="{{ $product->nm_products }}"
                                                width="300" height=300">
                                        @else
                                            <img src="https://source.unsplash.com/700x400?{{ $product->nm_products }}"
                                                class="bd-placeholder-img card-img-top" alt="{{ $product->nm_products }}"
                                                width="214" height="225">
                                        @endif
                                        <div class="card-body">
                                            <h4 class="card-text" style="height: 52px"><a
                                                    style="text-decoration: none; color:#4d4949;"
                                                    href="/products/{{ $product->slug }}">{{ $product->nm_products }}</a>
                                            </h4>
                                            <div class="d-flex justify-content-between align-items-">
                                                <h6 style="color: red">Rp.{{ number_format($product->price) }}</h6>
                                                <h6 class="text-muted mb-3">Stock : {{ $product->quantity }}</h6>
                                            </div>
                                            <div class="card-footer">
                                                <div class="d-flex justify-content-between align-items-">
                                                    <h6></h6>
                                                    <div class="btn-group">
                                                        <form action="/add-to-cart/{{ $product->id }}" method="POST">
                                                            @csrf
                                                            <input type="hidden" name="quantity" value="1">
                                                            <button
                                                                class="btn btn-sm btn-outline-success fa fa-shopping-cart"
                                                                type="submit"></button>
                                                        </form>

                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
    </div>
@endsection
