<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href={{asset("vendor/font-awesome/css/font-awesome.min.css")}}>
    <!-- Google fonts - Roboto-->
    <link rel="stylesheet" href={{asset("https://fonts.googleapis.com/css?family=Roboto:400,300,700,400italic")}}>
    <!-- owl carousel-->
    <link rel="stylesheet" href={{asset("vendor/owl.carousel/assets/owl.carousel.css")}}>
    <link rel="stylesheet" href={{asset("vendor/owl.carousel/assets/owl.theme.default.css")}}>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href={{asset("css/style.default.css")}} id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href={{asset("css/custom.css")}}>
    <!-- Favicon-->
    <link rel="shortcut icon" href={{asset("img/favicon.png")}}></head>
<body>

    <div class="test">
    </div>
    <div class="general">
    @include("components.nav")
        @yield('content')
    </div>
    <div class="footer">
        @include('components.footer')
    </div>
<script src={asset("vendor/jquery/jquery.min.js")}}></script>
<script src={{asset('js/main.js')}}></script>
<script src={asset("vendor/popper.js/umd/popper.min.js")}}> </script>
<script src={asset("vendor/bootstrap/js/bootstrap.min.js")}}></script>
<script src={asset("vendor/jquery.cookie/jquery.cookie.js")}}> </script>
<script src={asset("vendor/owl.carousel/owl.carousel.min.js")}}></script>
<script src={asset("vendor/masonry-layout/masonry.pkgd.min.js")}}></script>
<script src={asset("js/front.js")}}></script>
</body>
</html>
