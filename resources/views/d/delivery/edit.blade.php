@extends('d.dpartials.layouts')
@section('title')
<title>Dashboard | Edit Category Payment</title>
@endsection

@section('content')
<div class="container-fluid">
    <main class="col-md-9 ms-sm-auto mt-2 col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap
    flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Edit</h1>
</div>

<div class="col-lg-8">
    <form action="/dashboard/delivery/{{ $delivery->id }}/update" method="post" class="mb-5" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">

          <label for="nm_deliver" class="form-label">Nama Delivery <span style="font-style: italic;"></span></label>

          <input type="text" class="form-control @error('nm_deliver') is-invalid @enderror"
            id="nm_deliver" name ='nm_deliver' value="{{ old('nm_deliver', $delivery->nm_deliver) }}">
            @error('nm_deliver')
            <div class="invalid-feedback">
              {{$message }}
              </div>
            @enderror
        </div>

        <div class="mb-3">

          <label for="ongkir" class="form-label">Fee <span style="font-style: italic;">(required)</span></label>

          <input type="text" class="form-control @error('ongkir') is-invalid @enderror"
            id="ongkir" name ='ongkir' required value="{{ old('ongkir', $delivery->ongkir) }}">
            @error('nm_deliver')
            <div class="invalid-feedback">
              {{$message }}
              </div>
            @enderror
        </div>

        <div class="mb-3">

          <label for="estimasi" class="form-label">Estimasi<span style="font-style: italic;">(required)</span></label>

          <input type="number" class="form-control @error('estimasi') is-invalid @enderror"
            id="estimasi" name ='estimasi' value="{{ old('estimasi', $delivery->estimasi) }}" required>
        </div>


        <button type="submit" class="btn btn-primary">Create!</button>
      </form>
    </div>
    </main>
</div>
@endsection
