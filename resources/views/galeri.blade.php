<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" rel="stylesheet"/>
</head>
<body>
    <x-navbar color="text-white"></x-navbar>
    <main class="bg-banner object-cover w-full h-96 bg-no-repeat bg-center -my-20 flex items-center px-28">
        <h1 class="text-white text-5xl font-extrabold">BERITA KAMI</h1>
    </main>

    <div class="min-h-screen w-full bg-slate-200 px-28 py-28">
        <div class="w-full relative">
            <div class="swiper fraction-slide-carousel swiper-container relative">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="bg-indigo-50 rounded-2xl h-96 flex justify-center items-center">
                            <img class="rounded-2xl object-cover bg-center w-full h-full" src="{{url('/images/food-galeri-2.jpg')}}" alt="">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="bg-indigo-50 rounded-2xl h-96 flex justify-center items-center">
                            <img class="rounded-2xl object-cover bg-center w-full h-full" src="{{url('/images/food-galeri-2.jpg')}}" alt="">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="bg-indigo-50 rounded-2xl h-96 flex justify-center items-center">
                            <img class="rounded-2xl object-cover bg-center w-full h-full" src="{{url('/images/food-galeri-2.jpg')}}" alt="">
                        </div>
                    </div>
                </div>
                <div class="flex items-center gap-8 lg:justify-start justify-center">
                    <button id="slider-button-left" class="swiper-button-prev group p-2 flex justify-center items-center border border-solid border-indigo-600 w-8 h-8 transition-all duration-500 rounded-full top-1/2 transform -translate-y-1/2 left-5 hover:bg-indigo-600" data-carousel-prev>
                        <svg class="h-4 w-4 text-indigo-600 group-hover:text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="none">
                            <path d="M10.0002 11.9999L6 7.99971L10.0025 3.99719" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </button>
                    <button id="slider-button-right" class="swiper-button-next group p-2 flex justify-center items-center border border-solid border-indigo-600 w-8 h-8 transition-all duration-500 rounded-full top-1/2 transform -translate-y-1/2 right-5 hover:bg-indigo-600" data-carousel-next>
                        <svg class="h-4 w-4 text-indigo-600 group-hover:text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="none">
                            <path d="M5.99984 4.00012L10 8.00029L5.99748 12.0028" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </button>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </div>

    <div class="max-h-screen w-full px-28 py-28">
        <div class="grid grid-cols-4 gap-5">
            <div class="w-full h-96">
                <img class="rounded-lg w-full h-full object-cover shadow-2xl" src="{{url('images/galeri-1.jpg')}}" alt="">
            </div>
            <div class="w-full h-96">
                <img class="rounded-lg w-full h-full object-cover shadow-2xl" src="{{url('images/galeri-2.jpg')}}" alt="">
            </div>
            <div class="w-full h-96">
                <img class="rounded-lg w-full h-full object-cover object-center shadow-2xl" src="{{url('images/galeri-3.jpg')}}" alt="">
            </div>
            <div class="w-full h-96">
                <img class="rounded-lg w-full h-full object-cover object-center shadow-2xl" src="{{url('images/galeri-4.jpg')}}" alt="">
            </div>
            <div class="w-full h-96">
                <img class="rounded-lg w-full h-full object-cover object-center shadow-2xl" src="{{url('images/galeri-4.jpg')}}" alt="">
            </div>
        </div>
    </div>
    <x-footer></x-footer>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper(".fraction-slide-carousel", {
            loop: true,
            fraction: true,
            navigation: {
                nextEl: ".fraction-slide-carousel .swiper-button-next",
                prevEl: ".fraction-slide-carousel .swiper-button-prev",
            },
            pagination: {
                el: '.fraction-slide-carousel .swiper-pagination',
                type: 'fraction',
                formatFractionCurrent: function(number) {
                    return number;
                }
            },
        });
    </script>
</body>
</html>
