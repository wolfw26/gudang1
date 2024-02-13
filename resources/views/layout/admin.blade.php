<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests"> -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    @vite('resources/css/app.css')
    <title>ADMIN</title>
    @livewireStyles
</head>

<body>
    <div class="flex flex-column  px-2">
        {{-- sidebar --}}
        <div class=" basis-1/4 border rounded-3xl px-3 max-h-screen mt-4 mx-4 bg-white shadow-lg mb-2">
            <div id="sidebar-title" class="mt-3 pb-3 border-b border-slate-300 flex">
                <img class=" max-w-20 rounded-full shadow-md" src="{{ asset('css/logo.jpg') }}" alt="">
                <div class="text-start basis-3/4 px-2 pt-3">
                    <a href="{{ route('profile') }}" class=" font-bold font-mono text-2xl capitalize"> {{
                        Auth::user()->name }}</a> <br>
                    <span class=" text-blue-600 font-serif">{{ Auth::user()->email }}</span>
                </div>
            </div>
            <div class="mt-3 px-2 max-h-[80%] overflow-y-auto overscroll-y-contain">
                <div id="menu-master" class=" px-2">
                    <h2 class=" text-lg font-medium text-center">Master</h2>
                    <div id="menu" class="w-full py-2 px-3 text-slate-500">
                        <a href="{{ route('home') }}" class=" border-2 block px-4 rounded-xl py-1 my-3 hover:text-black hover:font-medium hover:bg-amber-100 hover:shadow-md">Dasboard</a>
                        <a href="{{ route('registrasi') }}" class=" border-2 block px-4 rounded-xl py-1 my-3 hover:text-black hover:font-medium hover:bg-amber-100 hover:shadow-md">User</a>
                        <a href="{{ route('staff') }}" class=" border-2 block px-4 rounded-xl py-1 my-3 hover:text-black hover:font-medium hover:bg-amber-100 hover:shadow-md">Staff</a>
                        <a href="{{ route('jabatan') }}" class=" border-2 block px-4 rounded-xl py-1 my-3 hover:text-black hover:font-medium hover:bg-amber-100 hover:shadow-md">Jabatan</a>
                        <a href="{{ route('supplier') }}" class=" border-2 block px-4 rounded-xl py-1 my-3 hover:text-black hover:font-medium hover:bg-amber-100 hover:shadow-md">Supplier</a>
                        <a href="{{ route('expedisi') }}" class=" border-2 block px-4 rounded-xl py-1 my-3 hover:text-black hover:font-medium hover:bg-amber-100 hover:shadow-md">Expedisi</a>
                        <a href="{{ route('barang') }}" class=" border-2 block px-4 rounded-xl py-1 my-3 hover:text-black hover:font-medium hover:bg-amber-100 hover:shadow-md">Barang</a>
                    </div>
                </div>
                <div id="menu-master" class=" px-2">
                    <h2 class=" text-lg font-medium text-center">Transaksi</h2>
                    <div id="menu" class="w-full py-2 px-3 text-slate-500">
                        <a href=" {{ route('transaction.stok') }}" class="border-2 block px-4 rounded-xl py-1 my-3 hover:text-black hover:font-medium hover:bg-amber-100 hover:shadow-md">Stok
                            Barang</a>
                        <a href=" {{ route('transaction.barangMasuk') }}" class="border-2 block px-4 rounded-xl py-1 my-3 hover:text-black hover:font-medium hover:bg-amber-100 hover:shadow-md">Barang
                            Masuk</a>
                        <a href=" {{ route('transaction.barangKeluar') }}" class="border-2 block px-4 rounded-xl py-1 my-3 hover:text-black hover:font-medium hover:bg-amber-100 hover:shadow-md">Barang
                            Keluar</a>
                    </div>
                </div>
                <div id="menu-master" class=" px-2">
                    <h2 class=" text-lg font-medium text-center">LAPORAN</h2>
                    <div id="menu" class="w-full py-2 px-3 text-slate-500">
                        <a href=" {{ route('transaction.stok') }}" class="border-2 block px-4 rounded-xl py-1 my-3 hover:text-black hover:font-medium hover:bg-amber-100 hover:shadow-md">laporan Barang Masuk</a>
                        <a href=" {{ route('transaction.barangMasuk') }}" class="border-2 block px-4 rounded-xl py-1 my-3 hover:text-black hover:font-medium hover:bg-amber-100 hover:shadow-md">Laporan Penjualan</a>
                        <a href=" {{ route('transaction.barangKeluar') }}" class="border-2 block px-4 rounded-xl py-1 my-3 hover:text-black hover:font-medium hover:bg-amber-100 hover:shadow-md">Laporan Stok Gudang</a>
                        <a href=" {{ route('transaction.barangKeluar') }}" class="border-2 block px-4 rounded-xl py-1 my-3 hover:text-black hover:font-medium hover:bg-amber-100 hover:shadow-md">Laporan Keuangan</a>
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