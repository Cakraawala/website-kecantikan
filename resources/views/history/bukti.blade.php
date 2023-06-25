@extends('layouts.main')

@section('title')
    <title>Cakra | {{ $title }}</title>
@endsection
@section('content')
    <div class="container" style="margin-bottom: 50px; margin-top:100px;">
        <div class="row">
            <div class="col-md-12 col-lg-12 col-12">
                <div class="card shadow" style="margin-bottom: 200px">
                    <div class="card-header">
                        <h4> Kirim bukti pembayaran </h4>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <form action="/history/{{ $checkout->id }}/kirim-bukti" method="post"
                                enctype="multipart/form-data">
                                @csrf
                                {{-- <input type="hidden" name="id" value="{{$checkout->id}}"> --}}
                                <label for="image" class="form-label"> Upload Bukti &nbsp; (<i>max 3 Mb)</i></label>
                                <input class="form-control @error('image') is-invalid @enderror" type="file"
                                    id="image" name="image" required>
                                @error('image')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                        </div>
                        <div class="d-flex justify-content-between">
                            <h6></h6>
                            <button type="submit" style="margin-right: 30px" class="btn btn-danger text-end">
                                &nbsp;&nbsp;&nbsp; Kirim! &nbsp;&nbsp;&nbsp;
                            </button>
                        </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script type="text/javascript"></script>
@endsection
