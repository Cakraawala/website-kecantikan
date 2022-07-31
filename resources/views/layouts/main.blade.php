<html>
    <head>
        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <title> Cakra </title>
    </head>
    <body>
        <header>
            @include('partials.navbar')
        </header>
        <div class="container mt-4">
            @yield('content')
        </div>
    </body>
</html>
