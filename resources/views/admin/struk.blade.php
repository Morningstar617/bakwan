<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Struk Peminjaman</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter+Tight:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
    <x-navbar></x-navbar>

    <header class="bg-white shadow flex">
        {{-- <div class="py-7 pl-9 lg:pl-20">
            <a href="{{ route('h-admin') }}"
                class="py-2 px-4 bg-slate-700 rounded-md text-white font-semibold hover:bg-slate-800 transition duration-300">Back</a>
        </div> --}}
        <div class="w-full py-6 lg:pl-[26.5rem]">
            <h1 class="text-3xl text-center font-bold tracking-wide text-gray-900">Struk Peminjaman</h1>
        </div>
    </header>

    {{-- Card Struk --}}
    <div class="w-[65%] bg-gray-100 mx-auto mt-8 pb-8 rounded-lg shadow-lg">
        <div class="w-[80%] text-center pt-3 mx-auto">
            <h1 class="text-xl tracking-wide font-semibold opacity-70">Pinjamin</h1>
            <p class="text-sm font-semibold opacity-70">Peminjaman barang UIN Malang</p>
            <h1 class="text-sm tracking-wide font-semibold opacity-70">trx-88-1731464845</h1>
            <p class="pt-1 opacity-70">--------------------------------------</p>
        </div>
        <div class="w-[80%] text-start mx-auto">
            <div class="flex justify-between">
                <h1 class="text-sm tracking-wide font-semibold opacity-70">Nama</h1>
                <h1 class="text-sm tracking-wide font-semibold opacity-70">Ripqi Puki</h1>
            </div>
            <div class="flex justify-between">
                <h1 class="text-sm tracking-wide font-semibold opacity-70">Jam</h1>
                <h1 class="text-sm tracking-wide font-semibold opacity-70">08:30:28</h1>
            </div>
            <p class="opacity-70">--------------------------------------</p>
        </div>
        <div class="w-[80%] text-start mx-auto">
            <div class="flex justify-between pb-1">
                <h1 class="text-sm tracking-wide font-semibold opacity-70">Monitor</h1>
                <h1 class="text-sm tracking-wide font-semibold opacity-70">x20</h1>
            </div>
            <p class="opacity-70">--------------------------------------</p>
        </div>
        <div class="w-[80%] text-start mx-auto">
            <div class="flex justify-between pb-1">
                <h1 class="text-sm tracking-wide font-semibold opacity-70">Tanggal Pinjam</h1>
                <h1 class="text-sm tracking-wide font-semibold opacity-70">2024-11-02</h1>
            </div>
            <div class="flex justify-between pb-1">
                <h1 class="text-sm tracking-wide font-semibold opacity-70">Tanggal Kembali</h1>
                <h1 class="text-sm tracking-wide font-semibold opacity-70">2024-11-03</h1>
            </div>
        </div>
    </div>
    <div class="w-[65%] mx-auto text-center mt-5">
        <button class="bg-slate-700 px-12 py-1 text-white font-semibold tracking-wide rounded-md">Kembali</button>
    </div>
</body>

</html>
