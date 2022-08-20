@extends('d.dpartials.layouts')

@section('title')
    <title>Dashboard | {{ $title }}</title>
@endsection

@section('content')
<div class="container-fluid">
<main class="col-md-9 ms-sm-auto mt-2 col-lg-10 px-md-4">
<div class="d-flex justify-content-between flex-wrap
        flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Create new  Payment</h1>
</div>

<div class="col-lg-8">
    <form action="/dashboard/payment" method="post" class="mb-5" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">

          <label for="nm_payment" class="form-label">Payment <span style="font-style: italic;">(required)</span></label>

          <input type="text" class="form-control"
            id="nm_payment" name ='nm_payment' required>
        </div>
        <div class="mb-3">

          <label for="fee" class="form-label">Fee <span style="font-style: italic;">(required)</span></label>

          <input type="text" class="form-control"
            id="fee" name ='fee' required>
        </div>

        <button type="submit" class="btn btn-primary">Create!</button>
      </form>
</div>
</main>
</div>
@endsection
