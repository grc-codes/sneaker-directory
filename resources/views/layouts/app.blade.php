<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('includes.metatags')
</head>
<body>
    <div id="navigation">
        @include('includes.header')
    </div>
    @include('includes.side-menu')
    <div id="page-content">
        @yield('content')
        @include('includes.footer')
    </div>
    <script>
        var menu = document.getElementById('menu-container');
        var icon = document.getElementById('menu-toggle');
        icon.addEventListener("click", toggleMenu);
        function toggleMenu() {
            icon.classList.toggle('fa-bars');
            icon.classList.toggle('fa-window-close');
            menu.classList.toggle('active');
        }
    </script>
</body>
</html>