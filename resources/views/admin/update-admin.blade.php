<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>List Barang</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter+Tight:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
</head>

<body>
    <x-navbar></x-navbar>

    <header class="bg-white shadow">
        <div class="mx-auto max-w-7xl px-8 py-6 sm:px-6 lg:text-center">
            <h1 class="text-3xl font-bold tracking-tight text-gray-900">Dashboard</h1>
        </div>
    </header>

    <div class="my-7 mx-7 lg:ml-16">
        <a href="{{ route('tabel-admin') }}"
            class="bg-slate-700 py-2 px-8 text-white text-base font-semibold rounded-md hover:bg-slate-800 transition duration-300">Back</a>
    </div>

<<<<<<< HEAD
    <form action="{{ route('tabel.update', $barang->id) }}" method="POST"
=======
    <form action="{{ route('tabel.update', $barang->kode_barang) }}" method="POST"
>>>>>>> 5ceee63523c621d4d6a35481391a31bae819c5b9
        class="mt-14 mb-32 mx-7 bg-slate-200 pb-7 pt-6 px-5 h-[15.5rem] shadow-lg rounded-lg lg:w-1/3 lg:ml-16">
        @csrf
        @method('PUT')  

        @if (session('status'))
            <div class="text-slate-700 text-lg pb-1 font-semibold">{{ session('status') }}</div>
        @endif

        <div class="mb-4">
            <label for="nama_barang" class="text-xl font-semibold text-slate-700 pr-2">Nama Barang</label>
            <input type="text" id="nama_barang" name="nama_barang" value="{{ old('nama_barang', $barang->nama_barang) }}" class="w-[65%] pl-2">
            @error('nama_barang')
                <span class="text-red-500">{{ $message }}</span>
            @enderror
        </div>

        <div class="mb-4">
            <label for="deskripsi_barang" class="text-xl font-semibold text-slate-700 pr-[2.85rem]">Deskripsi</label>
            <input type="text" id="deskripsi_barang" name="deskripsi_barang" value="{{ old('deskripsi_barang', $barang->deskripsi_barang) }}" class="w-[65%] pl-2">
            @error('deskripsi_barang')
                <span class="text-red-500">{{ $message }}</span>
            @enderror
        </div>

        <div class="flex gap-10 mb-6">
            <div>
                <label for="jumlah_barang" class="text-lg font-semibold text-slate-700 pr-[0.55rem]">Jumlah barang</label>
                <input type="number" id="jumlah_barang" name="jumlah_barang" value="{{ old('jumlah_barang', $barang->jumlah_barang) }}" class="w-16 pl-2">
                @error('jumlah_barang')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>
            <div>
                <label for="active" class="text-lg font-semibold text-slate-700 pr-2">Yakin?</label>
                <input type="checkbox" id="active" name="active" value="1" {{ old('active', $barang->active) ? 'checked' : '' }}>
                @error('active')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>
        </div>

        <div class="flex gap-4">
            <button type="submit" class="py-1 w-[58%] bg-slate-700 text-lg text-white rounded-md hover:bg-slate-800 transition duration-300">Update</button>
            <a href="#" class="flex items-center text-slate-700">
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" class="mt-[0.15rem]">
                    <path d="M6 7H5v13a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V7H6zm4 12H8v-9h2v9zm6 0h-2v-9h2v9zm.618-15L15 2H9L7.382 4H3v2h18V4z"></path>
                </svg>
            </a>
        </div>
    </form>

    <x-footer></x-footer>
</body>

</html>
