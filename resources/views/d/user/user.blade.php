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
            <input class="form-control ms-3 me-2" style="width: 450px" type="search" placeholder="Search... (Id, Name, Username, Email)" name="search">
            <button class="btn btn-outline-secondary" type="submit"><i class="fa fa-search"></i></button>
        </form>
        <div class="btn-toolbar mb-2 mb-md-0">
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
        <table class="table table-bordered table-striped" id="mytable">
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
                  <td>
                    @if ($user->jk == 'L')
                        Pria
                        @elseif ($user->jk == 'P')
                        Wanita
                    @endif</td>
                  <td>{{ $user->code_pos ??'-' }}</td>
                  <td>{{ $user->address ?? '-' }}</td>

                  <td>
                    <form action="/dashboard/user/{{ $user->id }}/edit" class="d-inline">
                    @csrf
                    <button class="badge bg-warning border-0">
                        <span>Edit</span>
                    </button>
                </form>

                      <form action="/dashboard/user/{{ $user->id }}/show" class="d-inline">
                        @csrf

                            <button class="badge bg-Success border-0">
                                <span> Show </span>
                            </button>
                    </form>
                      <form action="/dashboard/user/{{ $user->id }}/delete" class="d-inline">
                        @csrf
                        {{-- @method('delete') --}}
                            <button class="badge bg-danger border-0"
                            onclick="return confirm(' Are you sure to delete this user?')">
                                <span> Delete</span>
                            </button>
                    </form>
                  </td>
                </tr>
                @endforeach
              </tbody>
              <script>
              $(document).ready( function () {
              $('#mytable').DataTable();
                } );
            </script>
          </table>
        </div>


    </main>
  </div>
</div>

@endsection
