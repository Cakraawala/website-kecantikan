<header class="navbar navbar-dark sticky-top bg-dark
        flex-md-nowrap p-0 shadow">

    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3"
        href="/">Cakra</a>

  <button class="navbar-toggler position-absolute d-md-none collapsed"
        type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu"
        aria-controls="sidebarMenu" aria-expanded="false"
        aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <input class="form-control form-control-dark w-100" type="text" 
    placeholder="">
        <div class="navbar-nav">
        <div class="nav-item text-nowrap">

        <form action="/logout" method="post">
            @csrf
            <button type="submit" class="nav-link px-3 bg-dark border-0">
                 Logout
            </button>
        </form>

        </div>
        </div>
</header>

  <div class="container-fluid">
    <div class="row">
      <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
        <div class="position-sticky pt-3">
          <ul class="nav flex-column">

              <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                  <span>Saved Reports</span>
                  <a class="link-secondary" href="#" aria-label="Add a new report">
                    <span data-feather="plus-circle"></span>
                  </a>
                </h6>
            <li class="ms-1 nav-item">
              <a class="nav-link" aria-current="page" href="/dashboard">
                <span data-feather="home"></span>
                Dashboard
              </a>
            </li>
           <!--  <li class="ms-1 nav-item">
              <a class="nav-link" aria-current="page" href="/dashboard/admin">
                <span data-feather="home"></span>
                Data Admin
              </a>
            </li> -->
            <li class="ms-1 nav-item">
              <a class="nav-link" aria-current="page" href="/dashboard/user">
                <span data-feather="home"></span>
                Data User
              </a>
            </li>


              <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                  <span>Category & Products stock</span>
                  <a class="link-secondary" href="#" aria-label="Add a new report">
                    <span data-feather="plus-circle"></span>
                  </a>
                </h6>
            <li class="ms-1 nav-item">
              <a class="nav-link" aria-current="page" href="/dashboard/categoryproduct">
                <span data-feather="home"></span>
                Data Category
              </a>
            </li>
            <li class="ms-1 nav-item">
              <a class="nav-link" aria-current="page" href="/dashboard/product">
                <span data-feather="home"></span>
                Data Product
              </a>
            </li>


              <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                  <span>Payments</span>
                  <a class="link-secondary" href="#" aria-label="Add a new report">
                    <span data-feather="plus-circle"></span>
                  </a>
                </h6>
            <li class="ms-1 nav-item">
              <a class="nav-link" aria-current="page" href="/dashboard/payment">
                <span data-feather="home"></span>
                Data Payment
              </a>
            </li>

              <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                  <span>Delivery</span>
                  <a class="link-secondary" href="#" aria-label="Add a new report">
                    <span data-feather="plus-circle"></span>
                  </a>
                </h6>
            <li class="ms-1 nav-item">
              <a class="nav-link" aria-current="page" href="/dashboard/delivery">
                <span data-feather="home"></span>
                Data Delivery
              </a>
            </li>

              <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                  <span>Checkout</span>
                  <a class="link-secondary" href="#" aria-label="Add a new report">
                    <span data-feather="plus-circle"></span>
                  </a>
                </h6>
            <li class="ms-1 nav-item">
              <a class="nav-link" aria-current="page" href="/dashboard/delivery">
                <span data-feather="home"></span>
                Data Checkout (Pending)
              </a>
            </li>
            <li class="ms-1 nav-item">
              <a class="nav-link" aria-current="page" href="/dashboard/delivery">
                <span data-feather="home"></span>
                Data Checkout (Barang Dikirim)
              </a>
            </li>
            <li class="ms-1 nav-item">
              <a class="nav-link" aria-current="page" href="/dashboard/delivery">
                <span data-feather="home"></span>
                Data Checkout (Barang Success Diterima)
              </a>
            </li>


        </div>
      </nav>
