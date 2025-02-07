<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="{{ asset('img/favicon.webp') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('css/aos.css') }}">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href=" {{ asset('css/DataTable/jquery.dataTables.css') }} ">
    <script src="{{ mix('js/app.js') }}"></script>
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/DataTable/jquery.dataTables.js') }}"></script>

    <title>{{ $titulo }}</title>
</head>

<body>
    @auth
    @include('shared/Navbar')
    @endauth
    <div class="min-vh-100 d-flex flex-column justify-content-between">
        @yield('contenido')
    </div>
    @include('shared/Footer')
    @include('sweetalert::alert')
    <script src="{{ asset('js/main.js') }}"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
    <script src="{{ asset('js/mascaraDeCarga/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('js/mascaraDeCarga/jquery.blockUI.js') }}"></script>
    <script src="{{ asset('js/mascaraDeCarga/mascara.js') }}"></script>
    <script src="{{ asset('js/DataTable/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('js/aos.js') }}"></script>
</body>
</html>