<!DOCTYPE html>
<html lang="en">
<head>
    @include('head')
</head>

<body > 
    @include('header')
    @include('cart')

    @yield('contents')

    @include('footer')
</body>
</html>
