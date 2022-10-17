@extends('d.dpartials.layouts')

@section('title')
<title>Cakra | {{ $title }}</title>
@endsection

@section('content')

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">

       <h2 class="nav-link" style="color: black">Category product {{ $category->nm_category }}</h2>
  </div>
    @if (session()->has('success'))

    <div class="alert alert-success alert-dismissible fade show" role="alert"> {{session('success')}}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
    </div>

    @endif
    <div class="cas" style="margin-bottom: 70px">

        <div class="card mb-4">
            <div class="card-body">
                <table class="table table-borderless">
                    <tr>
                        <th width="20%">Image</th>
                        <th>Description</th>
                    </tr>
                    <tr>
                        <td>@if ($category->image)
                            <a href="" data-bs-toggle="modal" data-bs-target="#modal"><img src="{{asset('storage/' . $category->image)}}" style="width: 150px;height:75px"></a>
                          </td>
                            <div class="modal" tabindex="-1" id="modal">
                                <div class="modal-dialog modal-lg modal-dialog-centered">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h5 class="modal-title">Category {{ $category->nm_category }}</h5>
                                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <img src="{{asset('storage/' . $category->image)}}" style="width: 100%;max-height:500px">
                                    </div>
                                    <div class="modal-footer">
                                  </div>
                                </div>
                              </div>
                              @else
                              <h6 class="ms-5"> &nbsp;-</h6>
                            @endif</td>
                        <td>{{ $category->description ?? '-' }}</td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="table-responsive col-lg-12">
            <div class="table-responsive">
                <table class="table table-bordered table-striped table-lg" id="myTable">
                  <thead>
                    <tr>
                      <th scope="col" width="5%">Id</th>
                      <th scope="col" width="20%">Image</th>
                      <th scope="col" width="20%">Name Product</th>
                      <th scope="col" width="8%">&nbsp; Stock</th>
                      {{-- <td width="4%"></td> --}}
                      <th scope="col" width="15%">Price</th>
                      <th scope="col" width="20%" align="center">Info</th>
                    </tr>
                  </thead>
                  <tbody>
                      @foreach ($product as $p)
                      <tr>
                        <td> {{ $p->id }}</td>
                        <td> @if ($p->image)
                            <a href="" data-bs-toggle="modal" data-bs-target="#modal{{ $loop->iteration }}"><img src="{{asset('storage/' . $p->image)}}" style="width: 150px;height:75px"></a>
                          </td>
                            <div class="modal" tabindex="-1" id="modal{{ $loop->iteration }}">
                                <div class="modal-dialog modal-lg modal-dialog-centered">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h5 class="modal-title">Product {{$p->nm_product}}</h5>
                                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <img src="{{asset('storage/' . $p->image)}}" style="width: 100%;max-height:500px">
                                    </div>
                                    <div class="modal-footer">
                                  </div>
                                </div>
                              </div>
                              @else
                              <h6>- </h6>
                            @endif
                        <td>{{ $p->nm_products ?? '-' }}</td>

                        <td>
                          <form action="{{ route('update.quantity') }}" method="post">
                          @csrf
                      <input type="hidden" name="id" value="{{$p->id}}">
                      <input type="number" value="{{ number_format($p->quantity) }}" class="form-control quantity update-cart" name="quantity">
                      <button class="badge bg-success border-0" style="width: 100%" type="submit">Update</button>
                    </form></td>
                      {{-- <td></td> --}}
                        <td>Rp.{{ number_format($p->price) ?? '-' }}</td>

                        <td>
                            <form action="/dashboard/product/{{ $p->id }}/edit" method="get" class="d-inline">
                              @csrf
                                  <button class="badge bg-warning border-0">
                                      <span> Edit </span>
                                  </button>
                          </form>
                             <form action="/dashboard/product/{{ $p->id }}/detail" method="get" class="d-inline">
                        @csrf
                            <button class="badge bg-success border-0">
                                <span> Show </span>
                            </button>
                    </form>
                          </a>
                            {{-- <form action="/dashboard/product/{{ $p->id }}/show" method="GET" class="d-inline">
                              @csrf
                                  <button class="badge bg-success border-0">
                                      <span> Show </span>
                                    </button>
                                </form> --}}
                          </a>
                            <form action="/dashboard/product/{{ $p->id }}/delete" class="d-inline">
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
          </div>
          </div>
<script>
    $(document).ready( function () {
    $('#myTable').DataTable();
} );
</script>

@endsection
