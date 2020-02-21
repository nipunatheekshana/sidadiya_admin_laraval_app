<!DOCTYPE html>
<html lang="en" style="background-color:#f8f8f8;">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- UIkit CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.3.1/dist/css/uikit.min.css" />
    <!-- All right reserved Sidadiya.lk | Designed by Nisal Keerthisinghe -->
    {{-- Fontawesome --}}
    <script type="text/javascript">
        (function() { var css = document.createElement('link'); 
        css.href = 'https://use.fontawesome.com/releases/v5.11.0/css/all.css';
        css.rel = 'stylesheet';
        css.type = 'text/css';
        document.getElementsByTagName('head')[0].appendChild(css);
    })(); 
    </script>

{{-- Custom style --}}
<link rel="stylesheet" href="{{url('css/navbar.css')}}">

    {{-- iziToast --}}
    <link rel="stylesheet" href="{{url('css\iziToast.min.css')}}">

    {{-- jQuery --}}
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>


    <title>Sidadiya Admin</title>
</head>
<style>
    footer {
        position: fixed;
        left: 0;
        bottom: 0;
        width: 100%;
        background-color: red;
        color: white;
        text-align: center;
    }
</style>
<body>
  
    {{-- Top nvabar --}}
    @include('includes.admin_navbarD')

    {{-- Login --}}
    @yield('login')

    {{-- Main panel --}}
    @yield('panel')

    {{-- Wall --}}
    @yield('adminwall')

    {{-- Notification --}}
    @yield('notification')

    {{-- Withdrawal --}}
    @yield('withdrawal')

    {{-- Users --}}
    @yield('users')

    {{-- Packages --}}
    @yield('packages')

    <footer>
        <div class="uk-card uk-card-default uk-card-body uk-card-small uk-text-center">
            <span> &copy; Copyright. Sidadiya Team</span>
        </div>
    </footer>

    <!-- UIkit JS -->
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.3.1/dist/js/uikit.min.js"></script>

    {{-- iziToast --}}
    <script src="{{url('js\iziToast.min.js')}}"></script>

    {{-- Chrt js --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>
</body>

</html>