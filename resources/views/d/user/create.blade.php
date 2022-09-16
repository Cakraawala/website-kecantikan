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
    <form action="/dashboard/user" method="post" class="mb-5" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
          <label for="name" class="form-label">Nama User <span style="font-style: italic;">(required)</span></label>

          <input type="text" class="form-control"
            id="name" name ='name' required>
        </div>

        <div class="mb-3">
            <label for="username" class="form-label">Username <span style="font-style: italic;">(required)</span></label>
            <input type="text" class="form-control" id="username" name="username" required>
        </div>

        <div class="mb-3">
          <label for="password" class="form-label"> Password <span style="font-style: italic;">(required)</span></label>
          <input type="password" class="form-control" id="password" name="password" required" >
        </div>

        <div class="mb-3">
          <label for="email" class="form-label"> Email <span style="font-style: italic;">(required)</span> </label>
          <input type="text" class="form-control" id="email" name="email" required" >
        </div>

        <div class="mb-3">
          <label for="no_wa" class="form-label"> Nomer telepon </label>
          <input type="text" class="form-control" id="no_wa" name="no_wa">
        </div>

        <div class="mb-3">
          <label for="tgl_lhr" class="form-label"> Tanggal Lahir </label>
          <input type="date" class="form-control" id="tgl_lhr" name="tgl_lhr">
        </div>

        <div class="mb-3">
            <label class="form-label" for="jk">
                Jenis Kelamin
            </label>
            <select name="jk" id="jk" class="form-select">
                <option value="?" selected>Pilih Jenis Kelamin</option>
                <option value="L"> Pria </option>
                <option value="P"> Wanita </option>
            </select>
          </div>

        <div class="mb-3">
          <label for="code_pos" class="form-label">Kode Pos </label>
          <input type="text" class="form-control" id="code_pos" name="code_pos"" >
        </div>

        <div class="mb-3">
            <label for="address" class="form-label"> Address </label>
            <textarea class="form-control" id="address" name="address" ></textarea>
          </div>

        <button type="submit" class="btn btn-primary">Create!</button>
      </form>
</div>
</main>
</div>
@endsection
