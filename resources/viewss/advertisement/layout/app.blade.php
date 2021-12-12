<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ \Config::get('app.name') }} | @yield('title')</title>
    @include('advertisement.includes.links')
</head>
<body>
    @include('advertisement.includes.header')
    <div class="container-fluid my-5 py-5">
        @yield('content')
    </div>
    @include('advertisement.includes.footer')
</body>
@include('advertisement.includes.scripts')
</html>