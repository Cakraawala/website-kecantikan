@extends('d.dpartials.layouts')
@section('title')
<title>Cakra | {{ $title }}</title>@endsection
@section('content')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
<h1 class="h2">Dashboard  | Welcome {{ auth()->user()->name }}</h1>
<div class="btn-toolbar mb-2 mb-md-0"></div></div>
 <div class="row">
<div class="col-xl-3 col-md-6 mb-4">
<div class="card shadow border-left-primary h-100 py-2">
<div class="card-body">
<div class="row no-gutters align-items-center">
<div class="col mr-2">
<div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
Earnings (All time)</div>
<div class="h5 mb-0 font-weight-bold text-gray-800">Rp.{{ number_format($totaluang) }}</div>
</div>
<div class="col-auto">
   <a href="/dashboard/c-Success"> <i class="fa fa-usd fa-2x" aria-hidden="true"></i> </a>
</div></div></div></div></div>
<div class="col-xl-3 col-md-6 mb-4">
<div class="card shadow border-left-success h-100 py-2">
<a href="/dashboard/c-Success" style="text-decoration: none;color:black">
<div class="card-body">
<div class="row no-gutters align-items-center">
<div class="col mr-2">
<div class="text-xs font-weight-bold text-success text-uppercase mb-1">
Total Transaksi</div>
<div class="h5 mb-0 font-weight-bold text-gray-800">{{ $transaksi }}</div>
</div>
<div class="col-auto">
<i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
</div></div></div></a></div></div><div class="col-xl-3 col-md-6 mb-4">
<div class="card shadow border-left-info h-100 py-2">
<div class="card-body">
<a href="/dashboard/user" style="text-decoration: none;color:black">
<div class="row no-gutters align-items-center">
<div class="col mr-2">
<div class="col mr-2">
<div class="text-xs font-weight-bold text-info text-uppercase mb-1">
Total Customer</div>
<div class="h5 mb-0 font-weight-bold text-gray-800">
{{ $user }}
  </div>
</div>

</div>
<div class="col-auto">
<i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
</div></div></a></div></div></div><div class="col-xl-3 col-md-6 mb-4">
<div class="card shadow border-left-warning h-100 py-2">
<div class="card-body">
  <a href="/dashboard/product" style="text-decoration: none;color:black">
<div class="row no-gutters align-items-center">
<div class="col mr-2">
<div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
Total product</div>
<div class="h5 mb-0 font-weight-bold text-gray-800">
{{ $product }}
  </div>
</div>
<div class="col-auto">
</div></div>  </a></div></div></div></div>
<div class="row">
<div class="col-lg-6 mb-4">
<div class="card shadow mb-4">
<div class="card-header py-3">
<h6 class="m-0 font-weight-bold text-primary"><i class="fa fa-database" aria-hidden="true"></i>  Project Databases</h6>
</div>
<div class="card-body">
@php
$totalan = $category + $product + $user + $payment + $delivery + $transaksi;$cp = $category / $totalan * 100;
$p = $product / $totalan * 100;$u = $user / $totalan * 100;$d = $delivery / $totalan * 100;$py = $payment / $totalan *100;$t = $transaksi / $totalan * 100;$tot = $totalan / $totalan * 100;
@endphp
<h4 class="small font-weight-bold">Category Product <span class="float-right">{{ $category }}</span></h4>
<div class="progress mb-3">
<div class="progress-bar bg-danger" role="progressbar" style="width: {{ $cp }}%"
aria-valuenow="{{ $cp }}" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<h4 class="small font-weight-bold">Product <span
class="float-right">{{ $product }}</span></h4>
<div class="progress mb-3">
<div class="progress-bar bg-warning" role="progressbar" style="width: {{ $p }}%"
aria-valuenow="{{ $p }}" aria-valuemin="0" aria-valuemax="100"></div>
</div>

<h4 class="small font-weight-bold">Customer <span
class="float-right">{{ $user }}</span></h4>
<div class="progress mb-3">
<div class="progress-bar" role="progressbar" style="width: {{ $u }}%"
aria-valuenow="{{ $u }}" aria-valuemin="0" aria-valuemax="100"></div>
</div>

<h4 class="small font-weight-bold"> Delivery <span
class="float-right">{{$delivery}}</span></h4>
<div class="progress mb-3">
<div class="progress-bar bg-secondary" role="progressbar" style="width: {{ $d }}%"
aria-valuenow="{{ $d }}" aria-valuemin="0" aria-valuemax="100"></div>
</div>

<h4 class="small font-weight-bold"> Transaction <span
class="float-right">{{$transaksi}}</span></h4>
<div class="progress mb-3">
<div class="progress-bar bg-success" role="progressbar" style="width: {{ $t }}%"
aria-valuenow="{{ $t }}" aria-valuemin="0" aria-valuemax="100"></div>
</div>

<h4 class="small font-weight-bold">Payment <span
class="float-right"> {{ $payment }} </span></h4>
<div class="progress mb-3">
<div class="progress-bar bg-info" role="progressbar" style="width: {{ $py }}%"
aria-valuenow="{{ $py }}" aria-valuemin="0" aria-valuemax="100"></div>
</div>

<h4 class="small font-weight-bold"> Total Databases <span
class="float-right">{{$totalan}}</span></h4>
<div class="progress">
<div class="progress-bar bg-dark" role="progressbar" style="width: {{ $tot }}%"
aria-valuenow="{{ $tot }}" aria-valuemin="0" aria-valuemax="100"></div>
</div></div></div></div>
<div class="col-lg-6 mb-3">
  <div class="card shadow mb-4">
<div class="card-header py-3">
<h6 class="m-0 font-weight-bold text-primary"><i class="fa fa-user-o" aria-hidden="true"></i> Your Profile</h6></div>
<div class="card-body">
<table class="table table-borderless">
<thead>
  <tr>
<tbody>
<tr>
<td width="35%"> Name </td>
<td width="1%"> : </td>
<td> {{ auth()->user()->name ?? '-' }} </td>
</tr>
<tr>
<td> Username </td>
<td> : </td>
<td> {{ auth()->user()->username ?? '-' }} </td>
</tr>
<tr>
<td> Email </td>
<td> : </td>
<td> {{ auth()->user()->email ?? '-'  }} </td>
</tr>
<tr>
<td> Jenis Kelamin </td>
<td> : </td>
<td>
@if (auth()->user()->jk == '?')
-
@elseif (auth()->user()->jk == 'L')
Pria
@elseif (auth()->user()->jk == 'P')
Wanita
@endif </td>
</tr>
<tr>
<td> No Telp </td>
<td> : </td>
<td> {{ auth()->user()->no_wa ?? '-' }} </td>
</tr>
</tr></thead></table></div></div></div></div>
</div></div></div></main></div></div>
<script src="/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="dashboard.js"></script>
  </body>
</html>
@endsection
