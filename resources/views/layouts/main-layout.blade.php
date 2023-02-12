<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>People</title>
    @yield('head')
</head>
<body>
    @include('components.errors')
    @include('components.header')
    @yield('content')
    @include('components.footer')
</body>
</html>