
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link
      rel="preconnect"
      href="https://fonts.gstatic.com"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="{{asset('boostrap.min.css')}}">
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&amp;display=swap"
      rel="stylesheet"
    />
    <link rel="shortcut icon" type="image/png" href="" />
    <!--build:css assets/css/styles.min.css-->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/slick.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap-drawer.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/icons/style.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/animate-4.1.1.min.css')}}" />
    <!--endbuild-->
  </head>
  <body>
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="">Uji Level</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('product')}}">Produk Saya</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('data_produk')}}">Data Produk</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('category')}}">Kategori</a>
        </li>
      </ul>
    </div>
  </div>
</nav>


@yield('content')
    <!--build:js assets/js/main.min.js-->
    <script src="{{asset('assets/js/jquery-3.7.0.js')}}"></script>
    <script src="{{asset('assets/js/jquery-migrate-3.4.1.js')}}"></script>
    <script src="{{asset('assets/js/slick.min.js')}}"></script>
    <script src="{{asset('assets/js/waypoints.min.js')}}"></script>
    <script src="{{asset('assets/js/countUp.min.js')}}"></script>
    <script src="{{asset('assets/js/phosphor-icon.js')}}"></script>
    <script src="{{asset('assets/js/scrollreveal-4.0.0.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap-drawer.min.js')}}"></script>
    <script src="{{asset('assets/js/drawer.min.js')}}"></script>
    <script src="{{asset('assets/js/main.min.js')}}"></script>
    <!--endbuild-->
  </body>
</html>
