<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Dizmed</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="Add_Description_Text">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" href="{{ asset('img/logo-150x150.png') }}" sizes="150x150" />
    <link rel="icon" href="{{ asset('img/logo-300x300.png') }}" sizes="300x300" />
    <link rel="apple-touch-icon" href="{{ asset('img/logo-300x300.png') }}" />
    <meta name="msapplication-TileImage" content="{{ asset('img/logo-300x300.png') }}" />

    <link rel="stylesheet" href="{{ asset('guest/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('guest/css/font-cerebrisans.css') }}">
    <link rel="stylesheet" href="{{ asset('guest/css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('guest/css/font-medizin.css') }}">
    <link rel="stylesheet" href="{{ asset('guest/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('guest/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('guest/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('guest/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('guest/css/jquery-ui.css') }}">
    <link rel="stylesheet" href="{{ asset('guest/css/style.css') }}">
</head>

<body>
    <div class="main-wrapper">
        <x-guest.header />

        {{ $slot }}

        <x-guest.footer />
        <x-guest.search />
    </div>
    <x-guest.mobile-header />

    <script src="{{ asset('guest/js/modernizr-3.6.0.min.js') }}"></script>
    <script src="{{ asset('guest/js/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ asset('guest/js/jquery-migrate-3.3.0.min.js') }}"></script>
    <script src="{{ asset('guest/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('guest/js/slick.js') }}"></script>
    <script src="{{ asset('guest/js/jquery.syotimer.min.js') }}"></script>
    <script src="{{ asset('guest/js/wow.js') }}"></script>
    <script src="{{ asset('guest/js/svg-inject.min.js') }}"></script>
    <script src="{{ asset('guest/js/jquery-ui.js') }}"></script>
    <script src="{{ asset('guest/js/jquery-ui-touch-punch.js') }}"></script>
    <script src="{{ asset('guest/js/magnific-popup.js') }}"></script>
    <script src="{{ asset('guest/js/select2.min.js') }}"></script>
    <script src="{{ asset('guest/js/clipboard.js') }}"></script>
    <script src="{{ asset('guest/js/vivus.js') }}"></script>
    <script src="{{ asset('guest/js/waypoints.js') }}"></script>
    <script src="{{ asset('guest/js/counterup.js') }}"></script>
    <script src="{{ asset('guest/js/mouse-parallax.js') }}"></script>
    <script src="{{ asset('guest/js/images-loaded.js') }}"></script>
    <script src="{{ asset('guest/js/isotope.js') }}"></script>
    <script src="{{ asset('guest/js/scrollup.js') }}"></script>
    <script src="{{ asset('guest/js/ajax-mail.js') }}"></script>
    <script src="{{ asset('guest/js/main.js') }}"></script>
</body>

</html>
