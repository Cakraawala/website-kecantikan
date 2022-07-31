    <nav class="navbar navbar-expand-lg navbar-dark bg-dark -wrap flex-md-nowrap ">
        <div class="container">
            <div class="cont1atas"></div>
            <ul class="navbar-nav flex-row flex-wrap">
                <li class="nav-item col-4 col-md-auto">
                    <a href="/" class="nav-link fa fa-facebook"></a>
                </li>
                <li class="nav-item col-4 mt-0 col-md-auto">
                    <a href="/" class="nav-link fa fa-twitter"></a>
                </li>
                <li class="nav-item col-4 mt-0 mb-0 ps-1 col-md-auto">
                <a href="/" class="nav-link px-0 fa fa-instagram"> </a>
                </li>
                <li class="nav-item col-4 mt-0 mb-0 ms-2 ps-1 col-md-auto">
                    <a href="/" class="nav-link px-0 fa fa-envelope"> </a>
                </li>
            </ul>

            <ul class="navbar-nav ms-auto flex-row flex-wrap">
                <li class="nav-item col-4 col-md-auto">
                    <a href="/" class="nav-link fa fa-bell"> Notifikasi</a>
                </li>
                <li class="nav-item col-4 mt-0 col-md-auto">
                    <a href="/" class="nav-link fa fa-font-awesome"> Bantuan </a>
                </li>
            </ul>
            </div>
    </nav>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark
        -wrap flex-md-nowrap ">
            <div class="container">
                <a class="navbar-brand" style="font-size: 30px;font-family:Copperplate;" href="#">Cakra</a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse float-end" id="navbarNav">
                    <ul class="navbar-nav flex-row flex-wrap bd-navbar-nav pt-2
                    py-md-0">
                    @csrf
                    <form class="ms-2 d-flex mt-3 mb-3 px-5" role="search">
                        <input class="form-control ms-3 me-2" style="width: 680px" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-secondary" type="submit"><i class="fa fa-search"></i></button>
                    </form>
                    </ul>

                    <ul class="navbar-nav ms-auto flex-row flex-wrap">
                        @auth
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown"
                            role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Welcome back, {{ auth()->user()->name }}
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="/dashboard">
                                <i class="bi bi-layout-text-window-reverse">
                                    </i> My Dashboard</a></li>
                            <li><hr class="dropdown-divider"></li>

                            <li>
                                <form action="/logout" method="post">
                                    @csrf
                                    <button type="submit" class="dropdown-item">
                                        <i class="bi bi-box-arrow-left"> </i> Logout
                                    </button>
                                </form>
                            </li>
                            </ul>

                        </li>
                        @else
                            <li class="nav-item col-4 col-md-auto">
                                 <a href=""> <i class="fa fa-shopping-cart nav-link px-2 me-2" style="font-size:24px;color:white"></i> </a>
                            </li>
                                <li class="nav-item col-6 col-md-auto">
                                    <a href="/register" class="nav-link px-2" style="font-weight: 500;font-family:Verdana, Geneva, Tahoma, sans-serif">
                                    Register</a>
                                </li>


                                <li class="nav-item col-6 col-md-auto">
                                    <a href="/masuk" class="nav-link px-2 border-0 ms-2" style="font-weight: 500;font-family:Verdana, Geneva, Tahoma, sans-serif">
                                    Login </a>
                                </li>
                        @endauth
                    </ul>
                </div>
            </div>
        </nav>
