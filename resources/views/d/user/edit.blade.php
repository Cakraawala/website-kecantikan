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
    <form action="/dashboard/user/{{ $user->id }}/update" method="post" class="mb-5"
        enctype="multipart/form-data">
        @csrf
        {{-- @method('put') --}}

        <div class="mb-3">

            <label for="name" class="form-label">Nama User <span style="font-style: italic;">(required)</span></label>

            <input type="text" class="form-control  @error('name') is-invalid @enderror"
              id="name" name ='name' value="{{ old('name', $user->name) }}">
              @error('name')
              <div class="invalid-feedback">
                {{$message }}
                </div>
              @enderror
          </div>

          <div class="mb-3">
              <label for="username" class="form-label">Username <span style="font-style: italic;">(required)</span></label>
              <input type="text" class="form-control @error('username') is-invalid @enderror" id="username" name="username" value="{{ old('username', $user->username) }}">
              @error('username')
              <div class="invalid-feedback">
                {{$message }}
                </div>
              @enderror
          </div>

          <div class="mb-3">
            <label for="email" class="form-label"> Email</label>
            <input type="text" class="form-control  @error('email') is-invalid @enderror" id="email" value="{{ old('email', $user->email) }}" name="email">
             @error('email')
              <div class="invalid-feedback">
                {{$message }}
                </div>
              @enderror
          </div>

          <div class="mb-3">
            <label for="no_wa" class="form-label"> Nomer telepon </label>
            <input type="text" class="form-control  @error('no_wa') is-invalid @enderror" id="no_wa" value="{{ old('no_wa', $user->no_wa) }}"name="no_wa">
             @error('no_wa')
              <div class="invalid-feedback">
                {{$message }}
                </div>
              @enderror
          </div>

          <div class="mb-3">
            <label for="tgl_lhr" class="form-label"> Tanggal Lahir </label>
            <input type="date" class="form-control  @error('tgl_lhr') is-invalid @enderror" id="tgl_lhr" value="{{ old('tgl_lhr', $user->tgl_lhr) }}"name="tgl_lhr">
             @error('tgl_lhr')
              <div class="invalid-feedback">
                {{$message }}
                </div>
              @enderror
          </div>

          <div class="mb-3">
              <label class="form-label " for="jk">
                  Jenis Kelamin
              </label>
              <select value="{{ old('jk', $user->jk) }}"name="jk" id="jk" class="form-select  @error('jk') is-invalid @enderror">
                  <option value="?" selected>Pilih Jenis Kelamin</option>
                  <option value="L"> Laki-Laki </option>
                  <option value="P"> Perempuan </option>
              </select>
        @error('jk')
         <div class="invalid-feedback">
            {{$message }}
         </div>
            @enderror
        </div>


          <div class="mb-3">
            <label for="code_pos" class="form-label"> Kode Pos </label>
            <input type="text" class="form-control  @error('code_pos') is-invalid @enderror" id="code_pos" value="{{ old('code_pos', $user->code_pos) }} " name="code_pos" required" >
             @error('code_pos')
              <div class="invalid-feedback">
                {{$message }}
                </div>
              @enderror
          </div>

          <div class="mb-3">
            <label for="address" class="form-label"> Address </label>
            <textarea class="form-control  @error('address') is-invalid @enderror" id="address" name="address" required>{{ old('address', $user->address) }}</textarea>
             @error('address')
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
