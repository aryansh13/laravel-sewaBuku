<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sewa Buku</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}">
</head>
<body>
    @include('layout.header')
    @include('layout.navbar')
    @yield('content')

    <script src="{{ asset('js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('js/data_peminjamapp.js')}}"></script>
    <script src="js/jquery-3.7.0.min.js"></script>
</body>
</html>