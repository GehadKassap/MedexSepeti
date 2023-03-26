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
    <link rel="stylesheet" href="{{ asset("assets/css/all.min.css") }}">
    <link rel="stylesheet" href="{{ asset("assets/css/owl.carousel.min.css") }}">
    <link rel="stylesheet" href="{{ asset("assets/css/owl.theme.default.css") }}">
    <link rel="stylesheet" href="{{ asset("assets/css/bootstrap.css") }}">
    <link rel="stylesheet" href="{{ asset("assets/css/bootstrap.css") }}">
    <link rel="stylesheet" href="{{ asset("assets/css/main.css") }}">
    <title>@yield('title')</title>
</head>
<body>
    {{-- main navbar --}}
    <nav class="navbar navbar-expand-lg main-bg">
        <div class="container">
            <div class="logo">
              <img src="{{ asset("assets/imgaes/logo.svg") }}" alt="medexsepeti">
            </div>
            <div class="search navbar-search">
                <form class="d-none d-sm-inline-block form-inline mr-auto my-2 my-md-0 mw-100 navbar-search" method="get" action="">
                    @csrf
                    <div class="input-group">
                        <input type="text" class="form-control bg-white border-0 small
                        rounded-0" name="searchProduct" placeholder="search for a product" aria-label="Search" aria-describedby="basic-addon2" />
                        <div class="input-group-append search-bg">
                            <button class="btn bg-white rounded-0 search-bg" type="submit">
                                <i class="fas fa-search fa-sm"></i>
                            </button>
                        </div>
                    </div>
                </form>


            </div>
            <div class="links">
              <ul>
                <li>
                    <a href="#" class="">
                        <i class="fas fa-user ms-2"></i>
                        <p>profile</p>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fas fa-heart ms-3"></i>
                        <p>Favourite</p>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fas fa-shopping-cart ms-3"></i>
                        <p>My Cart</p>
                    </a>
                </li>
              </ul>
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
