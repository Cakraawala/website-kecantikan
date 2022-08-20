@extends('layouts.main')

@section('title')
    <title>Cakra | {{ $title }}</title>
@endsection

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

    <!-- Main content -->
    <section class="content">
        <div class="container-atasas" style="margin-top: 80px;">
            <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">

  @if (session()->has('success'))

    <div class="alert alert-success alert-dismissible fade show" style="z-index: 1000" role="alert"> {{session('success')}}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
    </div>

    @endif


                <div class="col-md-5 p-lg-5 mx-auto my-5">
                  <h1 class="display-4 fw-normal" style="font-family:Brush Script MT;" >Cakra Company</h1>
                  <p class="lead fw-normal">Lorem ipsum dolor sit amet lorem ipsum lorem ipsum lorem ipsum</p>
                  <!-- <a class="btn btn-outline-secondary" href="#">Coming soon</a> -->
                </div>
                <div class="product-device shadow-sm d-none d-md-block"></div>
                <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
              </div>

              <div class="d-md-flex flex-md-equal w-100 my-md-3 ps-md-3">
                <div class="bg-dark me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden">
                  <div class="my-3 py-3">
                    <h2 class="display-5">Another headline</h2>
                    <p class="lead">And an even wittier subheading.</p>
                  </div>
                  <div class="bg-light shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;"></div>
                </div>
                <div class="bg-light me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
                  <div class="my-3 p-3">
                    <h2 class="display-5">Another headline</h2>
                    <p class="lead">And an even wittier subheading.</p>
                  </div>
                  <div class="bg-dark shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;"></div>
                </div>
              </div>

        </div>

        <div class="container" style="margin-top: 50px">
            <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                  <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                  <div class="carousel-item active">

                  @if ($product1->image)
                            <img src="{{asset('storage/' . $product1->image)}}"
                            class="bd-placeholder-img" alt="{{ $product1->nm_products }}" width="100%" fill="#777" focusable="false" aria-hidden="true" height="225">
                                @else
                                <img src="https://source.unsplash.com/1000x1000?{{ $product1 }}"
                                class="bd-placeholder-img" alt="{{ $product1->nm_products }}" width="100%" fill="#777" focusable="false" aria-hidden="true" height="225">
                            @endif

                    <div class="container">
                      <div class="carousel-caption text-start">
                        <h1>Example headline.</h1>
                        <p>Some representative placeholder content for the first slide of the carousel.</p>
                        <p><a class="btn btn-lg btn-primary" href="#">Sign up today</a></p>
                      </div>
                    </div>
                  </div>
                  <div class="carousel-item">
                    @if ($product1->image)
                            <img src="{{asset('storage/' . $product1->image)}}"
                            class="bd-placeholder-img" alt="{{ $product1->nm_products }}" width="100%" fill="#777" focusable="false" aria-hidden="true" height="225">
                                @else
                                <img src="https://source.unsplash.com/1000x1000?{{ $product1 }}"
                                class="bd-placeholder-img" alt="{{ $product1->nm_products }}" width="100%" fill="#777" focusable="false" aria-hidden="true" height="225">
                            @endif

                    <div class="container">
                      <div class="carousel-caption">
                        <h1>Another example headline.</h1>
                        <p>Some representative placeholder content for the second slide of the carousel.</p>
                        <p><a class="btn btn-lg btn-primary" href="#">Learn more</a></p>
                      </div>
                    </div>
                  </div>
                  <div class="carousel-item">
              @if ($product1->image)
                            <img src="{{asset('storage/' . $product1->image)}}"
                            class="bd-placeholder-img" alt="{{ $product1->nm_products }}" width="100%" fill="#777" focusable="false" aria-hidden="true" height="225">
                                @else
                                <img src="https://source.unsplash.com/1000x1000?{{ $product1 }}"
                                class="bd-placeholder-img" alt="{{ $product1->nm_products }}" width="100%" fill="#777" focusable="false" aria-hidden="true" height="225">
                            @endif
                    <div class="container">
                      <div class="carousel-caption text-end">
                        <h1>One more for good measure.</h1>
                        <p>Some representative placeholder content for the third slide of this carousel.</p>
                        <p><a class="btn btn-lg btn-primary" href="#">Browse gallery</a></p>
                      </div>
                    </div>
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>


              <!-- Marketing messaging and featurettes
              ================================================== -->
              <!-- Wrap the rest of the page in another container to center all the content. -->


                <hr class="featurette-divider">
                <div class="row featurette">
                  <div class="col-md-7">
                    <h2 class="featurette-heading">First featurette heading. <span class="text-muted">It’ll blow your mind.</span></h2>
                    <p class="lead">Some great placeholder content for the first featurette here. Imagine some exciting prose here.</p>
                  </div>
                  <div class="col-md-5">
                    <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg>

                  </div>
                </div>

                <hr class="featurette-divider">

                <div class="row featurette">
                  <div class="col-md-7 order-md-2">
                    <h2 class="featurette-heading">Oh yeah, it’s that good. <span class="text-muted">See for yourself.</span></h2>
                    <p class="lead">Another featurette? Of course. More placeholder content here to give you an idea of how this layout would work with some actual real-world content in place.</p>
                  </div>
                  <div class="col-md-5 order-md-1">
                    <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg>

                  </div>
                </div>

                <hr class="featurette-divider">

                <div class="row featurette">
                  <div class="col-md-7">
                    <h2 class="featurette-heading">And lastly, this one. <span class="text-muted">Checkmate.</span></h2>
                    <p class="lead">And yes, this is the last block of representative placeholder content. Again, not really intended to be actually read, simply here to give you a better view of what this would look like with some actual content. Your content.</p>
                  </div>
                  <div class="col-md-5">
                    <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg>

                  </div>
                </div>

                <hr class="featurette-divider">

                <!-- /END THE FEATURETTES -->

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

                    <div class="row ms-1">
                        @foreach ($categories as $category)
                        <div class="col-sm-1 mb-2 mt-2">
                            <a class ="text-decoration-none text-light"href="/categories/{{ $category->slug }}">
                                <div class="card bg-dark text-white">

                            <img class= "card-img"src="https://source.unsplash.com/500x400?{{ $category->nm_category }}" alt="{{ $category->nm_category }}">

                            <div class="card-img-overlay d-flex align-items-center p-0">
                            </div>
                            <h5 class="card-title text-center p-2">{{ $category->nm_category }}</h5>
                        </a>
                        </div>
                    </div>
                    @endforeach
                    </div>
                </div>
            </div>

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
                            class="bd-placeholder-img card-img-top" alt="{{ $product->CategoryProduct->nm_category }}" width="214" height=225">
                                @else
                                <img src="https://source.unsplash.com/700x400?{{ $product->CategoryProduct->nm_category }}"
                                class="bd-placeholder-img card-img-top" alt="{{ $product->CategoryProduct->nm_category }}" width="214" height="225">
                            @endif



                          {{-- <svg class="bd-placeholder-img card-img-top" width="100%" height="225" src="" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">{{ $product->nm_products }}</text></svg> --}}

                          <div class="card-body">
                          <h4 class="card-text"><a style="text-decoration: none; color:#4d4949;" href="/products/{{ $product->slug }}">{{ $product->nm_products }}</a></h4>
                          <div class="d-flex justify-content-between align-items-">


                              <h6  style="color: red">Rp.{{ number_format($product->price) }}</h6>


                            <div class="btn-group">
                                  <a href="{{ route('add.to.cart', $product->id) }}" class="btn btn-sm btn-outline-secondary mt-3 fa fa-shopping-cart"></a>
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
                  <h4> <a href="/products" class="nav-link"> See list</a>
                  </h4> </div>
            </div>
              </div>
            </div>
        </div>
    </section>
  </div>
  <!-- /.content-wrapper -->
@endsection
