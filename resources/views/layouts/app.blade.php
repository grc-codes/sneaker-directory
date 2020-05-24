<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('includes.metatags')
</head>
<body>
    @include('includes.header')
    @yield('content')
    @include('includes.footer')
</body>
</html>