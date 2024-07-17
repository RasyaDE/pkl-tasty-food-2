<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Document</title>
</head>
<body>
    <x-navbar></x-navbar>
    <main class="bg-banner object-cover w-full h-96 bg-no-repeat bg-center -my-20 flex items-center px-28">
        <h1 class="text-white text-5xl font-extrabold">BERITA KAMI</h1>
    </main>

    <div class="px-28">
        <img class="rounded-lg" src="{{ url("images/food-galeri-2.jpg")}}" alt="">
    </div>

    <main class="h-full lg:px-28 lg:py-8  w-full">
        <div class="grid grid-cols-4 gap-4">
            <div class="bg-white h-96 rounded-xl shadow-2xl overflow-hidden">
            </div>
            <div class="bg-white h-96 rounded-xl shadow-2xl overflow-hidden">
            </div>
            <div class="bg-white h-96 rounded-xl shadow-2xl overflow-hidden">
            </div>
            <div class="bg-white h-96 rounded-xl shadow-2xl overflow-hidden">
            </div>
            <div class="bg-white h-96 rounded-xl shadow-2xl overflow-hidden">
            </div>
            <div class="bg-white h-96 rounded-xl shadow-2xl overflow-hidden">
            </div>
            <div class="bg-white h-96 rounded-xl shadow-2xl overflow-hidden">
            </div>
            <div class="bg-white h-96 rounded-xl shadow-2xl overflow-hidden">
            </div>
            <div class="bg-white h-96 rounded-xl shadow-2xl overflow-hidden">
            </div>
            <div class="bg-white h-96 rounded-xl shadow-2xl overflow-hidden">
            </div>
            <div class="bg-white h-96 rounded-xl shadow-2xl overflow-hidden">
            </div>
            <div class="bg-white h-96 rounded-xl shadow-2xl overflow-hidden">
            </div>
        </div>
    </main>
    <x-footer></x-footer>
</body>
</html>