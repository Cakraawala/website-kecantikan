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
            <input class="form-control ms-3 me-2" style="width: 450px" type="search" placeholder="Search... (Id, Name category)" name="search">
            <button class="btn btn-outline-secondary" type="submit"><i class="fa fa-search"></i></button>
        </form>
        <div class="btn-toolbar mb-2 mb-md-0">

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
      <div class="containersss" style="margin-bottom:50px">

          <div class="table-responsive mb-4">
              <table class="table table-bordered table-striped table-lg mb-4" id="myTable">
            <thead>
              <tr>
                <th scope="col" width="5%">Id</th>
                <th scope="col" width="20%"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;Image</th>
                <th scope="col" width="15%">Name Category</th>
                <th scope="col" width="30%">Description</th>
                {{-- <th width="5%"></th> --}}
                <th scope="col">Info</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($categoryproduct as $cp)
                <tr>
                  <td>{{ $cp->id }}</td>
                  <td> @if ($cp->image)
                    <a href="" data-bs-toggle="modal" data-bs-target="#modal{{ $loop->iteration }}"><img src="{{asset('storage/' . $cp->image)}}" style="max-width: 100px;max-height:100px"></a>
                  </td>
                    <div class="modal" tabindex="-1" id="modal{{ $loop->iteration }}">
                        <div class="modal-dialog modal-lg modal-dialog-centered">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title">Category {{ $cp->nm_category }}</h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <img src="{{asset('storage/' . $cp->image)}}" style="width: 100%;height:500px">
                            </div>
                            <div class="modal-footer">
                          </div>
                        </div>
                      </div>
                      @else
                      <a href="" data-bs-toggle="modal" data-bs-target="#modal{{ $loop->iteration }}">
                      <img src="https://source.unsplash.com/700x400?{{ $cp->nm_category }}"
                      class="bd-placeholder-img card-img-top" alt="{{ $cp->nm_category }}" style="width: 150px;height:75px">
                      </td>
                      <div class="modal" tabindex="-1" id="modal{{ $loop->iteration }}">
                         <div class="modal-dialog modal-lg modal-dialog-centered">
                           <div class="modal-content">
                             <div class="modal-header">
                               <h5 class="modal-title">Product {{$cp->nm_category}}</h5>
                               <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                             </div>
                             <div class="modal-body">
                                 <img src="https://source.unsplash.com/700x400?{{ $cp->nm_category }}"
                                 class="bd-placeholder-img card-img-top" alt="{{ $cp->nm_category }}" style="width: 100%;height:500px">
                             </div>
                             <div class="modal-footer">
                           </div>
                         </div>
                       </div>
                    @endif</td>
                  <td><a href="/dashboard/categoryproduct/{{ $cp->id }}/show" style="text-decoration: none;color:black;">{{ $cp->nm_category }}</a></td>
                  <td>{{ $cp->description ?? '-' }}</td>
                  {{-- <td></td> --}}

                  <td>
                    <form action="/dashboard/categoryproduct/{{ $cp->id }}/edit" method="GET" class="d-inline">
                      @csrf
                      <button class="badge bg-warning border-0" type="submit">
                        <span>Edit</span>
                      </button>
                    </form>
                    <form action="/dashboard/categoryproduct/{{ $cp->id }}/show" method="GET" class="d-inline">
                      @csrf
                      <button class="badge bg-success border-0" type="submit">
                        <span>Show</span>
                      </button>
                    </form>
                      {{-- <a href="/dashboard/categoryproduct/{{ $cp->id }}/show" class="badge bg-success nav-link">
                        <i class="fa-solid fa-pen">Show</i>
                    </a> --}}
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
