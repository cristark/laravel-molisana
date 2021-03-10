<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Molisana Laravel Test')</title>
</head>
<body>
    {{-- HEADER --}}
    @include('partials.header')
    {{-- MAIN --}}
    <main>@yield('content')</main>
    {{-- FOOTER --}}
    @include('partials.footer')
</body>
</html>