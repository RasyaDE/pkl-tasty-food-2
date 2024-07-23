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
    <x-navbar color="text-white"></x-navbar>
    <main class="bg-banner object-cover w-full h-96 bg-no-repeat bg-center -my-20 flex items-center px-28">
        <h1 class="text-white text-5xl font-extrabold">BERITA KAMI</h1>
    </main>

    <div class="w-full h-screen bg-slate-200 px-28 flex justify-evenly items-center">
        <div class="w-3/6 h-[45rem] mr-20">
            <img class="w-full h-full object-cover bg-center rounded-lg" src="{{url('/images/food-galeri-3.jpg')}}" alt="">
        </div>
        <div class="w-3/6">
            <h1 class="font-semibold text-3xl tracking-wider uppercase">Apa saja makanan khas nusantara?</h1>
            <p class="py-9">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate corrupti doloremque enim aliquid eius fuga magni, eum hic assumenda nulla sunt deleniti optio vitae! Suscipit vero nostrum iste fugit reprehenderit similique sapiente recusandae unde velit debitis voluptatem illo obcaecati sit, eligendi adipisci. Delectus sapiente laborum sunt ducimus tenetur aperiam maiores.</p>
            <p class="pb-9">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate corrupti doloremque enim aliquid eius fuga magni, eum hic assumenda nulla sunt deleniti optio vitae! Suscipit vero nostrum iste fugit reprehenderit similique sapiente recusandae unde velit debitis voluptatem illo obcaecati sit, eligendi adipisci. Delectus sapiente laborum sunt ducimus tenetur aperiam maiores.</p>
            <button class="w-1/2 py-5 bg-black text-white uppercase tracking-wide rounded-sm">baca selengkapnya</button>
        </div>
    </div>

    <main class="h-full lg:px-28 lg:py-8  w-full">
        <h1 class="text-3xl font-semibold py-8">BERITA LAINNYA</h1>
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
        </div>
        <div class="flex items-center justify-center my-14">
            <div class="w-3/12">
                <button class="py-4 w-full uppercase bg-black text-white font-semibold rounded-sm">lihat lebih banyak</button>
            </div>
        </div>
    </main>
    <x-footer></x-footer>
</body>
</html>