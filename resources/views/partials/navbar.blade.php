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
                <li class="nav-item col-4 col-md-auto mt-1">
                    <a href="/" class="nav-link fa fa-home"></a>
                </li>
                <li class="nav-item col-4 mt-0 col-md-auto">
                    <a href="/" class="nav-link "> Bantuan </a>
                </li>
            </ul>
        </div>
    </nav>

    {{-- aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa fixedddddddd toppppppppppppp aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa --}}


    <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark flex-md-nowrap ">
        <div class="container-lg">
            <ul class="navbar-nav flex-row flex-wrap">
                <li class="nav-item me-2 me-md-2 me-lg-1 mt-0 ">
                    <a href="/" class="nav-link fa fa-facebook"></a>
                </li>
                <li class="nav-item me-2 me-md-2 me-lg-1 mt-0 ">
                    <a href="/" class="nav-link px-0 fa fa-envelope"> </a>
                </li>
                <li class="nav-item me-2 me-md-2 me-lg-2 ms-lg-2 mt-0 ">
                    <a href="/" class="nav-link px-0 fa fa-instagram"> </a>
                </li>

            </ul>
            <ul class="navbar-nav ms-auto flex-row flex-wrap">
                <li class="nav-item me-2 me-md-1 me-lg-0 mt-0 ">
                    <a href="/" class="nav-link"><i class="fa fa-home"></i></a>
                </li>
                <li class="nav-item me-2 me-md-1 me-lg-0 mt-0 ">
                    <a href="/my-account" class="nav-link"><i class="fa fa-cog"></i></a>
                </li>
            </ul>
        </div>
    </nav>

    <nav class="navbar fixed-top mt-5 navbar-expand-lg navbar-dark bg-dark">
        <div class="container-lg">
            <a class="navbar-brand fs-1" style="font-family:Brush Script MT;" href="/">Cakra<span
                    style="font-family:Brush Script MT;" class="fs-2">Shop </span></a>

            <button class="navbar-toggler text-light" role="button" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasnavbar" aria-controls="offcanvasnavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="offcanvas text-bg-dark offcanvas-end w-50" tabindex="-1" id="offcanvasnavbar"
                aria-labelledby="offcanvaslabel">
                <div class="offcanvas-header">
                    <a class="offcanvas-title text-light text-decoration-none fs-1" style="font-family:Brush Script MT;"
                        href="/" id="offcanvaslabel">Cakra<span style="font-family:Brush Script MT;"
                            class="fs-2">Shop
                        </span></a>
                    <div data-bs-theme="dark">
                        <button type="button" class="btn-close" data-bs-theme="dark" data-bs-dismiss="offcanvas"
                            aria-label="Close"></button>
                    </div>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1">
                        <form action="/products" method="get" class="d-flex me-2 me-lg-4 me-md-2 me-0" role="search">
                            @csrf
                            <input class="form-control searchproduct me-2" type="search" placeholder="Search"
                                name="search">
                            <button class="btn btn-outline-secondary" type="submit"><i
                                    class="fa fa-search"></i></button>
                        </form>

                        @auth
                            <li class="nav-item col-4 col-md-auto">
                                @php
                                    $checkout_main = \App\Models\Cart::where('users_id', auth()->user()->id)
                                        ->where('status', 'cart')
                                        ->first();
                                    if (!empty($checkout_main)) {
                                        $notif = \App\Models\CartDetail::where('carts_id', $checkout_main->id)->count();
                                    }
                                @endphp

                                <a href="/cart" class="nav-link"><i class="fa fa-shopping-cart me-2"
                                        style="font-size:22px;color:white"></i>
                                    @if (!empty($notif))
                                        <span class="badge bg-danger me-2 pt-2">
                                            {{ $notif }}</span>
                                    @endif
                                </a>


                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Welcome back, {{ auth()->user()->name }}
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    @can('admin')
                                        <li><a class="dropdown-item" href="/dashboard">
                                                <i class="fa fa-desktop" aria-hidden="true"></i>&nbsp; My Dashboard</a></li>
                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>
                                    @endcan
                                    <li><a class="dropdown-item" href="/my-account">
                                            <i class="fa fa-id-card-o" aria-hidden="true"></i> &nbsp;My account</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="/history">
                                            <i class="fa fa-shopping-bag" aria-hidden="true"></i>&nbsp; My Order</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>

                                    <li>
                                        <form action="/logout" method="post">
                                            @csrf
                                            <button type="submit" class="dropdown-item">
                                                <i class="fa fa-sign-out" aria-hidden="true"></i> Logout
                                            </button>
                                        </form>
                                    </li>
                                </ul>

                            </li>
                        @else
                            <li class="nav-item col-4 col-md-auto">
                                <a href="/cart" class="nav-link"><i class="fa fa-shopping-cart me-2"
                                        style="font-size:22px;color:white"></i>

                                </a>

                                <div class="dropdown-menu">
                                    <div class="row total-header-section">
                                        <div class="col-lg-6 col-sm-6 col-6">
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item col-6 col-md-auto">
                                <a href="/register" class="nav-link px-2"
                                    style="font-weight: 500;font-family:Verdana, Geneva, Tahoma, sans-serif">
                                    Register</a>
                            </li>


                            <li class="nav-item col-6 col-md-auto">
                                <a href="/login" class="nav-link px-2 border-0 ms-lg-2 ms-md-2 ms-0"
                                    style="font-weight: 500;font-family:Verdana, Geneva, Tahoma, sans-serif">
                                    Login </a>
                            </li>
                        @endauth
                    </ul>
                </div>
            </div>




            {{-- <div class="collapse navbar-collapse float-end " id="navbarNav">
                <ul class="navbar-nav flex-row flex-wrap bd-navbar-nav pt-2
                    py-md-0">
                    <form action="/products" method="get" class="ms-2 d-flex mt-3 mb-3 px-5" role="search">
                        @csrf
                        <input class="form-control ms-3 me-2" style="width: 600px" type="search"
                            placeholder="Search" name="search">
                        <button class="btn btn-outline-secondary" type="submit"><i
                                class="fa fa-search"></i></button>
                    </form>
                </ul>

                <ul class="navbar-nav ms-auto flex-row flex-wrap">
                    @auth
                        <li class="nav-item col-4 col-md-auto">
                            @php
                                $checkout_main = \App\Models\Cart::where('users_id', auth()->user()->id)
                                    ->where('status', 'cart')
                                    ->first();
                                if (!empty($checkout_main)) {
                                    $notif = \App\Models\CartDetail::where('carts_id', $checkout_main->id)->count();
                                }
                            @endphp

                            <a href="/cart" class="nav-link"><i class="fa fa-shopping-cart me-2"
                                    style="font-size:22px;color:white"></i>
                                @if (!empty($notif))
                                    <span class="badge bg-danger me-2 pt-2">
                                        {{ $notif }}</span>
                                @endif
                            </a>


                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Welcome back, {{ auth()->user()->name }}
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                @can('admin')
                                    <li><a class="dropdown-item" href="/dashboard">
                                            <i class="fa fa-desktop" aria-hidden="true"></i>&nbsp; My Dashboard</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                @endcan
                                <li><a class="dropdown-item" href="/my-account">
                                        <i class="fa fa-id-card-o" aria-hidden="true"></i> &nbsp;My account</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="/history">
                                        <i class="fa fa-shopping-bag" aria-hidden="true"></i>&nbsp; My Order</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>

                                <li>
                                    <form action="/logout" method="post">
                                        @csrf
                                        <button type="submit" class="dropdown-item">
                                            <i class="fa fa-sign-out" aria-hidden="true"></i> Logout
                                        </button>
                                    </form>
                                </li>
                            </ul>

                        </li>
                    @else
                        <li class="nav-item col-4 col-md-auto">
                            <a href="/cart" class="nav-link"><i class="fa fa-shopping-cart me-2"
                                    style="font-size:22px;color:white"></i>

                            </a>

                            <div class="dropdown-menu">
                                <div class="row total-header-section">
                                    <div class="col-lg-6 col-sm-6 col-6">
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item col-6 col-md-auto">
                            <a href="/register" class="nav-link px-2"
                                style="font-weight: 500;font-family:Verdana, Geneva, Tahoma, sans-serif">
                                Register</a>
                        </li>


                        <li class="nav-item col-6 col-md-auto">
                            <a href="/login" class="nav-link px-2 border-0 ms-2"
                                style="font-weight: 500;font-family:Verdana, Geneva, Tahoma, sans-serif">
                                Login </a>
                        </li>
                    @endauth
                </ul>
            </div> --}}

        </div>
    </nav>


    @section('scripts')
        <script type="text/javascript">
            $(".update-cart").change(function(e) {
                e.preventDefault();

                var ele = $(this);

                $.ajax({
                    url: '{{ route('update.cart') }}',
                    method: "patch",
                    data: {
                        _token: '{{ csrf_token() }}',
                        id: ele.parents("tr").attr("data-id"),
                        quantity: ele.parents("tr").find(".quantity").val()
                    },
                    success: function(response) {
                        window.location.reload();
                    }
                });
            });

            $(".remove-from-cart").click(function(e) {
                e.preventDefault();

                var ele = $(this);

                if (confirm("Are you sure want to remove?")) {
                    $.ajax({
                        url: '{{ route('remove.from.cart') }}',
                        method: "DELETE",
                        data: {
                            _token: '{{ csrf_token() }}',
                            id: ele.parents("tr").attr("data-id")
                        },
                        success: function(response) {
                            window.location.reload();
                        }
                    });
                }
            });
        </script>
    @endsection
