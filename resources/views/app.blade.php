<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <link rel="icon" type="image/png" sizes="96x96" href="favicon.png">
    {{-- <meta name="viewport" content="width=device-width, initial-scale=1"> --}}
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta content="width=device-width, user-scalable=no, intial-scale=1">
    <!-- , initial-scale=1.0, maximum-scale=1.5, user-scalable=1, shrink-to-fit=no -->
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Vue Laravel SPA') }}</title>

    <!-- Styles -->
    {{-- <link href="{{ mix('/css/app.css') }}" rel="stylesheet"> --}}
    <link href="{{ mix('/scss/now-ui-kit.css') }}" rel="stylesheet">
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    {{-- <link href="{{ mix('/js/assets/scss/now-ui-kit.scss') }}" rel="stylesheet"> --}}
</head>
<body class="sidebar-collapse">
    <noscript>
        <strong>We're sorry but vue-now-ui-kit doesn't work properly without JavaScript enabled. Please enable it to continue.</strong>
    </noscript>
    <div id="app">
    </div>
    <!-- Scripts -->
    <script src="{{ mix('/js/app.js') }}" defer></script>
</body>
</html>
