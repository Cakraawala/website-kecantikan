@extends('d.dpartials.layouts')

@section('title')
<title>Cakra | {{ $title }}</title>
@endsection

@section('content')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <a href="/dashboard/c-pending" class="nav-link text-dark""> <h2>Pesanan Status : Pending</h2> </a>
          <form action="/dashboard/c-pending" method="get" class="ms-2 d-flex mt-3 mb-3 px-5" role="search">
            @csrf
            <input class="form-control ms-3 me-2" style="width: 450px" type="search" placeholder="Search... (Users id,No Resi, Tanggal)" name="search">
            <button class="btn btn-outline-secondary" type="submit"><i class="fa fa-search"></i></button>
        </form>

        </div>
        @if (session()->has('success'))

        <div class="alert alert-success alert-dismissible fade show" role="alert"> {{session('success')}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
        </div>

        @endif

      <div class="table-responsive">
          <table class="table table-bordered table-striped table-lg" id="myTable">
            <thead>
              <tr>
                <th scope="col" width="3%">No</th>
                <th scope="col" width="10%">Customer</th>
                <th scope="col" width="15%">No resi</th>
                <th scope="col" width="15%">Subtotal</th>
                <th scope="col"width="10%">Tanggal</th>
                <th scope="col" width="15%">Bukti</th>
                <th scope="col" width="17%">Konfirmasi</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($cart as $c)
                <tr>
                  <td> {{ $loop->iteration }}</td>
                  <td><a style="text-decoration:none;" href="/dashboard/user/{{ $c->users->id }}/show">{{ $c->users->name }}</a></td>
                  <td>{{ $c->no_resi }}</td>
                  <td>Rp.{{ number_format($c->subtotal) }}</td>
                  <td>{{ $c->tgl }} </td>
                  <td>
                    @if ($c->image)
                    <a href="" data-bs-toggle="modal" data-bs-target="#modal{{ $loop->iteration }}"><img src="{{asset('storage/' . $c->image)}}" style="width: 150px;height:75px"></a>
                </td>
                    <div class="modal" tabindex="-1" id="modal{{ $loop->iteration }}">
                        <div class="modal-dialog modal-lg modal-dialog-centered">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title">Modal title</h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <img src="{{asset('storage/' . $c->image)}}" style="width: 100%">
                            </div>
                            <div class="modal-footer">
                          </div>
                        </div>
                      </div>
                      @else
                      -
                    @endif

                  @if ($c->image)
                  <td>

                     <form action="/dashboard/c-Pending/{{$c->id}}/confirm" method="post" class="d-inline">
                        @csrf
                        <button class="badge bg-primary border-0" onclick="return confirm('Are you sure to Confirm this?')">
                            <span>Konfirmasi</span>
                        </button>
                    </form>
                      <form action="/dashboard/c-Pending/{{ $c->id }}/tolak" class="d-inline">
                        @csrf

                            <button class="badge bg-danger border-0"
                            onclick="return confirm(' Are you sure to Reject this?')">
                                <span> Tolak </span>
                            </button>
                    </form>
                  </td>
                  @else
                  <td>{{ 'Tunggu bukti pembayaran' }}</td>
                  @endif
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
    </main>
  </div>
</div>
@endsection
