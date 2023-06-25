<!DOCTYPE html>
<html>

<head>
    <title>Cakra | Login</title>
    <link rel="stylesheet" type="text/css" href="/loginn/css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('/bs/css/bootstrap.min.css') }}">
</head>

<body>
    @if (session()->has('loginError'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert"> {{ session('loginError') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
        </div>
    @elseif (session()->has('asking'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('asking') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
        </div>
    @elseif (session()->has('primary'))
        <div class="alert alert-success alert-dismissible fade show" role="alert"> {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
        </div>
    @endif

    <img class="wave" src="/wave.png">
    {{-- <svg class="wave1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#273036" fill-opacity="1"
            d="M0,288L21.8,266.7C43.6,245,87,203,131,202.7C174.5,203,218,245,262,218.7C305.5,192,349,96,393,58.7C436.4,21,480,43,524,69.3C567.3,96,611,128,655,160C698.2,192,742,224,785,202.7C829.1,181,873,107,916,80C960,53,1004,75,1047,106.7C1090.9,139,1135,181,1178,181.3C1221.8,181,1265,139,1309,133.3C1352.7,128,1396,160,1418,176L1440,192L1440,320L1418.2,320C1396.4,320,1353,320,1309,320C1265.5,320,1222,320,1178,320C1134.5,320,1091,320,1047,320C1003.6,320,960,320,916,320C872.7,320,829,320,785,320C741.8,320,698,320,655,320C610.9,320,567,320,524,320C480,320,436,320,393,320C349.1,320,305,320,262,320C218.2,320,175,320,131,320C87.3,320,44,320,22,320L0,320Z">
        </path>
    </svg> --}}
    <div class="container">
        {{-- <div class="img">
			<img src="/loginn/img/bg.svg">
		</div> --}}
        <div class="login-content">
            <form action="/login" method="post">
                @csrf
                <img src="/loginn/img/avatar.svg">
                <h2 class="title">Login</h2>
                <div class="input-div one">
                    <div class="i">
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="div">
                        <input type="username" name="username" id="username" required autofocus
                            @if (Cookie::has('username')) value="{{ Cookie::get('username') }}" @endif
                            class="input" placeholder="Username">
                    </div>
                </div>
                <div class="input-div pass">
                    <div class="i">
                        <i class="fas fa-lock"></i>
                    </div>
                    <div class="div">
                        <input type="password" name="password" id="password" required class="input"
                            placeholder="Password"
                            @if (Cookie::has('password')) value="{{ Cookie::get('password') }}" @endif>
                    </div>
                </div>
                <div class="form-group text-end">
                    <label for="remember"> Remember me</label>
                    <input style="margin-top: 6px" type="checkbox" @if (Cookie::has('username')) checked @endif
                        name="remember" value="1">
                </div>
                {{-- <a href="/register" class="nav-link">Register?</a> --}}
                <input type="submit" class="btn" value="login">
                <h6>Tidak Punya Akun?</h6> <a class="h6" href="">aa</a>
            </form>
        </div>
    </div>
    <script type="text/javascript" src="/loginn/js/main.js"></script>
    <script src="/bs/js/bootstrap.bundle.min.js"></script>
    @include('sweetalert::alert')
</body>

</html>
