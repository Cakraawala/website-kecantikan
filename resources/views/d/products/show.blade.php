@extends('d.dpartials.layouts')

@section('title')
<title>Cakra | {{ $title }}</title>
@endsection

@section('content')

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">

       <h2 class="nav-link" style="color: black">Product {{ $product->nm_products }}</h2>
  </div>
    @if (session()->has('success'))

    <div class="alert alert-success alert-dismissible fade show" role="alert"> {{session('success')}}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
    </div>

    @endif
    <div class="cas" style="margin-bottom: 70px">

        <div class="card mb-4">
            <div class="card-body">
            <div class="table-responsive">
                <table class="table table-borderless">
                    <tr>
                        <th width="20%" rowspan="4">@if ($product->image)
                            <a href="" data-bs-toggle="modal" data-bs-target="#modal"><img src="{{asset('storage/' . $product->image)}}" style="width: 180px;height:160px"></a>
                          </td>
                            <div class="modal" tabindex="-1" id="modal">
                                <div class="modal-dialog modal-lg modal-dialog-centered">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h5 class="modal-title">Category {{ $product->nm_products }}</h5>
                                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <img src="{{asset('storage/' . $product->image)}}" style="width: 100%;height:500px">
                                    </div>
                                    <div class="modal-footer">
                                  </div>
                                </div>
                              </div>
                              @else
                              <h6 class="ms-5"> &nbsp;-</h6>
                            @endif</th>
                        <th width="20%">Nama Produk</th>
                        <th>Category</th>
                        <th>Qty</th>
                        <th>Price</th>
                        <th>Created at</th>
                    </tr>
                    <tr>
                        {{-- <td></td> --}}
                        <td>{{ $product->nm_products ?? '-' }}</td>
                        <td>{{ $product->CategoryProduct->nm_category ?? '-' }}</td>
                        <td>{{ $product->quantity ?? '-' }}</td>
                        <td>Rp.{{ number_format($product->price) ?? '0'}}</td>
                        <td>{{ $product->created_at ?? '-' }}</td>
                    </tr>
                    <tr>
                        {{-- <th colspan="1"></th> --}}
                        <th>Slug</th>
                        <th>Desc</th>
                    </tr>
                    <tr>
                        {{-- <td colspan="1"></td> --}}
                        <td>{{ $product->slug ?? '-' }}</td>
                        <td colspan="4">{{ $product->deskripsi }}</td>
                    </tr>
                </table>
            </div>
        </div>
        </div>

        </div>

@endsection
