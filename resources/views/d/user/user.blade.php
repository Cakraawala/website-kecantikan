@extends('d.dpartials.layouts')

@section('title')
<title>Cakra | {{ $title }}</title>
@endsection

@section('content')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
       <a href="/dashboard/user/" class="nav-link" style="color:black;"><h2>User</h2> </a>
         <form action="/dashboard/user" method="get" class="ms-2 d-flex mt-3 mb-3 px-5" role="search">
            @csrf
            <input class="form-control ms-3 me-2" style="width: 450px" type="search" placeholder="Search... (User name, id User, Username, Email, Nomer, Province)" name="search">
            <button class="btn btn-outline-secondary" type="submit"><i class="fa fa-search"></i></button>
        </form>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
                <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
                <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
            </div>
            <div class="dropdown">
                <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Action
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="/dashboard/user/create">Add Data</a></li>
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
          <table class="table table-striped table-sm">
            <thead>
              <tr>
                <th scope="col">Id</th>
                <th scope="col">Name</th>
                <th scope="col">Username</th>
                <th scope="col">Email</th>
                <th scope="col">Nomer</th>
                {{-- <th scope="col">Tanggal lahir</th> --}}
                <th scope="col">Jenis Kelamin</th>
                <th scope="col">Kode Pos</th>
                <th scope="col">Address</th>
                <th scope="col">Info</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($user as $user)
                <tr>
                  <td> {{ $loop->iteration }}</td>
                  <td>{{ $user->name }}</td>
                  <td>{{ $user->username ?? '-' }}</td>
                  <td> {{ $user->email ?? '-' }}</td>
                  <td>{{ $user->no_wa ?? '-' }}</td>
                  {{-- <td>{{ $user->tgl_lhr }}</td> --}}
                  <td> {{ $user->jk }}</td>
                  <td>{{ $user->code_pos ??'-' }}</td>
                  <td>{{ $user->address ?? '-' }}</td>

                  <td>

                      <a href="/dashboard/user/{{ $user->id }}/edit" class="badge bg-warning">
                        <i class="fa-solid fa-pen">Edit</i>
                    </a>
                    {{-- <a href="/dashboard/user/show" class="badge bg-success">
                        <span data-feather="eye">Show</span>
                      </a> --}}
                      <form action="/dashboard/user/{{ $user->id }}/delete" class="d-inline">
                        @csrf
                        {{-- @method('delete') --}}
                            <button class="badge bg-danger border-0"
                            onclick="return confirm(' Are you sure to delete this data?')">
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
