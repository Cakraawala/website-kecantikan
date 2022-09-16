<!DOCTYPE html>
<html>
<head>
	<title>Cakra | Login</title>
	<link rel="stylesheet" type="text/css" href="/loginn/css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
</head>
<body>
    @if (session()->has('loginError'))

    <div class="alert alert-danger alert-dismissible fade show" role="alert"> {{session('loginError')}}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
    </div>

    @endif
    @if (session()->has('asking'))

    <div class="alert alert-success alert-dismissible fade show" style="z-index: 1000" role="alert"> {{session('asking')}}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
    </div>

    @endif

    @if (session()->has('success'))

    <div class="alert alert-success alert-dismissible fade show" role="alert"> {{session('success')}}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
    </div>

    @endif

	<img class="wave" src="/loginn/img/wave.png">
	<div class="container">
		<div class="img">
			<img src="/loginn/img/bg.svg">
		</div>
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
           		   		<input type="username" name="username" id="username" required autofocus @if(Cookie::has('username')) value="{{ Cookie::get('username') }}" @endif class="input" placeholder="Username">
           		   </div>
           		</div>
           		<div class="input-div pass">
           		   <div class="i">
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<input type="password" name="password" id="password" required class="input" placeholder="Password" @if(Cookie::has('password')) value="{{ Cookie::get('password') }}" @endif>
            	   </div>
            	</div>
                <div class="form-group text-end">
                    <label for="remember"> Remember me</label>
                    <input type="checkbox" @if(Cookie::has('username')) checked @endif   name="remember" value="1">
                </div>
            	<a href="/register" class="nav-link">Register?</a>
            	<input type="submit" class="btn" value="login">
            </form>
        </div>
    </div>
    <script type="text/javascript" src="/loginn/js/main.js"></script>
    <script src="/js/bootstrap.bundle.min.js"></script>
    @include('sweetalert::alert')
</body>
</html>
