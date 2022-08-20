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
    <form action="/dashboard/payment/{{ $payment->id }}/update" method="post" class="mb-5"
        enctype="multipart/form-data">
        @csrf
        {{-- @method('put') --}}

        <div class="mb-3">

            <label for="nm_payment" class="form-label">Nama Category Payment <span style="font-style: italic;">(required)</span></label>

            <input type="text" class="form-control  @error('nm_payment') is-invalid @enderror"
              id="nm_payment" name ='nm_payment' value="{{ old('nm_payment', $payment->nm_payment) }}">
              @error('nm_payment')
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
