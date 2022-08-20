@extends('d.dpartials.layouts')

@section('title')
    <title>Dashboard | {{ $title }}</title>
@endsection

@section('content')
<div class="container-fluid">
<main class="col-md-9 ms-sm-auto mt-2 col-lg-10 px-md-4">
<div class="d-flex justify-content-between flex-wrap
        flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Create new User</h1>
</div>

<div class="col-lg-8">
    <form action="/dashboard/categoryproduct" method="post" class="mb-5" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">

          <label for="nm_category" class="form-label">Nama category <span style="font-style: italic;">(required)</span></label>

          <input type="text" class="form-control"
            id="nm_category" name ='nm_category' required>
        </div>

        <div class="mb-3">
            <label for="slug" class="form-label">slug <span style="font-style: italic;">(required)</span></label>
            <input type="text" class="form-control" id="slug" name="slug" required>
        </div>


        <button type="submit" class="btn btn-primary">Create!</button>
      </form>
</div>
</main>
</div>
@endsection
