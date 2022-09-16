@extends('d.dpartials.layouts')

@section('title')
<title>Cakra | {{ $title }}</title>
@endsection

@section('content')

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">

       <h2 class="nav-link" style="color: black"><span>@</span>{{ $user->username }}</h2>
  </div>
    @if (session()->has('success'))

    <div class="alert alert-success alert-dismissible fade show" role="alert"> {{session('success')}}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
    </div>

    @endif
        <div class="card mb-4">
            <div class="card-body">
                <table class="table table-borderless" >
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Nomer</th>
                        <th>Tanggal lahir</th>
                        <th>Jenis kelamin</th>
                        <th>Address</th>
                        <th>Pos</th>
                    </tr>
                    <tr>
                        <td>{{ $user->name ?? '-'}}</td>
                        <td>{{ $user->email ?? '-' }}</td>
                        <td>{{ $user->no_wa ?? '-' }}</td>
                        <td>{{ $user->tgl_lhr ?? '-' }}</td>

                        <td> @if ($user->jk == 'L')
                            Pria
                            @elseif ($user->jk == 'P')
                            Wanita
                        @endif</td>
                        <td>{{ $user->address ?? '-' }}</td>
                        <td>{{ $user->code_pos ?? '-' }}</td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="table-responsive col-lg-12">
            {{-- <diva class="table-responsive"> --}}
                <table class="table table-borderless table-lg">
                  <thead>
                    <tr>
                      <th scope="col" width="20%" align="center">Data Transaksi : </th>
                    </tr>
                  </thead>
                </table>
                <table class="table table-striped table-lg" id="myTable">
                    <thead>
                        <tr>
                            <th width="5%">No</th>
                            <th>Status</th>
                            <th width="15%">No Resi</th>
                            <th>Tanggal</th>
                            {{-- <th width="15%">Payment</th>
                            <th width="15%">Delivery</th> --}}
                            <th>Subtotal</th>
                            <th>Bukti</th>
                            <th>Info</th>
                        </tr>
                    </thead>
                  <tbody>
                      @foreach ($checkout as $co)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td class="@if ($co->status == 'Success')
                            bg-success
                            @else
                            bg-warning
                        @endif" style="@if ($co->status == 'Success')
                            color:white;
                            @elseif($co->status == 'Pending')
                            color:white;
                            @else
                            color:black;
                        @endif">{{ $co->status }}</td>
                        <td>{{ $co->no_resi }}</td>
                        <td>{{ $co->tgl }}</td>
                        {{-- <td>{{$co->payments->nm_payment }} (Rp.{{ number_format($co->payments->fee)}})</td>
                        <td>{{$co->deliveries->nm_deliver }} (Rp.{{ number_format($co->deliveries->ongkir)}})</td> --}}
                        <td>Rp.{{ number_format($co->subtotal) }}</td>
                        <td>  @if ($co->image)
                            <a href="" data-bs-toggle="modal" data-bs-target="#modal{{ $loop->iteration }}">Lihat Bukti</a>
                          </td>
                            <div class="modal" tabindex="-1" id="modal{{ $loop->iteration }}">
                                <div class="modal-dialog modal-lg modal-dialog-centered">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h5 class="modal-title">Bukti No Resi : {{ $co->no_resi }}</h5>
                                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <img src="{{asset('storage/' . $co->image)}}" style="width: 100%;height:500px">
                                    </div>
                                    <div class="modal-footer">
                                  </div>
                                </div>
                              </div>
                              @else
                              -
                            @endif</td>
                        <td>
                            @if ($co->status == 'Success' && $co->image)
                            <form action="/dashboard/c-{{$co->status}}/{{ $co->id }}/show" method="GET" class="d-inline">
                                @csrf
                                <button class="badge bg-success border-0" type="submit">
                                  <span>Show</span>
                                </button>
                              </form>
                              @elseif ($co->status == 'Pending' && $co->image)
                              <form action="/dashboard/c-Pending/{{$co->id}}/confirm" method="post" class="d-inline">
                                @csrf
                                <button class="badge bg-primary border-0" onclick="return confirm('Are you sure to Confirm this?')">
                                    <span>Konfirmasi</span>
                                </button>
                            </form>
                              <form action="/dashboard/c-Pending/{{ $co->id }}/tolak" class="d-inline">
                                @csrf

                                    <button class="badge bg-danger border-0"
                                    onclick="return confirm(' Are you sure to Reject this?')">
                                        <span> Tolak </span>
                                    </button>
                            </form>
                              @else
                              Tunggu Bukti Pengiriman
                              @endif
                            </td>
                    </tr>
                    @endforeach
                </tbody>
                </table>
          </div>

<script>
    $(document).ready( function () {
    $('#myTable').DataTable();
} );
</script>
@endsection
