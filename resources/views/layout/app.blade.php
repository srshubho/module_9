<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link
        href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&amp;subset=devanagari,latin-ext"
        rel="stylesheet">

    @yield('title')

    <link rel="shortcut icon" type="image/icon" href="{{ asset('assets/kogo') }}/favicon.png" />

    <link rel="stylesheet" href="{{ asset('assets/css') }}/font-awesome.min.css">

    <link rel="stylesheet" href="{{ asset('assets/css') }}/flaticon.css">

    <link rel="stylesheet" href="{{ asset('assets/css') }}/animate.css">

    <link rel="stylesheet" href="{{ asset('assets/css') }}/owl.carousel.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css') }}/owl.theme.default.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css') }}/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css') }}/bootsnav.css">

    <link rel="stylesheet" href="{{ asset('assets/css') }}/style.css">

    <link rel="stylesheet" href="{{ asset('assets/css') }}/responsive.css">


</head>

<body>

    @include('components.header')
    @yield('content')
    @include('components.footer')
    <script src="{{ asset('assets/js') }}/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
    <script src="{{ asset('assets/js') }}/bootstrap.min.js"></script>
    <script src="{{ asset('assets/js') }}/bootsnav.js"></script>
    <script src="{{ asset('assets/js') }}/jquery.sticky.js"></script>
    <script src="{{ asset('assets/js') }}/progressbar.js"></script>
    <script src="{{ asset('assets/js') }}/jquery.appear.js"></script>
    <script src="{{ asset('assets/js') }}/owl.carousel.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="{{ asset('assets/js') }}/custom.js"></script>

</body>

</html>
