@extends('user.layout.layout')

@section('main')

<div class="bg-slate-200 lg:py-40 py-8">
    <main class="flex flex-col-reverse lg:flex-row md:items-center md:justify-between lg:px-28">
        <div class="w-full lg:w-1/2 px-4">
            <div class="text-center lg:text-left">
                <hr class="lg:w-3/12 w-56 border-t-4 border-black mb-6 mx-auto lg:mx-0">
                <h1 class="text-4xl lg:text-6xl">HEALTY</h1>
                <h1 class="text-5xl lg:text-7xl font-extrabold my-3">TASTY FOOD</h1>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nobis soluta fugit repellendus odio eveniet dolorum nihil adipisci, amet magnam sequi quam vel temporibus praesentium nemo inventore, blanditiis, eum architecto? Praesentium eaque earum dolorem aliquam nam!</p>
            </div>
            <div class="mt-4 text-center lg:text-left">
                <button class="w-full lg:w-auto bg-black text-white uppercase py-3 px-5 rounded-sm font-bold">Tentang kami</button>
            </div>
        </div>
        <div class="lg:w-1/2 lg:-mx-72 lg:-mt-96">
            <img src="{{url('/images/ilustration.png')}}" alt="Image" />
        </div>

    </main>
</div>


<main class="flex flex-col items-center h-full bg-white">
    <div class="my-28 w-full lg:w-1/2 text-center px-4">
        <h1 class="uppercase text-3xl font-semibold">Tentang Kami</h1>
        <p class="my-8">Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis tenetur veniam ut, dolorum distinctio quis repellat molestias quos officia reiciendis. Necessitatibus hic nihil, fugit alias nisi debitis impedit deserunt ab iure voluptatibus officia omnis ea.</p>
        <div class="flex justify-center">
            <hr class="w-3/12 border-t-4 border-black mb-10">
        </div>
    </div>
</main>

<main class="bg-banner object-cover py-32 lg:py-36 md:h-full lg:bg-no-repeat">
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 px-10 gap-28 lg:gap-5 place-content-center">
        <div class="bg-white p-14 text-center rounded-lg">
            <div class="-mt-36">
                <img class="w-full h-auto" src="{{url('images/food-1.png')}}" alt="">
            </div>
            <h1 class="font-bold text-2xl sm:text-3xl uppercase">Lorem Ipsum</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Non, quo?</p>
        </div>
        <div class="bg-white p-14 text-center rounded-lg">
            <div class="-mt-36">
                <img class="w-full h-auto" src="{{url('images/food-2.png')}}" alt="">
            </div>
            <h1 class="font-bold text-2xl sm:text-3xl uppercase">Lorem Ipsum</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Non, quo?</p>
        </div>
        <div class="bg-white p-14 text-center rounded-lg">
            <div class="-mt-36">
                <img class="w-full h-auto" src="{{url('images/food-3.png')}}" alt="">
            </div>
            <h1 class="font-bold text-2xl sm:text-3xl uppercase">Lorem Ipsum</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Non, quo?</p>
        </div>
        <div class="bg-white p-14 text-center rounded-lg">
            <div class="-mt-36">
                <img class="w-full h-auto" src="{{url('images/food-4.png')}}" alt="">
            </div>
            <h1 class="font-bold text-2xl sm:text-3xl uppercase">Lorem Ipsum</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Non, quo?</p>
        </div>
    </div>
</main>


<div class="px-4 lg:px-28 py-20">
    <h2 class="text-center font-bold text-3xl uppercase mb-10">Berita Kami</h2>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
        <div class="bg-white rounded-lg shadow-lg overflow-hidden col-span-1 md:col-span-2 lg:col-span-4">
            <img class="object-cover w-full h-64" src="{{ asset('images/food-berita.jpg') }}" alt="">
            <div class="p-6">
                <h3 class="font-bold text-xl md:text-2xl mb-4">Lorem Ipsum Dolor Sit Amet, Consectetur Adipiscing Elit</h3>
                <p class="text-gray-600 mb-6">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce scelerisque magna...
                </p>
                <a href="#" class="text-orange-500 font-semibold">Baca selengkapnya</a>
            </div>
        </div>
        <div class="bg-white rounded-lg shadow-lg overflow-hidden">
            <img class="object-cover w-full h-56" src="{{ asset('images/food-berita-2.jpg') }}" alt="">
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
            <img class="object-cover w-full h-56" src="{{ asset('images/food-berita-4.jpg') }}" alt="">
            <div class="p-6">
                <h3 class="font-bold text-xl mb-4">Lorem Ipsum Dolor Sit Amet</h3>
                <p class="text-gray-600 mb-6">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce scelerisque magna...
                </p>
                <a href="#" class="text-orange-500 font-semibold">Baca selengkapnya</a>
            </div>
        </div>
        <div class="bg-white rounded-lg shadow-lg overflow-hidden">
            <img class="object-cover w-full h-56" src="{{ asset('images/food-berita-5.jpg') }}" alt="">
            <div class="p-6">
                <h3 class="font-bold text-xl mb-4">Lorem Ipsum Dolor Sit Amet</h3>
                <p class="text-gray-600 mb-6">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce scelerisque magna...
                </p>
                <a href="#" class="text-orange-500 font-semibold">Baca selengkapnya</a>
            </div>
        </div>
    </div>
</div>

<div class="px-4 lg:px-28 py-20">
    <h1 class="text-center font-bold text-3xl uppercase mb-5">Galeri Kami</h1>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-5">
        <div class="aspect-w-1 aspect-h-1 shadow-lg bg-slate-400 rounded-lg">
            <img class="object-cover w-full h-full rounded-lg" src="{{ asset('images/food-galeri.jpg') }}" alt="">
        </div>
        <div class="aspect-w-1 aspect-h-1 shadow-lg bg-slate-400 rounded-lg">
            <img class="object-cover w-full h-full rounded-lg" src="{{ asset('images/food-galeri-2.jpg') }}" alt="">
        </div>     
        <div class="aspect-w-1 aspect-h-1 shadow-lg bg-slate-400 rounded-lg">
            <img class="object-cover w-full h-full rounded-lg" src="{{ asset('images/food-galeri-3.jpg') }}" alt="">
        </div>     
        <div class="aspect-w-1 aspect-h-1 shadow-lg bg-slate-400 rounded-lg">
            <img class="object-cover w-full h-full rounded-lg" src="{{ asset('images/food-galeri-4.jpg') }}" alt="">
        </div>     
        <div class="aspect-w-1 aspect-h-1 shadow-lg bg-slate-400 rounded-lg">
            <img class="object-cover w-full h-full rounded-lg" src="{{ asset('images/food-galeri-5.jpg') }}" alt="">
        </div>     
        <div class="aspect-w-1 aspect-h-1 shadow-lg bg-slate-400 rounded-lg">
            <img class="object-cover w-full h-full rounded-lg" src="{{ asset('images/food-galeri-6.jpg') }}" alt="">
        </div>     
    </div>
    <div class="flex justify-center items-center mt-10">
        <button class="bg-black text-white py-4 px-12 uppercase font-bold">Lihat Lebih Banyak</button>
    </div>
</div>
@endsection