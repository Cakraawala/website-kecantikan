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
      <div class="conatienr" style="margin-bottom: 70px">

        <div class="table-responsive">
            <table class="table table-bordered table-hover table-striped table-lg mb-5" id="myTable">
            <thead>
              <tr>
                <th scope="col" width="5%">Id</th>
                <th scope="col" width="20%">Image</th>
                <th scope="col" width="20%">Name Product</th>
                <th scope="col" width="10%">Category</th>
                <th scope="col" width="10%">&nbsp; Stock</th>
                {{-- <td width="4%"></td> --}}
                <th scope="col" width="15%">Price</th>
                {{-- <th scope="col">Image</th> --}}
                <th scope="col" width="15%" align="center">Info</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                <tr>
                  <td> {{ $product->id }}</td>
                  <td>
                      @if ($product->image)
                      <a href="" data-bs-toggle="modal" data-bs-target="#modal{{ $loop->iteration }}">
                    <img src="{{asset('storage/' . $product->image)}}" style="max-width: 100px;max-height:100px"></a>
                 </td>
                   <div class="modal" tabindex="-1" id="modal{{ $loop->iteration }}">
                       <div class="modal-dialog modal-lg modal-dialog-centered">
                         <div class="modal-content">
                           <div class="modal-header">
                             <h5 class="modal-title">Product {{$product->nm_products}}</h5>
                             <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                           </div>
                           <div class="modal-body">
                               <img src="{{asset('storage/' . $product->image)}}" style="width: 100%;max-height:500px">
                           </div>
                           <div class="modal-footer">
                         </div>
                       </div>
                     </div>
                     @else
                     -
                   @endif
                  <td>{{ $product->nm_products ?? '-' }}</td>
                </td>
                  <td><a style="color:black;text-decoration:none;" href="/dashboard/categoryproduct/{{ $product->CategoryProduct->id }}/show">{{  $product->CategoryProduct->nm_category ?? '-' }}({{  $product->category_products_id ?? '-' }})</a> </td>
                  <td>
                    <form action="{{ route('update.quantity') }}" method="post">
                    @csrf
                <input type="hidden" name="id" value="{{$product->id}}">
                <input type="number" value="{{ number_format($product->quantity) }}" class="form-control quantity update-cart" name="quantity">
                <button class="badge bg-success border-0" style="width: 100%" type="submit">Update</button>
                </form></td>
                {{-- <td></td> --}}
                  <td>Rp.{{ number_format($product->price) ?? '-' }}</td>
                  <td>
                      <form action="/dashboard/product/{{ $product->id }}/edit" method="get" class="d-inline">
                        @csrf
                            <button class="badge bg-warning border-0">
                                <span> Edit </span>
                            </button>
                    </form>
                      <form action="/dashboard/product/{{ $product->id }}/detail" method="get" class="d-inline">
                        @csrf
                            <button class="badge bg-success border-0">
                                <span> Show </span>
                            </button>
                    </form>
                      <form action="/dashboard/product/{{ $product->id }}/delete" class="d-inline">
                        @csrf
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
          <script>
            $(document).ready( function () {
        $('#myTable').DataTable();
        } );
          </script>
        </div>
    </div>


    </main>
  </div>
</div>
@endsection
