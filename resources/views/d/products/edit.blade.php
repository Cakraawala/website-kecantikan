@extends('d.dpartials.layouts')
@section('title')
<title>Dashboard | Edit Product</title>
@endsection

@section('content')
<div class="container-fluid">
    <main class="col-md-9 ms-sm-auto mt-2 col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap
    flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Edit Product</h1>
</div>

<div class="col-lg-8">
    <form action="/dashboard/product/{{ $product->id }}/update" method="post" class="mb-5"
        enctype="multipart/form-data">
        @csrf
        {{-- @method('put') --}}

        <div class="mb-3">

            <label for="nm_products" class="form-label">Nama Product <span style="font-style: italic;">(required)</span></label>

            <input type="text" class="form-control  @error('nm_products') is-invalid @enderror"
              id="nm_products" name ='nm_products' value="{{ old('nm_products', $product->nm_products) }}">
              @error('nm_products')
              <div class="invalid-feedback">
                {{$message }}
                </div>
              @enderror
          </div>

          <div class="mb-3">
              <label for="category_products_id" class="form-label">Category Products <span style="font-style: italic;">(required)</span></label>
              <input type="text" class="form-control @error('category_products_id') is-invalid @enderror" id="category_products_id" name="category_products_id" value="{{ old('category_products_id', $product->category_products_id) }}" disabled>
              @error('category_products_id')
              <div class="invalid-feedback">
                {{$message }}
                </div>
              @enderror
              <select value="{{ old('category_products_id', $product->category_products_id) }}" name="category_products_id" id="category_products_id" class="form-select  @error('category_products_id') is-invalid @enderror">
                <option selected>Edit Category Product</option>
                @foreach ($categoryproduct as $cp)
                <option value="{{ $cp->id }}"> {{ $cp->nm_category }} </option>
                @endforeach
            </select>
          </div>
        <button type="submit" class="btn btn-primary">Update post!</button>
      </form>
    </div>
    </main>
</div>
@endsection
