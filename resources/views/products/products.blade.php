@extends('layouts.main')

@section('title')
<title>{{ $title }}</title>
@endsection
@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Main content -->
    <section class="content" >
        <div class="album py-5 bg-light">
            <div class="container mt-5">
              <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                  @foreach ($products as $product)
                <div class="col">
                  <div class="card shadow-sm">
                    <a href="/products/{{ $product->slug }}">

                        @if ($product->image)
                        <img src="{{asset('storage/' . $product->image)}}"
                        class="bd-placeholder-img card-img-top" alt="{{ $product->CategoryProduct->nm_category }} width="100%" height="225" ">
                            @else
                            <img src="https://source.unsplash.com/500x400?{{ $product->CategoryProduct->nm_category }}"
                            class="bd-placeholder-img card-img-top" alt="{{ $product->CategoryProduct->nm_category }} width="100%" height="225" ">
                        @endif



                      {{-- <svg class="bd-placeholder-img card-img-top" width="100%" height="225" src="" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">{{ $product->nm_products }}</text></svg> --}}

                      <div class="card-body">
                      <h4 class="card-text"><a style="text-decoration: none; color:#4d4949;" href="/products/{{ $product->slug }}">{{ $product->nm_products }}</a></h4>
                      <div class="d-flex justify-content-between align-items-">


                          <h6  style="color: red">Rp.{{ $product->price }}</h6>


                        <div class="btn-group">
                            <a href="{{ route('add.to.cart', $product->id) }}" class="btn btn-sm btn-outline-secondary mt-3 fa fa-shopping-cart"></a>
                              {{-- <a href="{{ route('add.to.cart', $product->id) }}" class="btn btn-sm btn-outline-secondary mt-3 fa fa-shopping-cart"></a> --}}
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
  <div class="d-flex justify-content-center mb-5">
  {{ $products->links() }}
</div>
</section>
  <!-- /.content-wrapper -->
@endsection