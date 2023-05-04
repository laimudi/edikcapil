<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    @include('layouts-pengguna.style')
</head>
<body>

    @include('layouts-pengguna.header')

    <main class="id">
        @yield('content')
    </main>

    @include('layouts-pengguna.footer')

    @include('layouts-pengguna.script')
    
</body>
</html>