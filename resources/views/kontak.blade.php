<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Document</title>
</head>
<div>
<x-navbar color="text-white"></x-navbar>
<main class="bg-banner object-cover w-full h-96 bg-no-repeat bg-center -my-20 flex items-center px-28">
        <h1 class="text-white text-5xl font-extrabold">TENTANG KAMI</h1>
    </main>

    <div class="w-full h-screen bg-slate-200 px-28 flex justify-between py-24">
        <div class="container mx-auto p-4">
            <form action="#" method="POST" class="space-y-6">
                <h1 class="text-4xl font-bold text-gray-800 mb-8">KONTAK KAMI</h1>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                    <div class="space-y-6">
                        <div class="">
                            <input type="text" name="" id="" placeholder="Subject" class="w-full p-3 border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-slate-500 py-6">
                        </div>
                        <div class="">
                            <input type="text" name="" id="" placeholder="Name" class="w-full p-3 border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-slate-500 py-6">
                        </div>
                        <div class="">
                            <input type="text" name="" id="" placeholder="Email" class="w-full p-3 border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-slate-500 py-6">
                        </div>
                    </div>
                    <div class="">
                        <textarea name="" id="" class="w-full h-full p-3 border border-gray-300 rounded-lg mb-16"></textarea>
                    </div>
                </div>
                <button class="w-full py-6 bg-black text-white rounded-md">KIRIM</button>
            </form>
        </div>
</div>

<div class="flex justify-evenly items-center w-full h-72 px-28 py-20">
    <div class="flex flex-col items-center">
        <div class="">
            <img class="h-28" src="{{url('/images/gmail.png')}}" alt="">
        </div>
        <div class="text-center mt-3">
            <p class="font-bold uppercase text-lg">Email</p>
            <p>tastyfood@gmail.com</p>
        </div>
    </div>
    <div class="flex flex-col items-center">
        <div class="">
            <img class="h-28" src="{{url('/images/telephone.png')}}" alt="">
        </div>
        <div class="text-center">
            <p class="font-bold uppercase text-lg">Email</p>
            <p>tastyfood@gmail.com</p>
        </div>
    </div>
    <div class="flex flex-col items-center">
        <div class="text-center mt-3">
        <img class="h-28" src="{{url('/images/location.png')}}" alt="">
        </div>
        <div class="text-center mt-3">
            <p class="font-bold uppercase text-lg">Email</p>
            <p>tastyfood@gmail.com</p>
        </div>
    </div>

</div>

    <x-footer></x-footer>
</body>
</html>