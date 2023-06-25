<html>

<head>
    <link rel="stylesheet" href="{{ asset('/bs/css/bootstrap.min.css') }}">
    {{-- <link rel="stylesheet" href="/style.css"> --}}
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
    <style>
        @media(max-width:1199px) {
            .searchproduct {
                width: 500px;
            }
        }

        @media(min-width:1200px) {
            .searchproduct {
                width: 600px;
            }
        }
    </style>
    @yield('css')
    @yield('title')
</head>

<body>
    <header>
        @include('partials.navbar')
    </header>
    {{-- <div class="container mt-4"> --}}
    @yield('content')
    {{-- </div> --}}
    @include('partials.footer')

    <script src="/bs/js/bootstrap.bundle.min.js"></script>
    <script src="/checkout/form-validation.js"></script>
    <script src="/js/sweetalert.all.js"></script>
    @include('sweetalert::alert')
    @yield('scripts')


</body>

</html>
