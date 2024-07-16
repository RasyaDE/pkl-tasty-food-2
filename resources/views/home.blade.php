<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>

<body class="overflow-x-hidden">
    <x-navbar></x-navbar>

    <main class="flex items-center justify-between lg:px-28 h-96 my-28 ">
        <div class="w-1/2">
            <div class="items-center">
                <hr class="w-3/12 border-t-4 border-black mb-6">
                <h1 class="text-6xl">HEALTY</h1>
                <h1 class="text-7xl font-extrabold my-3">TASTY FOOD</h1>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nobis soluta fugit repellendus odio eveniet dolorum nihil adipisci, amet magnam sequi quam vel temporibus praesentium nemo inventore, blanditiis, eum architecto? Praesentium eaque earum dolorem aliquam nam!</p>
            </div>
            <div class="w-1/2 mt-4">
                <button class="w-full bg-black text-white uppercase py-3 px-5 rounded-sm font-bold">Tentang kami</button>
            </div>
        </div>
        <div class="w-1/2 -mx-72 -mt-96">
            <img src="{{url('/images/ilustration.png')}}" alt="Image" />
        </div>
    </main>

    <main class="flex items-start h-full bg-slate-200 justify-center">
        <div class="my-28 w-1/2 inline-block text-center">
            <h1 class="uppercase text-3xl font-semibold">Tentang Kami</h1>
            <p class="my-8">Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis tenetur veniam ut, dolorum distinctio quis repellat molestias quos officia reiciendis. Necessitatibus hic nihil, fugit alias nisi debitis impedit deserunt ab iure voluptatibus officia omnis ea.</p>
            <div class="flex justify-center">
                <hr class="w-3/12 border-t-4 border-black mb-10">
            </div>
        </div>
    </main>

    <main class="bg-banner mb-8 object-cover bg-center w-full bg-no-repeat h-screen place-content-center ">
        <div class="grid lg:grid-cols-4 md:grid-cols-1 gap-3 px-12 h-96">
            <div class="bg-white rounded-lg flex flex-col items-center">
                <div class="-my-28">
                    <img class="h-60" src="{{url('/images/food-1.png')}}" alt="">
                </div>
                <div class="my-28 text-center">
                    <h1 class="font-bold text-4xl">LOREM</h1>
                    <p class="text-xl mt-6">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Suscipit, delectus! Architecto, aliquam eos.</p>
                </div>
            </div>
            <div class="bg-white rounded-lg flex flex-col items-center">
                <div class="-my-28">
                    <img class="h-60" src="{{url('/images/food-2.png')}}" alt="">
                </div>
                <div class="my-28 text-center">
                    <h1 class="font-bold text-4xl">LOREM</h1>
                    <p class="text-xl mt-6">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Suscipit, delectus! Architecto, aliquam eos.</p>
                </div>
            </div>
            <div class="bg-white rounded-lg flex flex-col items-center">
                <div class="-my-28">
                    <img class="h-60" src="{{url('/images/food-3.png')}}" alt="">
                </div>
                <div class="my-28 text-center">
                    <h1 class="font-bold text-4xl">LOREM</h1>
                    <p class="text-xl mt-6">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Suscipit, delectus! Architecto, aliquam eos.</p>
                </div>
            </div>
            <div class="bg-white rounded-lg flex flex-col items-center">
                <div class="-my-28">
                    <img class="h-60" src="{{url('/images/food-4.png')}}" alt="">
                </div>
                <div class="my-28 text-center">
                    <h1 class="font-bold text-4xl">LOREM</h1>
                    <p class="text-xl mt-6">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Suscipit, delectus! Architecto, aliquam eos.</p>
                </div>
            </div>
        </div>
    </main>

    <section class="py-12 flex justify-center">
        <div class=" px-4">
            <h2 class="text-3xl font-bold mb-8 text-center">Berita Kami</h2>
            <div class="grid gap-8 lg:grid-cols-12 lg:grid-rows-2">


                <div class="lg:col-span-4 row-span-2 bg-white shadow-md rounded-lg overflow-hidden">
                    <img src="{{url('images/food-berita.jpg')}}" alt="Berita 1" class="w-full h-80 object-cover">
                    <div class="p-7 h-64 flex flex-col">
                        <h3 class="text-lg font-semibold mb-2">Lorem Ipsum Dolor Sit Amet</h3>
                        <p class="text-gray-600 mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce scelerisque magna...</p>
                        <div>
                            <a href="#" class="text-yellow-500 hover:text-yellow-700 font-semibold mt-20">Baca selengkapnya</a>
                        </div>
                    </div>
                </div>


                <div class="lg:col-span-4 bg-white shadow-md rounded-lg overflow-hidden">
                    <img src="{{url('images/food-berita-2.jpg')}}" alt="Berita 2" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-lg font-semibold mb-2">Lorem Ipsum Dolor Sit Amet</h3>
                        <p class="text-gray-600 mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ornare...</p>
                        <a href="#" class="text-yellow-500 hover:text-yellow-700 font-semibold">Baca selengkapnya</a>
                    </div>
                </div>
                <div class="lg:col-span-4 bg-white shadow-md rounded-lg overflow-hidden">
                    <img src="{{url('images/food-berita-3.jpg')}}" alt="Berita 3" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-lg font-semibold mb-2">Lorem Ipsum Dolor Sit Amet</h3>
                        <p class="text-gray-600 mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ornare...</p>
                        <a href="#" class="text-yellow-500 hover:text-yellow-700 font-semibold">Baca selengkapnya</a>
                    </div>
                </div>
                <div class="lg:col-span-4 bg-white shadow-md rounded-lg overflow-hidden">
                    <img src="{{url('images/food-berita-4.jpg')}}" alt="Berita 4" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-lg font-semibold mb-2">Lorem Ipsum Dolor Sit Amet</h3>
                        <p class="text-gray-600 mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ornare...</p>
                        <a href="#" class="text-yellow-500 hover:text-yellow-700 font-semibold">Baca selengkapnya</a>
                    </div>
                </div>
                <div class="lg:col-span-4 bg-white shadow-md rounded-lg overflow-hidden">
                    <img src="{{url('images/food-berita-4.jpg')}}" alt="Berita 4" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-lg font-semibold mb-2">Lorem Ipsum Dolor Sit Amet</h3>
                        <p class="text-gray-600 mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ornare...</p>
                        <a href="#" class="text-yellow-500 hover:text-yellow-700 font-semibold">Baca selengkapnya</a>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    
    

    <main class="h-full lg:px-28 lg:py-8 bg-slate-200 w-full">
        <h1 class="text-center text-3xl font-semibold py-8">Galeri Kami</h1>
        <div class="grid grid-cols-3 gap-4">
            <div class="bg-white h-96 rounded-xl shadow-2xl overflow-hidden">
                <img class="bg-no-repeat bg-bottom" src="{{url('images/food-galeri.jpg')}}" alt="">
            </div>
            <div class="bg-white h-96 rounded-xl shadow-2xl overflow-hidden">
                <img class="bg-no-repeat bg-bottom" src="{{url('images/food-galeri-2.jpg')}}" alt="">
            </div>
            <div class="bg-white h-96 rounded-xl shadow-2xl overflow-hidden">
                <img class="bg-no-repeat bg-bottom" src="{{url('images/food-galeri-3.jpg')}}" alt="">
            </div>
            <div class="bg-white h-96 rounded-xl shadow-2xl overflow-hidden">
                <img class="bg-no-repeat bg-bottom" src="{{url('images/food-galeri.jpg')}}" alt="">
            </div>
            <div class="bg-white h-96 rounded-xl shadow-2xl overflow-hidden">
                <img class="bg-no-repeat bg-bottom" src="{{url('images/food-galeri.jpg')}}" alt="">
            </div>
            <div class="bg-white h-96 rounded-xl shadow-2xl overflow-hidden">
                <img class="bg-no-repeat bg-bottom" src="{{url('images/food-galeri.jpg')}}" alt="">
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