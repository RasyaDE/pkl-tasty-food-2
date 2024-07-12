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

    <main class="flex items-start lg:px-28 h-96 bg-slate-200 justify-center">
        <div class="my-28 w-1/2 inline-block text-center">
            <h1 class="uppercase text-3xl font-semibold">Tentang Kami</h1>
            <p class="my-8">Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis tenetur veniam ut, dolorum distinctio quis repellat molestias quos officia reiciendis. Necessitatibus hic nihil, fugit alias nisi debitis impedit deserunt ab iure voluptatibus officia omnis ea.</p>
            <div class="flex justify-center">
                <hr class="w-3/12 border-t-4 border-black mb-10">
            </div>
        </div>
    </main>

    <main class="bg-banner object-cover bg-center w-full bg-no-repeat">

    </main>
</body>

</html>