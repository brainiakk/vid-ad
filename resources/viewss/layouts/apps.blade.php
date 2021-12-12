<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'Noble Game') }}</title>

  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}" defer></script>

  <title>@yield('title')</title>

  <!-- TYPOGRAPHY -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link
    href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&family=Roboto:wght@300;400;500;700;900&display=swap"
    rel="stylesheet">

  <!-- UNIVERSAL STYLESHEET -->
  <link rel="stylesheet" href="{{ asset('new/css/style.css') }}">

  <!-- BOOTSTRAP CSS -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js">
  </script>

  <link rel="stylesheet" href="{{ asset('new/css/storeNav.css') }}">
  <!-- Other CSS -->
  <link rel="stylesheet" href="{{ asset('new/css/circle.css') }}">
  <link rel="stylesheet" href="{{ asset('new/css/libraryNav.css') }}">
  @yield('css-files')
  <!-- FONT ICONS KIT -->
  <script src="https://kit.fontawesome.com/74d240b4ae.js" crossorigin="anonymous"></script>

  <style>
    .col {
      padding: 0px;
    }

    .black {
      color: black;
    }

    .show {
      background: none;
    }

    .modal-backdrop.show {
      opacity: 0.5;
    }

    .modal-backdrop {
      width: auto;
      height: auto;
    }

  </style>

</head>

<body onload="submit_button()">
  @include('inc.message_popup')
  <!-- Navigation -->
  @if (!isset($adminLogin))
    @include('inc.header')
  @endif
  <!-- End Navigation -->
  <div id="app">
    @if (!isset($adminLogin))
      <main class="py-4">
        @yield('content')
      </main>
    @else
      <main class="py-4 d-flex align-items-center justify-content-center" style="height:100vh">
        @yield('content')
      </main>
    @endif
  </div>
  @yield('js-files')
  @if (!isset($adminLogin))
    @include('inc.footer')
  @endif

</body>

</html>
