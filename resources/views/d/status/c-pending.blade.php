@extends('d.dpartials.layouts')

@section('title')
<title>Cakra | {{ $title }}</title>
@endsection

@section('content')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">

        <a href="/dashboard/c-pending" class="nav-link text-dark""> <h2>Cart Status Pending</h2> </a>
          <form action="/dashboard/c-pending" method="get" class="ms-2 d-flex mt-3 mb-3 px-5" role="search">
            @csrf
            <input class="form-control ms-3 me-2" style="width: 450px" type="search" placeholder="Search... (Cart name, id Cart)" name="search">
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
    </div>
      @endif

      <div class="table-responsive">
          <table class="table table-striped table-sm">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Customer name</th>
                <th scope="col">No resi</th>
                <th scope="col">Subtotal</th>
                <th scope="col">Status</th>
                <th scope="col">Tanggal</th>
                <th scope="col">Info</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($cart as $c)
                <tr>
                  <td> {{ $loop->iteration }}</td>
                  <td>{{ $c->users->name }}</td>
                  <td>{{ $c->no_resi }}</td>
                  <td>Rp.{{ number_format($c->subtotal) }}</td>
                  <td>{{ $c->status }} </td>
                  <td>{{ $c->tgl }} </td>

                  <td>

                      <a href="/dashboard/" class="badge bg-warning">
                        <i class="fa-solid fa-pen">Edit</i>
                    </a>
                    {{-- <a href="/dashboard/categoryproduct//{{ $c->id }}/show" class="badge bg-success">
                        <span data-feather="eye">Show</span>
                      </a> --}}
                      <form action="/dashboard/" class="d-inline">
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
