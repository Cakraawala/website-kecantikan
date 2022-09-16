@extends('layouts.main')

@section('title')
    <title> Cakra | {{$title}} </title>
@endsection

@section('content')

<div class="containersas" style="margin-top: 100px;margin-bottom:100px">
<div class="card">
   <div class="card-header">
        <h4> <i class="fa fa-pencil"></i> Edit Profile </h4>
    </div>
    <div class="card-body">
        <form action="/my-account/update" method="post" class="mb-5"
            enctype="multipart/form-data">
            @csrf
            {{-- @method('put') --}}

            <div class="mb-3">

            <label for="name" class="form-label"> Nama User <span style="color: red">*</span></label>

                <input type="text" class="form-control  @error('name') is-invalid @enderror"
                  id="name" name ='name' value="{{ old('name', $user->name) }}">
                  @error('name')
                  <div class="invalid-feedback">
                    {{$message }}
                    </div>
                  @enderror
              </div>

              <div class="mb-3">
                  <label for="username" class="form-label">Username <span style="color: red">*</span></label>
                  <input type="text" class="form-control @error('username') is-invalid @enderror" id="username" name="username" value="{{ old('username', $user->username) }}">
                  @error('username')
                  <div class="invalid-feedback">
                    {{$message }}
                    </div>
                  @enderror
              </div>

              <div class="mb-3">
                <label for="email" class="form-label">  Email <span style="color: red">*</span> </label>
                <input type="text" class="form-control  @error('email') is-invalid @enderror" id="email" value="{{ old('email', $user->email) }}" name="email">
                 @error('email')
                  <div class="invalid-feedback">
                    {{$message }}
                    </div>
                  @enderror
              </div>

              <div class="mb-3">
                <label for="no_wa" class="form-label"> Nomer telepon <span style="color: red">*</span> </label>
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
                      <option value="Pria"> Pria </option>
                      <option value="Wanita"> Wanita </option>
                  </select>
            @error('jk')
             <div class="invalid-feedback">
                {{$message }}
             </div>
                @enderror
            </div>


              <div class="mb-3">
                <label for="code_pos" class="form-label"> Kode Pos </label>
                <input type="text" class="form-control  @error('code_pos') is-invalid @enderror" id="code_pos" value="{{ old('code_pos', $user->code_pos) }} " name="code_pos" >
                 @error('code_pos')
                  <div class="invalid-feedback">
                    {{$message }}
                    </div>
                  @enderror
              </div>

              <div>
                <label for="address" class="form-label"> Address </label>
                <textarea class="form-control  @error('address') is-invalid @enderror" id="address" name="address">{{ old('address', $user->address) }}</textarea>
                 @error('address')
                  <div class="invalid-feedback">
                    {{$message }}
                    </div>
                  @enderror
              </div>
            </div>
              <div class="card-footer">
              <div class="mb-3">
                <label for="password" class="form-label"> Password </label>
                <input type="password" class="form-control  @error('password') is-invalid @enderror" id="password" name="password" >
                 @error('password')
                  <div class="invalid-feedback">
                    {{$message }}
                    </div>
                  @enderror
              </div>
              <div class="mb-3">
                <label for="password_confirmation" class="form-label"> Confirm Password </label>
                <input type="password" class="form-control  @error('password_confirmation') is-invalid @enderror" id="password_confirmation" name="password_confirmation">
                 @error('password_confirmation')
                  <div class="invalid-feedback">
                    {{$message }}
                    </div>
                  @enderror
              </div>

              <div class="card-footer">
                  <button type="submit" class="btn btn-primary mt-3">Update Profile</button>
              </div>
          </form>
    </div>
     </div>
</div>
</div>
@endsection
