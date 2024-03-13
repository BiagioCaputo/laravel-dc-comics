<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DC Comics | @yield('title')</title>
    <link rel="icon" href="{{asset('/images/favicon.ico')}}" >
    @vite('resources/js/app.js')
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
    {{--  Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
</head>
<body>
    {{-- Header --}}
    @include('includes.header')

    {{-- Main --}}
    @yield('main-content')


    {{-- Script --}}
    @yield('bonus')
    


    {{-- Footer --}}
    @include('includes.footer')


</body>
</html>
