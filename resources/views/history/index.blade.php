@extends('layouts.main')

@section('title')
    <title>Cakra | {{ $title }}</title>
@endsection
@section('css')
    <style>
        @media(max-width:576px) {
            .subtitle {
                font-size: 0.7rem;
            }
        }

        @media(min-width:577px) {
            .subtitle {
                font-size: 1rem;
            }
        }
    </style>
@endsection
@section('content')
    <div class="container" style="margin-top:100px;">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    @if (session()->has('success'))
                        <div class="alert alert-success alert-dismissible fade show mb-5" role="alert">
                            {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
                        </div>
                    @endif
                    <div class="card-body">
                        <h3><i class="fa fa-history"></i>&nbsp; History Checkout</h3><br>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th width=5%>
                                        <h6 class="subtitle">No.</h6>
                                    </th>
                                    <th width=15%>
                                        <h6 class="subtitle">Date</h6>
                                    </th>
                                    <th width=20%>
                                        <h6 class="subtitle">No Resi</h6>
                                    </th>
                                    <th>
                                        <h6 class="subtitle">Status</h6>
                                    </th>
                                    {{-- <th><h6 class="subtitle">Payment</h6></th>
                            <th><h6 class="subtitle">Delivery</h6></th> --}}
                                    <th>
                                        <h6 class="subtitle">Subtotal</h6>
                                    </th>
                                    <th>
                                        <h6 class="subtitle">Action</h6>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($checkout as $c)
                                    <tr>
                                        <td>
                                            <h6 class="subtitle">{{ $loop->iteration }}</h6>
                                        </td>
                                        <td>
                                            <h6 class="subtitle">{{ $c->tgl }}</h6>
                                        </td>
                                        <td>
                                            <h6 class="subtitle">{{ $c->no_resi }}</h6>
                                        </td>
                                        <td>
                                            <h6 class="subtitle">
                                                @if ($c->image && $c->status == 'Success')
                                                    {{ $c->status }} (Barang Success Dibayar)
                                                @elseif ($c->image && $c->status == 'Pending')
                                                    {{ $c->status }} (Menunggu konfirmasi)
                                                @else
                                                    {{ $c->status }} (Harap melengkapi pembayaran!)
                                                @endif
                                            </h6>
                                        </td>

                                        <td>
                                            <h6 class="subtitle">Rp.{{ number_format($c->subtotal) }}</h6>
                                        </td>
                                        <td>
                                            <h6 class="subtitle">
                                                <form action="/history/{{ $c->id }}" method="get">
                                                    <button class="badge bg-primary border-0">
                                                        <i class="fa fa-eye"></i> &nbsp; Show
                                                    </button>
                                                </form>
                                            </h6>
                                        </td>
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
    <script type="text/javascript"></script>
@endsection
