@extends('layouts.main')

@section('title')
<title>Cakra | {{ $title }}</title>
@endsection
@section('content')

<div class="containerass" style="margin-bottom: 400px; margin-top:100px;">
    <div class="row">
        <div class="col-md-10" style="margin-left: 10%">
            <div class="card">

                    @if (session()->has('success'))

                    <div class="alert alert-success alert-dismissible fade show mb-5" role="alert"> {{session('success')}}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
                    </div>

                    @endif
                <div class="card-body">
                    <h3><i class="fa fa-history"></i>&nbsp; History Checkout</h3><br>
                    <table class="table table-striped">
                    <thead>
                        <tr>
                            <th width=5%><h6>No.</h6></th>
                            <th width=15%><h6>Date</h6></th>
                            <th width=20%><h6>No Resi</h6></th>
                            <th><h6>Status</h6></th>
                            {{-- <th><h6>Payment</h6></th>
                            <th><h6>Delivery</h6></th> --}}
                            <th><h6>Subtotal</h6></th>
                            <th><h6>Action</h6></th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($checkout as $c)
                        <tr>
                            <td><h6>{{ $loop->iteration }}</h6></td>
                            <td><h6>{{ $c->tgl }}</h6></td>
                            <td><h6>{{ $c->no_resi }}</h6></td>
                            <td><h6>
                                @if ($c->image && $c->status == 'Success')
                                {{ $c->status }} (Barang Success Dibayar) </h6></td>
                                @elseif ($c->image && $c->status == 'Pending')
                                {{ $c->status }} (Menunggu konfirmasi)
                                @else
                                {{ $c->status }} (Harap melengkapi pembayaran!)
                                @endif

                            <td><h6>Rp.{{ number_format($c->subtotal) }}</h6></td>
                            <td><h6>
                                <form action="/history/{{$c->id}}" method="get">
                                    <button class="badge bg-primary border-0">
                                        <i class="fa fa-eye"></i> &nbsp; Show
                                    </button>
                                </form>

                            </tr>
                          @endforeach
                    </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection

@section('scripts')
<script type="text/javascript">
</script>

@endsection
