@extends('d.dpartials.layouts')

@section('title')
<title>Cakra | {{ $title }}</title>
@endsection

@section('content')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <a href="/dashboard/c-pending" class="nav-link text-dark""> <h2>Pesanan Status : Success</h2> </a>
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
          <table class="table table-bordered table-striped table-sm" id="myTable">
            <thead>
              <tr>
                <th scope="col" width="3%">No</th>
                <th scope="col" width="10%">Customer</th>
                <th scope="col" width="15%">No resi</th>
                <th scope="col" width="15%">Subtotal</th>
                <th scope="col"width="10%">Tanggal</th>
                <th scope="col" width="25%">Bukti</th>
                <th scope="col">Action</th>
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
                                <img src="{{asset('storage/' . $c->image)}}" style="width: 100%;height:500px">
                            </div>
                            <div class="modal-footer">
                          </div>
                        </div>
                      </div>
                      @else
                      -
                    @endif
                </td>
                <td>
                    <form action="/dashboard/c-Success/{{ $c->id }}/show" method="GET" class="d-inline">
                        @csrf
                        <button class="badge bg-success border-0" style="color: white">
                            <span>Show</span>
                        </button>
                    </form>
                </td>
                </tr>
                @endforeach
              </tbody>
              <tfoot>
                <tr>
                    <td colspan="3" align="center"><H4>Total Transaksi :</H4></td>
                    <td colspan="3"><h4>Rp.{{ number_format($totaluang) }}</h4></td>
                </tr>
              </tfoot>
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
