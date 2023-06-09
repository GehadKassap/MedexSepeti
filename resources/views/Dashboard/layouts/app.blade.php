<!doctype html>
<html lang="en">
  <head>
  	<title>@yield('title')</title>
    <link rel="shortcut icon" href="{{ asset("assets/imgaes/fiv_icon.png") }}" type="image/x-icon">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="{{ asset("assets/css/bootstrap.css") }}">
		<link rel="stylesheet" href="{{ asset("assets/css/style.css") }}">
  </head>
  <body>
    <div class="wrapper d-flex align-items-stretch">
        @include('Dashboard.components.aside')
        <div id="content" class="p-4 p-md-5">
            @include('Dashboard.components.nav')
            @yield('content')
        </div>
    </div>

    <script src="{{ asset("assets/js/jquery.min.js") }}"></script>
    <script src="{{ asset("assets/js/popper.js") }}"></script>
    <script src="{{ asset("assets/js/bootstrap.min.js") }}"></script>
    <script src="{{ asset("assets/js/main.js") }}"></script>
  </body>
</html>
