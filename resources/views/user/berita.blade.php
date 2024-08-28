@extends('user.layout.layout')

@section('main')

<div class="w-full h-screen bg-slate-200 px-28 flex justify-evenly items-center">
    <div class="w-3/6 lg:h-[45rem] mr-20">
        <img class="w-full h-full object-cover rounded-lg" src="{{url('/images/food-galeri-3.jpg')}}" alt="">
    </div>

    <div class="w-3/6">
        <h1 class="font-semibold text-3xl tracking-wider uppercase">Apa saja makanan khas nusantara?</h1>
        <p class="py-9">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate corrupti doloremque enim aliquid eius fuga magni, eum hic assumenda nulla sunt deleniti optio vitae! Suscipit vero nostrum iste fugit reprehenderit similique sapiente recusandae unde velit debitis voluptatem illo obcaecati sit, eligendi adipisci. Delectus sapiente laborum sunt ducimus tenetur aperiam maiores.</p>
        <p class="py-9">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate corrupti doloremque enim aliquid eius fuga magni, eum hic assumenda nulla sunt deleniti optio vitae! Suscipit vero nostrum iste fugit reprehenderit similique sapiente recusandae unde velit debitis voluptatem illo obcaecati sit, eligendi adipisci. Delectus sapiente laborum sunt ducimus tenetur aperiam maiores.</p>
        <button class="w-1/2 py-5 bg-black text-white uppercase tracking-wide rounded-sm">baca selengkapnya</button>
    </div>
</div>

<main class="h-full lg:px-28 lg:py-8  w-full">
    <h1 class="text-3xl font-semibold py-8">BERITA LAINNYA</h1>
    <div class="grid grid-cols-4 gap-4">
        <div class="bg-white rounded-lg shadow-lg overflow-hidden">
            <img class="object-cover w-full h-56" src="{{ asset('images/food-berita-3.jpg') }}" alt="">
            <div class="p-6">
                <h3 class="font-bold text-xl mb-4">Lorem Ipsum Dolor Sit Amet</h3>
                <p class="text-gray-600 mb-6">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce scelerisque magna...
                </p>
                <a href="#" class="text-orange-500 font-semibold">Baca selengkapnya</a>
            </div>
        </div>
        <div class="bg-white rounded-lg shadow-lg overflow-hidden">
            <img class="object-cover w-full h-56" src="{{ asset('images/food-berita-3.jpg') }}" alt="">
            <div class="p-6">
                <h3 class="font-bold text-xl mb-4">Lorem Ipsum Dolor Sit Amet</h3>
                <p class="text-gray-600 mb-6">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce scelerisque magna...
                </p>
                <a href="#" class="text-orange-500 font-semibold">Baca selengkapnya</a>
            </div>
        </div>
        <div class="bg-white rounded-lg shadow-lg overflow-hidden">
            <img class="object-cover w-full h-56" src="{{ asset('images/food-berita-3.jpg') }}" alt="">
            <div class="p-6">
                <h3 class="font-bold text-xl mb-4">Lorem Ipsum Dolor Sit Amet</h3>
                <p class="text-gray-600 mb-6">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce scelerisque magna...
                </p>
                <a href="#" class="text-orange-500 font-semibold">Baca selengkapnya</a>
            </div>
        </div>
        <div class="bg-white rounded-lg shadow-lg overflow-hidden">
            <img class="object-cover w-full h-56" src="{{ asset('images/food-berita-3.jpg') }}" alt="">
            <div class="p-6">
                <h3 class="font-bold text-xl mb-4">Lorem Ipsum Dolor Sit Amet</h3>
                <p class="text-gray-600 mb-6">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce scelerisque magna...
                </p>
                <a href="#" class="text-orange-500 font-semibold">Baca selengkapnya</a>
            </div>
        </div>
        <div class="bg-white rounded-lg shadow-lg overflow-hidden">
            <img class="object-cover w-full h-56" src="{{ asset('images/food-berita-3.jpg') }}" alt="">
            <div class="p-6">
                <h3 class="font-bold text-xl mb-4">Lorem Ipsum Dolor Sit Amet</h3>
                <p class="text-gray-600 mb-6">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce scelerisque magna...
                </p>
                <a href="#" class="text-orange-500 font-semibold">Baca selengkapnya</a>
            </div>
        </div>
        <div class="bg-white rounded-lg shadow-lg overflow-hidden">
            <img class="object-cover w-full h-56" src="{{ asset('images/food-berita-3.jpg') }}" alt="">
            <div class="p-6">
                <h3 class="font-bold text-xl mb-4">Lorem Ipsum Dolor Sit Amet</h3>
                <p class="text-gray-600 mb-6">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce scelerisque magna...
                </p>
                <a href="#" class="text-orange-500 font-semibold">Baca selengkapnya</a>
            </div>
        </div>
        <div class="bg-white rounded-lg shadow-lg overflow-hidden">
            <img class="object-cover w-full h-56" src="{{ asset('images/food-berita-3.jpg') }}" alt="">
            <div class="p-6">
                <h3 class="font-bold text-xl mb-4">Lorem Ipsum Dolor Sit Amet</h3>
                <p class="text-gray-600 mb-6">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce scelerisque magna...
                </p>
                <a href="#" class="text-orange-500 font-semibold">Baca selengkapnya</a>
            </div>
        </div>
        <div class="bg-white rounded-lg shadow-lg overflow-hidden">
            <img class="object-cover w-full h-56" src="{{ asset('images/food-berita-3.jpg') }}" alt="">
            <div class="p-6">
                <h3 class="font-bold text-xl mb-4">Lorem Ipsum Dolor Sit Amet</h3>
                <p class="text-gray-600 mb-6">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce scelerisque magna...
                </p>
                <a href="#" class="text-orange-500 font-semibold">Baca selengkapnya</a>
            </div>
        </div>
    </div>
    <div class="flex items-center justify-center my-14">
        <div class="w-3/12">
            <button class="py-4 w-full uppercase bg-black text-white font-semibold rounded-sm">lihat lebih banyak</button>
        </div>
    </div>
</main>
@endsection