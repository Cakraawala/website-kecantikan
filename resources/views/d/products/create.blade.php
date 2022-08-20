@extends('d.dpartials.layouts')

@section('title')
    <title>Dashboard | {{ $title }}</title>
@endsection

@section('content')
<div class="container-fluid">
<main class="col-md-9 ms-sm-auto mt-2 col-lg-10 px-md-4">
<div class="d-flex justify-content-between flex-wrap
        flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Create new Product</h1>
</div>

<div class="col-lg-8">
    <form action="/dashboard/product" method="post" class="mb-5" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">

          <label for="nm_products" class="form-label">Nama Product <span style="font-style: italic;">(required)</span></label>

          <input type="text" class="form-control @error('nm_products') is-invalid @enderror"
            id="nm_products" name ='nm_products' value="{{ old('nm_products') }}" required>
            @error('nm_products')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="category_products_id" class="form-label">Nama category <span style="font-style: italic;">(required)</span></label>
            <select name="category_products_id" id="category_products_id" class="form-select">
                <option selected>Pilih Category Product</option>
                @foreach ($categoryproduct as $cp)
                <option value="{{ $cp->id }}"> {{ $cp->nm_category }} </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
          <label for="quantity" class="form-label">Quantity <span style="font-style: italic;">(required)</span></label>

          <input type="number" class="form-control @error('quantity') is-invalid @enderror"
            id="quantity" name ='quantity' required value="{{ old('quantity') }}">
            @error('quantity')
            <div class="invalid-feedback">
                {{$message}}
            </div>
        @enderror
        </div>

        <div class="mb-3">

          <label for="price" class="form-label">Price <span style="font-style: italic;">(required)</span></label>

          <input type="number" class="form-control @error('price') is-invalid @enderror"
            id="price" name ='price' required value="{{ old('price') }}">
            @error('price')
            <div class="invalid-feedback">
                {{$message}}
            </div>
        @enderror
        </div>
        {{-- <div class="mb-3">
          <label for="slug" class="form-label">Slug <span style="font-style: italic;">(required)</span></label>

          <input type="text" class="form-control"
        id="slug" nameheader ='slug' required value="{{ old('slug') }}">
        </div> --}}
        <div class="mb-3">

          <label for="deskripsi" class="form-label">Deskripsi</label>

          <input type="text" class="form-control @error('deskripsi') is-invalid @enderror"
            id="deskripsi" name ='deskripsi' value="{{ old('deskripsi') }}">
            @error('deskripsi')
            <div class="invalid-feedback">
                {{$message}}
            </div>
        @enderror
        </div>

        <div c<div class="mb-5">
            <label for="image" class="form-label"> Upload Image Product</label>
            <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image">
            @error('image')
            <div class="invalid-feedback">
                {{$message}}
            </div>
        @enderror
          </div>



        <button type="submit" class="btn btn-primary">Create!</button>
      </form>
</div>
</main>
</div>

<script>
    const nm_products = document.querySelector('#nm_products');
    const slug = document.querySelector('#slug');

    nm_products.addEventListener('change', function(){
        fetch('/dashboard/products/checkSlug?nm_products=' + nm_products.value)
            .then(response => response.json())
            .then(data => slug.value = data.slug)
    });

    document.addEventListener('trix-file-accept', function(e){
        e.preventDefault();
    })
</script>
@endsection
