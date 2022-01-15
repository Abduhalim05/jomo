<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>@yield('title')</title>

   <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
   <link rel="stylesheet" href="{{asset('css/dashboard.css')}}">
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

  </head>
  <body>
<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">Company name</a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
  <div class="navbar-nav">
    <div class="nav-item text-nowrap">
      <a class="nav-link px-3" href="#">Log out</a>
    </div>
  </div>
</header>

<div class="container-fluid">
  <div class="row">
{{-- navbar --}}

<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/Project2_natone/backend/">
            <span data-feather="home"></span>
            Home
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/Project2_natone/admin/sliders/create.php">
            <span data-feather="file"></span>
            Sliders
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/Project2_natone/admin/about/table.php">
            <span data-feather="file"></span>
            About
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/Project2_natone/admin/courses/table.php">
            <span data-feather="file"></span>
            Courses
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/Project2_natone/admin/teachers/table.php">
            <span data-feather="file"></span>
            Teachers
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="/Project2_natone/admin/comments/table.php">
            <span data-feather="users"></span>
            Comments
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/Project2_natone/admin/contact/table.php">
            <span data-feather="file"></span>
           Contacts
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="/Project2_natone/admin/footer-info/TitleTable.php">
            <span data-feather="file"></span>
           Infos
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="/Project2_natone/admin/footer-info/subscribe.php">
            <span data-feather="users"></span>
           Subscribes
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="/Project2_natone/admin/change/settings.php">

            <span data-feather=""></span>
            Settings
          </a>
        </li>
      </ul>
    </div>
  </nav>


{{-- end navbar --}}


<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <h2>Section title</h2>
        <div class="table-responsive">
          <table class="table table-striped table-sm">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Header</th>
                <th scope="col">Header</th>
                <th scope="col">Header</th>
                <th scope="col">Header</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1,001</td>
                <td>random</td>
                <td>data</td>
                <td>placeholder</td>
                <td>text</td>
              </tr>

            </tbody>
          </table>
        </div>

    </main>
  </div>
</div>

</main>
</div>
</div>

<script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script>
  <script src="{{asset('js/dashboard.js')}}"></script>
  </body>
</html>
