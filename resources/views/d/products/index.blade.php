@extends('d.dpartials.layouts')

@section('title')
<title>Cakra | {{ $title }}</title>
@endsection

@section('content')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">

        <a href="/dashboard/product" class="nav-link text-dark""><h2>Product</h2></a>
          <form action="/dashboard/product" method="get" class="ms-2 d-flex mt-3 mb-3 px-5" role="search">
                    @csrf
                    <input class="form-control ms-3 me-2" style="width: 550px" type="search" placeholder="Search... (Product name, id product, price)" name="search">
                    <button class="btn btn-outline-secondary" type="submit"><i class="fa fa-search"></i></button>
                </form>
          <div class="btn-toolbar mb-2 mb-md-0">

        <div class="dropdown">
            <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
              Action
            </button>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="/dashboard/product/create">Add Data</a></li>
            </ul>
          </div>

      </div>
      </div>
      @if (session()->has('success'))

      <div class="alert alert-success alert-dismissible fade show" role="alert"> {{session('success')}}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
      </div>

      @endif
      <div class="table-responsive">
          <table class="table table-striped table-sm">
            <thead>
              <tr>
                <th scope="col">Id</th>
                <th scope="col">Name Products</th>
                <th scope="col">Id Category</th>
                <th scope="col">Category Product</th>
                <th scope="col">Quantity</th>
                <th scope="col">Price</th>
                <th scope="col">Slug</th>
                <th scope="col">Image</th>
                {{-- <th scope="col">Deskripsi</th> --}}
                {{-- <th scope="col">Supplier</th> --}}
                {{-- <th scope="col">Address</th> --}}
                {{-- <th scope="col">Category Product</th> --}}
                <th scope="col">Info</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                <tr>
                  <td> {{ $product->id }}</td>
                  <td>{{ $product->nm_products ?? '-' }}</td>
                  <td>{{  $product->category_products_id ?? '-' }}</td>
                  <td>{{  $product->CategoryProduct->nm_category ?? '-' }}</td>
                  <td>{{ $product->quantity ?? '-' }}</td>
                  <td>{{ number_format($product->price) ?? '-' }}</td>
                  {{-- <td>{{ $product->supplier ?? '-'}}</td> --}}
                  <td>{{ $product->slug ?? '-' }}</td>
                  <td>{{ $product->image ?? '-' }}</td>

                  <td>

                      <a href="/dashboard/product/{{ $product->id }}/edit" class="badge bg-warning">
                        <i class="fa-solid fa-pen">Edit</i>
                    </a>
                    {{-- <a href="/dashboard/product/show" class="badge bg-success">
                        <span data-feather="eye">Show</span>
                      </a> --}}
                      <form action="/dashboard/product/{{ $product->id }}/delete" class="d-inline">
                        @csrf
                        {{-- @method('delete') --}}
                            <button class="badge bg-danger border-0"
                            onclick="return confirm(' Are you sure to delete this post?')">
                                <span> Delete</span>
                            </button>
                    </form>
                  </td>
                </tr>
                @endforeach
              </tbody>
          </table>
        </div>


    </main>
  </div>
</div>
@endsection
