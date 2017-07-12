<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
</head>
<body>
    <header>
        @include('layout.baseHeader')
    </header>
    @yield('content')
    <footer>
        @include('layout.baseFooter')
    </footer>
</body>
</html>