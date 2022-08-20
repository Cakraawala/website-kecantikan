<html>
    <head>
        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="/style.css">
        <link rel="stylesheet" href="/fa4/css/font-awesome.min.css">
        <link href="/carousel/carousel.css" rel="stylesheet">
        <link href="/footers.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <link rel="stylesheet" href="/product.css   ">
        {{-- <link href="/checkout/form-validation.css" rel="stylesheet"> --}}
        {{-- <link rel="stylesheet" type="text/css" href="/dropdown/style.css"> --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>


        @yield('title')
    </head>
    <body>
        <header>
            @include('partials.navbar')
        </header>
        <div class="container mt-4">
            @yield('content')
        </div>
        @include('partials.footer')

        <script src="/js/bootstrap.bundle.min.js"></script>
        <script src="/checkout/form-validation.js"></script>
        <script src="/js/sweetalert.all.js"></script>
        {{-- <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> --}}
        {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script> --}}

        @include('sweetalert::alert')
        @yield('scripts')
    </body>
</html>
