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
                <h2 class="mb-5">Category : {{ $category }}</h2>
              <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

                @foreach ($categoryproduct as $category)
                <div class="col">
                  <div class="card shadow-sm">
                      <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>

                    <div class="card-body">
                      <h3 class="card-text"><a href="/categories/{{ $category->slug }}">{{ $category->nm_category }}</a></h3>
                      <div class="d-flex justify-content-between align-items-center">


                          <small class="text-muted">{{ $category->price }}</small>


                        <div class="btn-group">
                              <a href="/" class="btn btn-sm btn-outline-secondary mt-3 fa fa-shopping-cart"></a>
                          <button type="button" class="btn btn-sm btn-outline-secondary mt-3">View</button>
                          <button type="button" class="btn btn-sm btn-outline-secondary mt-3">Edit</button>
                      </div>

                      </div>
                      </div>
                  </div>
              </div>
              @endforeach

                </div>
              </div>
            </div>
  </div>
</section>
  <!-- /.content-wrapper -->
@endsection
