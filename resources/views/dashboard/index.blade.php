<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Dashboard Template · Bootstrap v5.1</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/dashboard/">



    <!-- Bootstrap core CSS -->
<link href="/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>


    <!-- Custom styles for this template -->
    <link href="/dashboardd/dashboard.css" rel="stylesheet">
  </head>
  <body>

<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="/">Cakra</a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
  <div class="navbar-nav">
    <div class="nav-item text-nowrap">
      <a class="nav-link px-3" href="#">Sign out</a>
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
            <a class="nav-link active" aria-current="page" href="#">
              <span data-feather="home"></span>
              Dashboard
            </a>
          </li>
          <li class="ms-1 nav-item">
            <a class="nav-link active" aria-current="page" href="#">
              <span data-feather="home"></span>
              Data Admin
            </a>
          </li>
          <li class="ms-1 nav-item">
            <a class="nav-link active" aria-current="page" href="#">
              <span data-feather="home"></span>
              Data User
            </a>
          </li>


            <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                <span>Saved Reports</span>
                <a class="link-secondary" href="#" aria-label="Add a new report">
                  <span data-feather="plus-circle"></span>
                </a>
              </h6>
          <li class="ms-1 nav-item">
            <a class="nav-link active" aria-current="page" href="#">
              <span data-feather="home"></span>
              Dashboard
            </a>
          </li>
          <li class="ms-1 nav-item">
            <a class="nav-link active" aria-current="page" href="#">
              <span data-feather="home"></span>
              Data Admin
            </a>
          </li>
          <li class="ms-1 nav-item">
            <a class="nav-link active" aria-current="page" href="#">
              <span data-feather="home"></span>
              Data User
            </a>
          </li>

          <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                <span>Saved Reports</span>
                <a class="link-secondary" href="#" aria-label="Add a new report">
                  <span data-feather="plus-circle"></span>
                </a>
              </h6>
          <li class="ms-1 nav-item">
            <a class="nav-link active" aria-current="page" href="#">
              <span data-feather="home"></span>
              Dashboard
            </a>
          </li>
          <li class="ms-1 nav-item">
            <a class="nav-link active" aria-current="page" href="#">
              <span data-feather="home"></span>
              Data Admin
            </a>
          </li>
          <li class="ms-1 nav-item">
            <a class="nav-link active" aria-current="page" href="#">
              <span data-feather="home"></span>
              Data User
            </a>
          </li>

        </ul>
      </div>
    </nav>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Dashboard</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group me-2">
            <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
            <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
          </div>
          <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
            <span data-feather="calendar"></span>
            This week
          </button>
        </div>
      </div>
      <h2>User</h2>
            <div class="table-responsive">
                <table class="table table-striped table-sm">
                  <thead>
                    <tr>
                      <th scope="col">Id</th>
                      <th scope="col">Name</th>
                      <th scope="col">Username</th>
                      <th scope="col">Email</th>
                      <th scope="col">Nomer</th>
                      <th scope="col">Tanggal lahir</th>
                      <th scope="col">Jenis Kelamin</th>
                      <th scope="col">Province</th>
                      <th scope="col">Regency</th>
                      <th scope="col">District</th>
                      <th scope="col">Code Pos</th>
                      <th scope="col">Address</th>
                      <th scope="col">Info</th>
                    </tr>
                  </thead>
                  <tbody>
                      @foreach ($users as $user)
                      <tr>
                        <td> {{ $loop->iteration }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->username }}</td>
                        <td> {{ $user->email }}</td>
                        <td>{{ $user->no_wa }}</td>
                        <td>{{ $user->tgl_lhr }}</td>
                        <td> {{ $user->jk }}</td>
                        <td>{{ $user->province->name }}</td>
                        <td>{{ $user->regency->name }}</td>
                        <td> {{ $user->district->name }}</td>
                        <td>{{ $user->code_pos }}</td>
                        <td>{{ $user->address }}</td>

                        <td>
                            <a href="" class="badge bg-secondary">
                                <span data-feather="eye"></span>
                            </a>

                            <a href="" class="badge bg-warning">
                                <span data-feather="edit-2"></span>
                            </a>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                </table>
              </div>
    </main>
  </div>
</div>


    <script src="/js/bootstrap.bundle.min.js"></script>

      <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="dashboard.js"></script>
  </body>
</html>
