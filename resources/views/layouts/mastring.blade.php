<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="/image/logo.png">
    <title>@yield('title')</title>
    {{-- bootstrap css and js files --}}
    @vite(['resources/sass/app.scss'])
    @vite(['resources/css/index.css', 'resources/js/app.js'])
</head>

<body>
    {{-- start Navbar --}}
    <x-header></x-header>
    {{-- end Navbar --}}
    {{-- start content --}}
    @yield('content')
    {{-- end content --}}
    {{-- start Footer --}}
    <x-Footer></x-Footer>
    {{-- end Footer --}}
</body>

</html>
