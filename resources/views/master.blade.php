<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
   @include('includes.style')
    <title>Toko Sederhana</title>
</head>
<body>
    @include('includes.navbar')
    @yield('content')

    @include('includes.script')
</body>
<style>
    .custom-login{
        padding-top: 80px;
    }
</style>
</html>
