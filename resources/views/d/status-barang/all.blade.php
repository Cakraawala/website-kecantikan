@extends('d.dpartials.layouts')

@section('title')
<title>Cakra | {{ $title }}</title>
<style>
    @media print{
        .heder,.btn{display: none;}

    }
</style>
@endsection

@section('content')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="flex-wrap flex-md-nowrap pt-5 border-bottom">
        <h2 style="text-align: center">LAPORAN TRANSAKSI</h2>
    </div>
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-2">
       <h6></h6>
       <a href="" class="btn btn-outline-success " style="margin-right: 80px" onclick="window.print()"> Print laporan </a>
    </div>
    @if (session()->has('success'))

    <div class="alert alert-success alert-dismissible fade show" role="alert"> {{session('success')}}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
    </div>

    @endif

      <div class="table-responsive">
        <table class="table table-bordered table-striped" id="mytable">
            <thead>
              <tr>
                @php $nomer = 1; @endphp
                <th scope="col" width="3%">No</th>
                <th scope="col" width="6%">Waktu</th>
                <th scope="col" width="5%">Status</th>
                <th scope="col" width="5%">Desc</th>
                <th scope="col" width="5%">Oleh</th>
                <th scope="col" width="10%"> Products</th>
                <th scope="col" width="10%">Jumlah</th>
              </tr>
            </thead>

              <tbody>
                  @foreach($statusbarang as $status)
                  <tr>
                <td>{{$nomer++}}</td>
                <td>{{ $status->waktu->isoformat('D/M/YYYY') }}</td>
                <td>{{$status->status}}</td>
                <td>{{$status->desc}}</td>
                <td>{{$status->users->name ?? '-'}}</td>
                <td><a href="/dashboard/product/{{ $status->Products->id }}/detail"> {{$status->Products->nm_products}} </a></td>
                <td>{{$status->jumlah}}</td>
            </tr>
                @endforeach
                <tr>
                    <td colspan="6" align="right"><h5>Jumlah :</h5></td>
                    <td><h5>{{ $count }}</h5></td>
                </tr>
            </tbody>


          </table>
        </div>


    </main>
  </div>
</div>

@endsection
