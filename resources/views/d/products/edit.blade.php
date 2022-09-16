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

              <select name="category_products_id" id="category_products_id" class="form-select  @error('category_products_id') is-invalid @enderror">
                {{-- <option >{{ old('category_products_id', $product->CategoryProduct->nm_category) }}</option> --}}
                @foreach ($categoryproduct as $cp)
                @if(old('category_products_id', $product->category_products_id) == $cp->id)
                    <option value="{{ $cp->id }}" selected> {{ $cp->nm_category }} </option>
                    @else
                    <option value="{{ $cp->id }}"> {{ $cp->nm_category }} </option>
                @endif
                @endforeach
            </select>
          </div>

          <div class="mb-3">
            <label for="price" class="form-label">Price <span style="font-style: italic">(required)</span></label>
            <input type="number" class="form-control @error('price') is-invalid @enderror" id="price" name="price" value="{{ old('price', $product->price) }}"
            @error('category_products_id')
            <div class="invalid-feedback">
              {{$message }}
              </div>
            @enderror
          </div>
        </div>

        <div class="mb-3">
            <label for="image" class="form-label mb-1">Image Product</i></label>
            <input type="hidden" name="oldImage" value="{{ $product->image }}">
            @if ($product->image)
            <img src="{{ asset('storage/' . $product->image) }}" class="img-preview img-fluid mb-3 col-sm-5 d-block" style="width:200px;height:200px">
                @else
                <img class="img-preview img-fluid mb-3 col-sm-5">
            @endif

            <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image">
            @error('image')
            <div class="invalid-feedback">
                {{$message}}
            </div>
        @enderror
    </div>


        <div class="mb-3">
            <label for="deskripsi" class="form-label">Deskripsi</label>
            <input type="text" class="form-control" value="{{ old('deskripsi', $product->deskripsi) }}" readonly>
            <textarea class="form-control @error('deskripsi') is-invalid @enderror"
              id="deskripsi" name ='deskripsi'> </textarea>
              @error('deskripsi')
              <div class="invalid-feedback">
                  {{$message}}
              </div>
          @enderror
          </div>


        <button type="submit" class="btn btn-primary">Update!</button>
      </form>
    </div>
    </main>
</div>
@endsection
