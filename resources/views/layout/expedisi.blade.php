<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    @vite('resources/css/app.css')
    <title>Expedisi</title>
    @livewireStyles
</head>

<body>
    <div class="flex flex-column  px-2">
        {{-- sidebar --}}
        <div class=" basis-1/4 border rounded-3xl px-3 max-h-screen mt-4 mx-4 bg-white shadow-lg mb-2">
            <div id="sidebar-title" class="mt-3 pb-3 border-b border-slate-300 flex">
                <img class=" max-w-20 rounded-full shadow-md" src="{{ asset('css/logo.jpg') }}" alt="">
                <div class="text-start basis-3/4 px-2 pt-3">
                    <h2 class=" font-bold font-serif text-2xl">User 1</h2>
                    <span>Admin gudang 1</span>
                </div>
            </div>
            <div class="mt-3 px-2 max-h-[80%] overflow-y-auto overscroll-y-contain">
                <div id="menu-master" class=" px-2">
                    <h2 class=" text-lg font-medium text-center">Master</h2>
                    <div id="menu" class="w-full py-2 px-3">
                        <a href="#" class="border-2 block px-4 rounded-xl py-1 my-3 hover:bg-amber-100 hover:shadow-md">Dasboard</a>
                        <a href="#" class="border-2 block px-4 rounded-xl py-1 my-3 hover:bg-amber-100 hover:shadow-md">User</a>
                        <a href="#" class="border-2 block px-4 rounded-xl py-1 my-3 hover:bg-amber-100 hover:shadow-md">Staff</a>
                        <a href="#" class="border-2 block px-4 rounded-xl py-1 my-3 hover:bg-amber-100 hover:shadow-md">Jabatan</a>
                        <a href="#" class="border-2 block px-4 rounded-xl py-1 my-3 hover:bg-amber-100 hover:shadow-md">Supplier</a>
                        <a href="#" class="border-2 block px-4 rounded-xl py-1 my-3 hover:bg-amber-100 hover:shadow-md">Expedisi</a>
                        <a href="#" class="border-2 block px-4 rounded-xl py-1 my-3 hover:bg-amber-100 hover:shadow-md">Barang</a>
                    </div>
                </div>
            </div>
        </div>
        {{-- /sidebar --}}
        <div class="basis-3/4 border rounded-2xl shadow-md px-4 py-4 mx-3 mt-4">
            @yield('konten')
        </div>
    </div>

    @livewireScripts
</body>

</html>