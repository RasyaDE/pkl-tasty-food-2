@extends('user.layout.layout')

@section('main')

    <div class="w-full h-screen bg-slate-200 px-28 flex justify-between items-center">
        <div class="w-1/2 mr-5">
            <h1 class="font-semibold text-3xl tracking-wide">TASTY FOOD</h1>
            <p class="font-semibold py-9">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate corrupti doloremque enim aliquid eius fuga magni, eum hic assumenda nulla sunt deleniti optio vitae! Suscipit vero nostrum iste fugit reprehenderit similique sapiente recusandae unde velit debitis voluptatem illo obcaecati sit, eligendi adipisci. Delectus sapiente laborum sunt ducimus tenetur aperiam maiores.</p>
            <p class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate corrupti doloremque enim aliquid eius fuga magni, eum hic assumenda nulla sunt deleniti optio vitae! Suscipit vero nostrum iste fugit reprehenderit similique sapiente recusandae unde velit debitis voluptatem illo obcaecati sit, eligendi adipisci. Delectus sapiente laborum sunt ducimus tenetur aperiam maiores.</p>
        </div>
        <div class="w-1/2">
        <div class="w-1/2 flex flex-row gap-2">
            <img class="w-80 object-cover h-[30rem] rounded-lg" src="{{url('/images/food-galeri.jpg')}}" alt="">
            <img class="w-80 object-cover h-[30rem] rounded-lg" src="{{url('/images/food-galeri.jpg')}}" alt="">
        </div>

        </div>
    </div>

    <div class="w-full h-screen bg-slate-200 px-28 flex justify-between items-center">
        <div class="w-1/2 flex flex-row gap-2">
            <img class="w-80 object-cover h-[30rem] rounded-lg" src="{{url('/images/food-galeri.jpg')}}" alt="">
            <img class="w-80 object-cover h-[30rem] rounded-lg" src="{{url('/images/food-galeri.jpg')}}" alt="">
        </div>

        <div class="w-1/2 mr-4">
            <h1 class="font-semibold text-3xl tracking-wide">VISI</h1>
            <p class="py-9">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Magni odit sequi officiis temporibus dignissimos minima earum dicta necessitatibus nam, aliquam ipsam commodi accusantium labore. Nesciunt aspernatur quis iure, sequi molestiae distinctio ipsa maxime corrupti autem sapiente! Nesciunt laudantium perferendis nam consectetur quibusdam voluptatem, mollitia illum error vitae corrupti sint magni tenetur, cumque velit deserunt corporis esse nostrum? Aliquid deserunt quibusdam facere aperiam nulla ut. Minus voluptates dolores excepturi, nostrum tenetur omnis. Aperiam corporis dolorem laboriosam.</p>
        </div>
    </div>

    <div class="w-full h-screen bg-slate-200 px-28 flex justify-between items-center">
        <div class="w-1/2">
            <h1 class="font-semibold text-3xl tracking-wide">VISI</h1>
            <p class="py-9">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Magni odit sequi officiis temporibus dignissimos minima earum dicta necessitatibus nam, aliquam ipsam commodi accusantium labore. Nesciunt aspernatur quis iure, sequi molestiae distinctio ipsa maxime corrupti autem sapiente! Nesciunt laudantium perferendis nam consectetur quibusdam voluptatem, mollitia illum error vitae corrupti sint magni tenetur, cumque velit deserunt corporis esse nostrum? Aliquid deserunt quibusdam facere aperiam nulla ut. Minus voluptates dolores excepturi, nostrum tenetur omnis. Aperiam corporis dolorem laboriosam.</p>
        </div>

        <div class="w-1/2 flex flex-row gap-2">
        <img class="w-full object-cover h-[25rem] rounded-lg" src="{{url('/images/food-berita-2.jpg')}}" alt="">
        </div>

    </div>

    @endsection