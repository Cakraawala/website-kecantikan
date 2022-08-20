@extends('d.dpartials.layouts')
@section('title')
<title>Dashboard | Edit User</title>
@endsection

@section('content')
<div class="container-fluid">
    <main class="col-md-9 ms-sm-auto mt-2 col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap
    flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Edit</h1>
</div>

<div class="col-lg-8">
    <form action="/dashboard/categoryproduct/{{ $categoryproduct->id }}/update" method="post" class="mb-5"
        enctype="multipart/form-data">
        @csrf
        {{-- @method('put') --}}

        <div class="mb-3">
          <div class="mb-3">
              <label for="nm_category" class="form-label">Nama Category <span style="font-style: italic;">(required)</span></label>
              <input type="text" class="form-control" id="nm_category" name="nm_category" required value="{{ old('nm_category', $categoryproduct->nm_category) }}">
              @error('nm_category')
              <div class="invalid-feedback">
                {{$message }}
                </div>
              @enderror
          </div>

          <div class="mb-3">
            <label for="slug" class="form-label"> Slug </label>
            <input type="text" class="form-control  @error('slug') is-invalid @enderror" id="slug" value="{{ old('slug', $categoryproduct->slug) }}" name="slug" required" >
             @error('slug')
              <div class="invalid-feedback">
                {{$message }}
                </div>
              @enderror
          </div>


        <button type="submit" class="btn btn-primary">Update post!</button>
      </form>
    </div>
    </main>
</div>
@endsection
