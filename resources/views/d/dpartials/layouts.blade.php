<html>
    <head>
        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="/carousel/carousel.css" rel="stylesheet">
        <link href="/footers.css" rel="stylesheet">
        <link rel="stylesheet" href="/product.css   ">
        <link href="/dashboardd/dashboard.css" rel="stylesheet">
        {{-- <link href="/dropdown/dropdowns.css" rel="stylesheet"> --}}
        {{-- <link href="/checkout/form-validation.css" rel="stylesheet"> --}}


        @yield('title')
    </head>
    <body>
        <header>
            @include('d.dpartials.header')
        </header>
        @yield('content')

        <script src="/js/bootstrap.bundle.min.js"></script>
        <script src="/checkout/form-validation.js"></script>
        {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script> --}}
    </body>
</html>
