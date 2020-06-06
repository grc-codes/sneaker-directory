<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('includes.metatags')
</head>
<body>
    @include('includes.header')
    <div id="page-content">
        @yield('content')
        @include('includes.footer')
    </div>
    <script>
        var menu = document.getElementById('menu-container');
        var page = document.getElementById('page-content');
        var icon = document.getElementById('menu-toggle');
        icon.addEventListener("click", toggleMenu);
        function toggleMenu() {

            icon.classList.toggle('fa-bars');
            icon.classList.toggle('fa-window-close');
            if(menu.style.display === "none") {
                menu.style.display = "block";
                page.style.display = "none";
            } else {
                menu.style.display = "none";
                page.style.display = "block";
            }
        }
    </script>
</body>
</html>