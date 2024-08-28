@if (request()->is('/'))

<div class="bg-gray-200 w-full h-20 flex items-center lg:px-28 px-4">
    <div class="w-1/2 lg:w-1/6 flex items-center">
        <h1 class="font-bold lg:text-3xl text-2xl">TASTY FOOD</h1>
    </div>
    <div class="w-full lg:w-5/6 flex items-center justify-end lg:justify-start">
        <div class="hidden lg:flex items-center space-x-6">
            <x-molekul.navlink href="/">Home</x-molekul.navlink>
            <x-molekul.navlink href="/tentang">Tentang</x-molekul.navlink>
            <x-molekul.navlink href="/berita">Berita</x-molekul.navlink>
            <x-molekul.navlink href="/galeri">Galeri</x-molekul.navlink>
            <x-molekul.navlink href="/kontak">Kontak</x-molekul.navlink>
        </div>
        <div class="lg:hidden flex items-center ml-auto">
            <button id="menu-toggle" class="text-2xl">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                </svg>
            </button>
        </div>
    </div>
</div>

<div id="menu" class="lg:hidden fixed inset-0 bg-gray-800 bg-opacity-75 flex flex-col items-center justify-center space-y-6 text-white hidden">
    <x-molekul.navlink href="/">Home</x-molekul.navlink>
    <x-molekul.navlink href="/tentang">Tentang</x-molekul.navlink>
    <x-molekul.navlink href="/berita">Berita</x-molekul.navlink>
    <x-molekul.navlink href="/galeri">Galeri</x-molekul.navlink>
    <x-molekul.navlink href="/kontak">Kontak</x-molekul.navlink>
    <button id="menu-close" class="text-2xl absolute top-4 right-4">
        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
        </svg>
    </button>
</div>

<script>
    document.getElementById('menu-toggle').addEventListener('click', function() {
        document.getElementById('menu').classList.toggle('hidden');
    });

    document.getElementById('menu-close').addEventListener('click', function() {
        document.getElementById('menu').classList.add('hidden');
    });
</script>

@elseif (request()->is('tentang', 'berita', 'galeri', 'kontak'))
<div class="bg-transparent w-full h-20 flex items-center lg:px-28 px-4 z-50 text-white justify-between">
    <div class="flex items-center">
        <h1 class="font-bold lg:text-3xl text-2xl">TASTY FOOD</h1>
    </div>
    
    <div class="hidden lg:flex items-center space-x-6">
        <x-molekul.navlink href="/">Home</x-molekul.navlink>
        <x-molekul.navlink href="/tentang">Tentang</x-molekul.navlink>
        <x-molekul.navlink href="/berita">Berita</x-molekul.navlink>
        <x-molekul.navlink href="/galeri">Galeri</x-molekul.navlink>
        <x-molekul.navlink href="/kontak">Kontak</x-molekul.navlink>
    </div>
    
    <div class="lg:hidden flex items-center">
        <button id="menu-toggle" class="text-2xl">
            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
            </svg>
        </button>
    </div>
</div>


<!-- Menu Mobile -->
<div id="menu" class="lg:hidden fixed inset-0 bg-gray-800 bg-opacity-75 flex flex-col items-center justify-center space-y-6 text-white hidden">
    <x-molekul.navlink href="/">Home</x-molekul.navlink>
    <x-molekul.navlink href="/tentang">Tentang</x-molekul.navlink>
    <x-molekul.navlink href="/berita">Berita</x-molekul.navlink>
    <x-molekul.navlink href="/galeri">Galeri</x-molekul.navlink>
    <x-molekul.navlink href="/kontak">Kontak</x-molekul.navlink>
    <button id="menu-close" class="text-2xl absolute top-4 right-4">
        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
        </svg>
    </button>
</div>

<script>
    document.getElementById('menu-toggle').addEventListener('click', function() {
        document.getElementById('menu').classList.toggle('hidden');
    });

    document.getElementById('menu-close').addEventListener('click', function() {
        document.getElementById('menu').classList.add('hidden');
    });
</script>
@endif



