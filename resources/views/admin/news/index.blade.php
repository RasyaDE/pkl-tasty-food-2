@extends('admin.layout.layout')

@section('main')

<div class="px-28 w-full py-28">
<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-200 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-16 py-3">
                    <span class="sr-only">Image</span>
                </th>
                <th scope="col" class="px-6 py-3">
                    Judul Berita
                </th>
                <th scope="col" class="px-6 py-3">
                    Deskripsi Berita
                </th>
                <th scope="col" class="px-6 py-3">
                    Action
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($news as $n)           
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <td class="p-4">
                    <img src="https://flowbite.com/docs/images/products/apple-watch.png" class="w-16 md:w-32 max-w-full max-h-full" alt="Apple Watch">
                </td>
                <td class="px-6 py-4 font-semibold text-gray-900 dark:text-white">
                    {{ $n->judul_berita }}
                </td>
                <td class="px-6 py-4">
                    <h1>{{ $n->deskripsi_berita }}</h1>
                </td>
                <td class="px-6 py-4 flex">
                    <a href="#" class="font-medium mr-3 text-red-600 dark:text-red-500 hover:underline">Remove</a>
                    <a href="#" class="font-medium text-red-600 dark:text-red-500 hover:underline">Edit</a>
                </td>
            </tr>
            @endforeach
        </tbody>
</div>
@endsection

