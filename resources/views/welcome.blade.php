<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Barber</title>
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="css/spacing.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="50">
<div id="app">
    @include('navbar.navbar')
</div>
    @yield('content')

@include('parts.footer')

<script src="js/app.js"></script>
</body>
</html>

