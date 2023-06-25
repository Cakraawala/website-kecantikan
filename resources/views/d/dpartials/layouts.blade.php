<html>

<head>
    <link rel="stylesheet" href="{{ asset('/bs/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="/fa4/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/product.css">
    <link href="/dashboardd/dashboard.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" />
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
    @yield('title')
</head>

<body>
    <header class="heder">
        @include('d.dpartials.header')</header>
    <div class="contanisse" style="margin-bottom:50px"></div>
    @yield('content')
    <script src="/bs/js/bootstrap.bundle.min.js"></script>
    <script src="/checkout/form-validation.js"></script>
</body>

</html>
