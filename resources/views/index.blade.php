@extends('layouts.main')

@section('title')
    <title>Cakra | {{ $title }}</title>
@endsection

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

    <!-- Main content -->
    <section class="content">

        <div class="container-atasas" style="margin-top: 100px;">
            @if (session()->has('success'))

            <div class="alert alert-success alert-dismissible fade show" style="z-index: 1000" role="alert" width="50px"> {{session('success')}}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
            </div>

            @endif
            <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">

                <div class="col-md-12 p-lg-5 mx-auto my-5" style="height: 300px">
                  <h1 class="display-4 fw-normal" style="font-family:Brush Script MT;" >Cakra Company</h1>
                      <p class="lead fw-normal">Menyediakan produk kecantikan skincare Nomer 1 di Indonesia!</p>
                  <!-- <a class="btn btn-outline-secondary" href="#">Coming soon</a> -->
                </div>
                <div style="width: 220px" class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
                <div style="width: 230px" class="product-device shadow-sm d-none d-md-block"></div>

              </div>

        </div>


        <div class="container" style="margin-top: 70px">

              <!-- Marketing messaging and featurettes
              ================================================== -->
              <!-- Wrap the rest of the page in another container to center all the content. -->
                <hr class="featurette-divider">
                <div class="row featurette">
                  <div class="col-md-7">
                    <a style="text-decoration:none;color:black" href="/products/{{ $pts1->slug }}">
                    <h2 class="featurette-heading">{{ $pts1->nm_products }}. <span class="text-muted">Barang pertama dan terlaris!</span></h2></a>
                    @if ($pts1->deskripsi)
                    <p class="lead">
                        {{ $pts1->deskripsi }}
                    </p>
                    @else
                    <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo nihil quia dolorum unde autem perferendis magnam delectus adipisci! Repellendus, ipsum totam quod dolorem rerum unde illum odio quia velit illo..</p>
                        @endif
                  </div>
                  <div class="col-md-5">
                    @if ($pts1->image)
                    <img class="bd-placeholder-img overflow-hidden bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" src="{{ asset('storage/'. $pts1->image) }}">

                    @else
                    <img class="bd-placeholder-img overflow-hidden bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" src="https://source.unsplash.com/500x500?{{ $pts1->nm_products }}">
                    @endif

                  </div>
                </div>

                <hr class="featurette-divider">

                <div class="row featurette">
                  <div class="col-md-7 order-md-2">
                    <a style="text-decoration:none;color:black" href="/products/{{ $pts2->slug }}"><h2 class="featurette-heading">{{ $pts2->nm_products}}. <span class="text-muted">Barang terbaru.</span></h2></a>

                    @if ($pts2->deskripsi)
                    <p class="lead mt-3">
                        {{ $pts2->deskripsi }}
                    </p>
                    @else
                    <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo nihil quia dolorum unde autem perferendis magnam delectus adipisci! Repellendus, ipsum totam quod dolorem rerum unde illum odio quia velit illo..</p>
                        @endif
                  </div>
                  <div class="col-md-5 order-md-1">
                    @if ($pts2->image)
                    <img class="bd-placeholder-img overflow-hidden bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" src="{{ asset('storage/'. $pts2->image) }}">

                    @else
                    <img class="bd-placeholder-img overflow-hidden bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" src="https://source.unsplash.com/500x500?{{ $pts2->nm_products }}">
                    @endif
                  </div>
                </div>

                <hr class="featurette-divider">

                <div class="row featurette">
                  <div class="col-md-7">
                    <h2 class="featurette-heading">Coming soon! <span class="text-muted">Blue Calming Mask Moisturizer</span></h2>
                    <p class="lead">Menenangkan kulit, bantu perbaiki skin barrier, mempercepat penyembuhan jerawat dan bekas jerawat. memberikan kelembaban ekstra untuk kulit wajah yang kenyal dan kencang.</p>
                  </div>
                  <div class="col-md-5">
                    <img class="bd-placeholder-img overflow-hidden bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" src="/img/comingsoon.jpg">

                  </div>
                </div>

                <hr class="featurette-divider">

                {{-- <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">

                      @php
                          $nob = 1;
                          $pp = 2;
                      @endphp
                      @foreach ($categories as $c)
                      @if ($c->id == 1)
                      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                      @else
                      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="{{ $nob++ }}" aria-label="Slide {{$pp++ }}"></button>
                      @endif
                      @endforeach
                      </div>

                    <div class="carousel-inner">
                     @foreach ($categories as $cp)
                      @if ($cp->id == 1)
                      <div class="carousel-item active">
                        @if ($cts->image)
                                  <img src="{{asset('storage/' . $cts->image)}}"
                                  class="bd-placeholder-img" alt="{{ $cts->nm_category }}" width="100%" fill="#777" focusable="false" aria-hidden="true" height="225">
                                      @else
                                      <img src="https://source.unsplash.com/1000x1000?{{ $cts->nm_category }}"
                                      class="bd-placeholder-img" alt="{{ $cts->nm_category }}" width="100%" fill="#777" focusable="false" aria-hidden="true" height="225">
                                  @endif

                          <div class="container">
                            <div class="carousel-caption text-start">
                              <h1>{{ $cts->nm_category }}</h1>
                              <p>Some representative placeholder content for the first slide of the carousel.</p>
                              <p><a class="btn btn-lg btn-primary" href="#">Sign up today</a></p>
                            </div>
                          </div>
                        </div>
                        @else
                        <div class="carousel-item">
                            @if ($cp->image)
                            <img src="{{asset('storage/' . $cp->image)}}"
                            class="bd-placeholder-img" alt="{{ $cp->nm_category }}" width="100%" fill="#777" focusable="false" aria-hidden="true" height="225">
                            @else
                            <img src="https://source.unsplash.com/1000x1000?{{ $cp->nm_category }}"
                            class="bd-placeholder-img" alt="{{ $cp->nm_category }}" width="100%" fill="#777" focusable="false" aria-hidden="true" height="225">
                            @endif

                            <div class="container">
                                <div class="carousel-caption">
                                    <h1>{{ $cp->nm_category }}</h1>
                                    <p>Some representative placeholder content for the second slide of the carousel.</p>
                                    <p><a class="btn btn-lg btn-primary" href="#">Learn more</a></p>
                                </div>
                            </div>
                        </div>
                        @endif
                        @endforeach

                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                  </div> --}}







              </div><!-- /.container -->






          <!-- Small boxes (Stat box) -->
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                      <h3 class="card-title">
                        {{-- <i class="fas fa-globe mr-1"></i> --}}
                        Kategori
                      </h3>
                    </div><!-- /.card-header -->
                    <div class="card-body">
                    <div class="row ms-1">
                        @foreach ($categories as $category)
                        <div class="col-sm-1 mb-2 mt-2 me-4 ms-4">
                            <a class ="text-decoration-none text-light"href="/categories/{{ $category->slug }}">
                            <div class="card-group">
                            <div class="card text-dark">
                                @if ($category->image)
                              <img src="{{ asset('storage/' . $category->image)}}" alt="{{ $category->nm_category }}" style="width: 100px;height:100px;" alt="{{ $category->nm_category }}">
                                  @else
                                  <img src="https://source.unsplash.com/1200x1500?{{ $category->nm_category }}"
                                alt="{{ $category->nm_category }}" style="height: 100px;width:80px">
                              @endif


                                <div class="card-img-overlay d-flex align-items-center p-0">
                                </div>
                                <h6 class="card-title text-center p-2" style="height: 40px">{{ $category->nm_category }}</h6>
                            </div>
                            {{-- </div> --}}
                        </a>
                        </div>
                    </div>
                    @endforeach
                    </div>
                </div>
            </div>
            <hr class="featurette-divider">

            {{-- </div> --}}

        <!--     <div class="row py-lg-5">
                <div class="col-lg-6 col-md-8 mx-auto">
                  <h1 class="fw-light">Album example</h1>
                  <p class="lead text-muted">Something short and leading about the collection below—its contents, the creator, etc. Make it short and sweet, but not too short so folks don’t simply skip over it entirely.</p>
                  <p>
                    <a href="#" class="btn btn-primary my-2">Main call to action</a>
                    <a href="#" class="btn btn-secondary my-2">Secondary action</a>
                  </p>
                </div>
              </div>
            </section -->


            {{-- product album --}}

            <div class="album py-5 bg-light">
              <div class="container">

                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                    @foreach ($products as $product)
                    <div class="col">
                      <div class="card shadow-sm">
                        <a href="/products/{{ $product->slug }}">

                            @if ($product->image)
                            <img src="{{asset('storage/' . $product->image)}}"
                            class="bd-placeholder-img card-img-top" alt="{{ $product->nm_products }}" width="300" height=300">
                                @else
                                <img src="https://source.unsplash.com/700x400?{{ $product->nm_products }}"
                                class="bd-placeholder-img card-img-top" alt="{{ $product->nm_products }}" width="214" height="225">
                            @endif

                          {{-- <svg class="bd-placeholder-img card-img-top" width="100%" height="225" src="" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">{{ $product->nm_products }}</text></svg> --}}

                          <div class="card-body" >
                            <h4 class="card-text" style="height: 52px"><a style="text-decoration: none; color:#4d4949;" href="/products/{{ $product->slug }}">{{ $product->nm_products }}</a></h4>
                            <div class="d-flex justify-content-between align-items-">
                                <h6  style="color: red">Rp.{{ number_format($product->price) }}</h6>
                                <h6 class="text-muted mb-3">Stock : {{ $product->quantity }}</h6>
                            </div>
                            <div class="card-footer">
                                <div class="d-flex justify-content-between align-items-">
                                <h6></h6>
                                <div class="btn-group">
                                    <form action="/add-to-cart/{{$product->id}}" method="POST">
                                        @csrf
                                        <input type="hidden" name="quantity" value="1">
                                        <button class="btn btn-sm btn-outline-success fa fa-shopping-cart" type="submit"></button>
                                    </form>
                                    {{-- <a href="{{ route('add.to.cart', $product->id) }}" class="btn btn-sm btn-outline-secondary mt-3 fa fa-shopping-cart"></a> --}}
                                </div>
                                </div>
                            </div>

                      </div>
                    </a>
                      </div>
                  </div>
                  @endforeach
                </div>
                <div class="d-flex justify-content-center mt-5 mb-5">
                  {{-- {{ $products->links() }} --}}
                  <h4> <a href="/products" class="nav-link"> See other products</a>
                  </h4> </div>
            </div>
              </div>
            </div>
        </div>
    </section>
  </div>
  <!-- /.content-wrapper -->
@endsection
