@extends('layouts.mainhome')

@section('content')

    <div class="d-flex justify-content-between flex-wrap
        flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2"> Data Barang : {{ $data_supplier->nama_supplier }}</h1> <br>
    </div>

    @if (session()->has('success'))
        <div class="alert alert-info" role="alert">
        {{ session('success') }}
      </div>
    @endif

        <div class="table-responsive col-lg-10">
            <table class="table table-striped table-sm">
              <thead>
                <tr>
                  <th scope="col">Id</th>
                  <th scope="col">Nama Barang</th>
                  <th scope="col">Stock Barang</th>
                  <th scope="col">Stock</th>
                </tr>
              </thead>
              <tbody>
                  @foreach ($data_barang as $supp)
                  <tr>
                    <td> {{ $loop->iteration }}</td>
                    <td>{{  $supp->nama_barang}}</td>
                    <td>{{ $supp->stock_barang}}</td>
                    <td>
                        <a href="/dashboard/barang/{{ $supp->id }}/nambah" class="badge bg-primary">
                            STOCK +
                        </a>
                        <a href="/dashboard/barang/{{ $supp->id }}/nambah" class="badge bg-danger">
                            STOCK -
                        </a>
                    </td>
                  </tr>
                  @endforeach
                </tbody>

            </table>
          </div>


@endsection
