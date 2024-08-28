<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>TASTY FOOD | PLACE FOOD </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>
<body class="overflow-x-hidden">
@if (request()->is('/'))
    <x-user.navbar></x-user.navbar>

    @yield('main')

    <x-user.footer></x-user.footer>
    
@elseif (request()->is('tentang','berita','galeri','kontak'))
    <x-user.navbar></x-user.navbar>
    <x-user.banner>
        @if (request()->is('tentang'))
            tentang
        @elseif(request()->is('berita'))
            berita
        @elseif(request()->is('galeri'))
            galeri
        @else
            kontak
        @endif
    </x-user.banner>

    @yield('main')
    <x-user.footer></x-user.footer>
@endif
</body>
</html>