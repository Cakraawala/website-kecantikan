<header class="navbar navbar-dark fixed-top bg-dark
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
            <button type="submit" class="nav-link mt-1 px-4 bg-dark border-0">
                 Logout
            </button>
        </form>

        </div>
        </div>
</header>

  <div class="container-fluid">
    <div class="row">
      <nav id="sidebarMenu" class="sidebarMenu col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
        <div class="position-sticky pt-3">
          <ul class="nav flex-column">


            <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                <span>Reports</span>
                <a class="link-secondary" href="#" aria-label="Add a new report">
                    {{-- <i class="fa fa-user-circle-o" aria-hidden="true"></i> --}}
                </a>
              </h6>
            <li class="ms-1 nav-item">
                <a href="/dashboard" class="nav-link {{ Request::is('dashboard') ? 'active' : ''}}" aria-current="page">
                <i class="fa fa-home" aria-hidden="true"></i>
                Dashboard
              </a>
            </li>
            <li class="ms-1 nav-item">
                <a href="/dashboard/history-barang-status" class="nav-link {{ Request::is('dashboard/history-barang-status*') ? 'active' : ''}}" aria-current="page">
                    <i class="fa fa-file-text-o" aria-hidden="true"></i>
                     Status Barang
              </a>
            </li>
            <li class="ms-1 nav-item">
                <a href="/dashboard/reports" class="nav-link {{ Request::is('dashboard/reports*') ? 'active' : ''}}" aria-current="page">
                    <i class="fa fa-file-text-o" aria-hidden="true"></i>
                     Income Reports
              </a>
            </li>

            <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                <span>Product and User</span>
                <a class="link-secondary" href="#" aria-label="Add a new report">
                    {{-- <i class="fa fa-user-circle-o" aria-hidden="true"></i> --}}
                </a>
              </h6>

            <li class="ms-1 nav-item">
              <a class="nav-link {{ Request::is('dashboard/user*') ? 'active' : '' }}" aria-current="page" href="/dashboard/user">
                <i class="fa fa-user-circle-o" aria-hidden="true"></i>
                Customers
            </a>
        </li>
        <li class="ms-1 nav-item">
            <a class="nav-link {{ Request::is('dashboard/product*') ? 'active' : '' }}" aria-current="page" href="/dashboard/product">
                <i class="fa fa-shopping-bag" aria-hidden="true"></i>
             Product
          </a>
        </li>
              <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                  <span>Other Data</span>
                  <a class="link-secondary" href="#" aria-label="Add a new report">
                    <span data-feather="plus-circle"></span>
                  </a>
                </h6>
            <li class="ms-1 nav-item">
              <a class="nav-link {{ Request::is('dashboard/categoryproduct*') ? 'active' : '' }}" aria-current="page" href="/dashboard/categoryproduct">
                <i class="fa fa-hashtag" aria-hidden="true"></i>
                Category product
              </a>
            </li>

            <li class="ms-1 nav-item">
              <a class="nav-link {{ Request::is('dashboard/payment*') ? 'active' : '' }}" aria-current="page" href="/dashboard/payment">
                <i class="fa fa-credit-card" aria-hidden="true"></i>
                Payment
              </a>
            </li>

            <li class="ms-1 nav-item">
              <a class="nav-link {{ Request::is('dashboard/delivery*') ? 'active' : '' }}" aria-current="page" href="/dashboard/delivery">
                <i class="fa fa-truck" aria-hidden="true"></i>
                Delivery
              </a>
            </li>

              <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                  <span>Checkout</span>
                  <a class="link-secondary" href="#" aria-label="Add a new report">
                    <span data-feather="plus-circle"></span>
                  </a>
                </h6>
            <li class="ms-1 nav-item">
              <a class="nav-link {{ Request::is('dashboard/c-Pending*') ? 'active' : '' }} " aria-current="page" href="/dashboard/c-Pending">
                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                Data Checkout (Pending)
              </a>
            </li>
            <li class="ms-1 nav-item">
              <a class="nav-link {{ Request::is('dashboard/c-Success*') ? 'active' : '' }}" aria-current="page" href="/dashboard/c-Success">
                <i class="fa fa-paper-plane-o" aria-hidden="true"></i>
                Data Checkout (Success)
              </a>
            </li>


        </div>
      </nav>
