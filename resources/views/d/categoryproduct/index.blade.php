@extends('d.dpartials.layouts')

@section('title')
<title>Cakra | {{ $title }}</title>
@endsection

@section('content')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">

        <a href="/dashboard/categoryproduct" class="nav-link text-dark""><h2>Category product</h2></a>
        <form action="/dashboard/categoryproduct" method="get" class="ms-2 d-flex mt-3 mb-3 px-5" role="search">
            @csrf
            <input class="form-control ms-3 me-2" style="width: 450px" type="search" placeholder="Search... (Category name, id Category, price)" name="search">
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
              <li><a class="dropdown-item" href="/dashboard/categoryproduct/create">Add Data</a></li>
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
                <th scope="col">Name Category</th>
                <th scope="col">Slug</th>
                <th scope="col">Info</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($categoryproduct as $cp)
                <tr>
                  <td> {{ $cp->id }}</td>
                  <td>{{ $cp->nm_category }}</td>
                  <td>{{ $cp->slug }}</td>

                  <td>

                      <a href="/dashboard/categoryproduct/{{ $cp->id }}/edit" class="badge bg-warning nav-link">
                        <i class="fa-solid fa-pen">Edit</i>
                    </a>
                      <a href="/dashboard/categoryproduct/{{ $cp->id }}/show" class="badge bg-success nav-link">
                        <i class="fa-solid fa-pen">Show</i>
                    </a>
                      <form action="/dashboard/categoryproduct/{{ $cp->id }}/delete" class="d-inline">
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
