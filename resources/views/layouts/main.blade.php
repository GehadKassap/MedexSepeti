<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Golos+Text&family=Mohave:wght@300&family=Roboto:wght@300&family=Tajawal:wght@500;800&family=Titillium+Web:ital,wght@0,200;1,200&display=swap" rel="stylesheet">
    <link rel="icon" href="{{ asset("assets/imgaes/fiv_icon.png") }}">
    <link rel="stylesheet" href="{{ asset("assets/css/owl.carousel.min.css") }}">
    <link rel="stylesheet" href="{{ asset("assets/css/owl.theme.default.css") }}">
    <link rel="stylesheet" href="{{ asset("assets/css/bootstrap.css") }}">
    <link rel="stylesheet" href="{{ asset("assets/css/main.css") }}">
    <title>@yield('title')</title>
</head>
<body>
    {{-- main navbar --}}
    <nav class="navbar navbar-expand-lg main-bg">
        <div class="container-fluid">
          <a class="navbar-brand" href="{{ url("/") }}">
            <img src="{{ asset("assets/imgaes/logo.svg") }}" alt="">
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active text-light" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link  text-light" href="#">Link</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Dropdown
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled">Disabled</a>
              </li>
            </ul>
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </div>
    </nav>
    {{-- categories navbar --}}
    <nav class="navbar navbar-expand-lg sec-bg">
        <div class="container-fluid">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav m-auto mb-2 mb-lg-0">
              @foreach (get_categories() as $category)
                <li class="nav-item hover-link">
                    <a class="nav-link active" href="{{ asset("/") }}">
                       <h6 class=" main-txt">{{ $category->name }} |</h6>
                    </a>
                </li>
              @endforeach
            </ul>
          </div>
        </div>
    </nav>

    @yield('content')

    <footer class="py-5 mt-5 main-bg">
         <p class="text-center text-light">© Copyright 2023 www.medexsepeti.com</p>
    </footer>

    <script src="{{ asset("assets/js/jquery.min.js") }}"></script>
    <script src="{{ asset("assets/js/owl.carousel.js") }}"></script>
    <script src="{{ asset("assets/js/bootstrap.js") }}"></script>
    <script src="{{ asset("assets/js/main.js") }}"></script>
    <script src="{{ asset("assets/js/script.js") }}"></script>
</body>
</html>
