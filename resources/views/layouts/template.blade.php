<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    @vite(['resources/css/app.scss','resources/js/app.js'])
    <!-- Favicon -->
    <script src="https://kit.fontawesome.com/faea69061d.js" crossorigin="anonymous"></script>
    <!-- estilos -->
</head>
<body>
    <!-- header -->
    @auth
        @include('layouts.partials.header')
    @endauth

    <!-- nav -->


    @yield('content')
    <!-- footer -->
    @include('layouts.partials.footer')
    <!-- script -->
</body>
</html>
