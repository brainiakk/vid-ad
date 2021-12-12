<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Noble Game') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('new/js/app.js') }}" defer></script>

    <title>@yield('title')</title>

    <!-- TYPOGRAPHY -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&family=Roboto:wght@300;400;500;700;900&display=swap"
        rel="stylesheet">

    <!-- UNIVERSAL STYLESHEET -->
    <link rel="stylesheet" href="{{asset('new/css/style.css')}}">

    <!-- BOOTSTRAP CSS -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('new/css/storeNav.css')}}">
    <!-- Other CSS -->
    <link rel="stylesheet" href="{{asset('new/css/circle.css')}}">
    <link rel="stylesheet" href="{{asset('new/css/libraryNav.css')}}">
@yield('css-files')
<!-- FONT ICONS KIT -->
    <script src="https://kit.fontawesome.com/74d240b4ae.js" crossorigin="anonymous"></script>

    <style>
        .col
        {
            padding: 0px;
        }
    </style>

</head>
<body onload="submit_button()">
@include('inc.message_popup')
@yield('add-user')
<section class="admin">
    <div class="row">
        <!-- Navigation -->
         @include('inc.dashboardHeader')
        <!-- End Navigation -->
        @yield('content')
    </div>
</section>
</body>
</html>
