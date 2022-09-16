@extends('d.dpartials.layouts')

@section('title')
<title>Cakra | {{ $title }}</title>
@endsection

@section('content')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">

        <a href="/dashboard/payment" class="nav-link text-dark""> <h2>Payment</h2> </a>
          <form action="/dashboard/payment" method="get" class="ms-2 d-flex mt-3 mb-3 px-5" role="search">
            @csrf
            <input class="form-control ms-3 me-2" style="width: 450px" type="search" placeholder="Search... (Id,Payment name, Fee)" name="search">
            <button class="btn btn-outline-secondary" type="submit"><i class="fa fa-search"></i></button>
        </form>
          <div class="btn-toolbar mb-2 mb-md-0">
        <div class="dropdown">
            <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
              Action
            </button>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="/dashboard/payment/create">Add Data</a></li>
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
          <table class="table table-bordered table-striped table-lg" id="myTable">
            <thead>
              <tr>
                <th scope="col" width="5%">Id</th>
                <th scope="col" width="20%">Name Payment</th>
                <th scope="col" width="15%">Fee</th>
                <th scope="col" width="10%">Info</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($payment as $p)
                <tr>
                  <td> {{ $p->id }}</td>
                  <td>{{ $p->nm_payment }}</td>
                  <td>Rp. {{ number_format($p->fee) }}</td>

                  <td>
                    <form action="/dashboard/payment/{{ $p->id }}/edit" class="d-inline">
                    @csrf
                    <button class="badge bg-warning border-0">
                        <span>Edit</span>
                    </button>
                    </form>
                      <form action="/dashboard/payment/{{ $p->id }}/delete" class="d-inline">
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

        <script>
            $(document).ready( function () {
            $('#myTable').DataTable();
            } );
        </script>
    </main>
  </div>
</div>
@endsection
