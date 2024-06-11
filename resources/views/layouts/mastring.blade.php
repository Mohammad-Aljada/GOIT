<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="discription"
        content = "GOIT It is a company that provides IT services solutions including software and hardware">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="/image/logo.png">
    <title>{{ config('app.name', 'GOIT') }}</title>
    {{-- bootstrap css and js files --}}
    @vite(['resources/sass/app.scss'])

    @vite(['resources/css/app.css ,  resources/js/app.js'])
    @vite(['resources/css/custom.css'])


</head>

<body>
    {{-- start Navbar --}}
    <x-layout.header></x-layout.header>
    {{-- end Navbar --}}
    {{-- start content --}}
    @yield('content')
    {{-- end content --}}
    {{-- start Footer --}}
    <x-layout.Footer></x-layout.Footer>
    {{-- end Footer --}}


</body>

</html>
