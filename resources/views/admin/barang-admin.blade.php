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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script> <!-- Pastikan ini dimuat di atas script di bawah -->
</head>

<body>
    <x-navbar></x-navbar>

    <header class="bg-white shadow flex">
        <div class="my-7 ml-7 lg:ml-20">
            <a href="{{ route('tabel-admin') }}"
                class="bg-slate-700 py-2 px-8 text-white text-base font-semibold rounded-md hover:bg-slate-800 transition duration-300">Back</a>
        </div>
        <div class="px-8 py-6 sm:px-6 lg:ml-[24rem] lg:text-center">
            <h1 class="text-3xl font-bold tracking-tight text-gray-900">Tambah Barang</h1>
        </div>
    </header>


    <div  class="w-full">
        <form id="BarangForm" action="{{ route('barang-admin') }}" method="post"
            class="mx-auto mt-12 mb-48 bg-slate-200 pb-7 pt-6 px-5 h-[15.5rem] shadow-lg rounded-lg lg:w-1/3">
            @csrf
            @if (session('status'))
                <div class="text-slate-700 text-lg pb-1 font-semibold">{{ session('status') }}</div>
            @endif
            <div class="mb-4">
                <label class="text-xl font-semibold text-slate-700 pr-2">Nama Barang</label>
                <input type="text" name="nama" value="{{ old('nama') }}" class="w-[65%] pl-2" required>
            </div>
            <div class="mb-4">
                <label class="text-xl font-semibold text-slate-700 pr-[2.85rem]">Deskripsi</label>
                <input type="text" name="deskripsi" value="{{ old('deskripsi') }}" class="w-[65%] pl-2" required>
            </div>
            <div class="flex gap-10 mb-6">
                <div>
                    <label class="text-lg font-semibold text-slate-700 pr-[0.55rem]">Jumlah barang</label>
                    <input type="number" name="jumlah" class="w-16 pl-2" required>
                </div>
                <div>
                    <label class="text-lg font-semibold text-slate-700 pr-2">yakin?</label>
                    <input type="checkbox" id="yakin" name="yakin" value="1">
                </div>
            </div>
            <div class="flex gap-4">
                <button type="submit"
                    class="py-1 w-[58%] bg-slate-700 text-lg text-white rounded-md hover:bg-slate-800 transition duration-300">Simpan</button>
                <a href="">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24"
                        class="mt-[0.15rem]" style="fill: rgba(51, 65, 85, 1);transform: ;msFilter:;">
                        <path
                            d="M6 7H5v13a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V7H6zm4 12H8v-9h2v9zm6 0h-2v-9h2v9zm.618-15L15 2H9L7.382 4H3v2h18V4z">
                        </path>
                    </svg>
                </a>
            </div>
        </form>
    </div>


    <x-footer></x-footer>

    <script>
        document.getElementById('BarangForm').addEventListener('submit', function(event) {
            var yakinCheckbox = document.getElementById('yakin');
            if (!yakinCheckbox.checked) {
                event.preventDefault();
                Swal.fire({
                    icon: "error",
                    title: "Oops...",
                    text: "Anda harus mencentang checkbox 'yakin' dan mengisi semua untuk melanjutkan.",
                    confirmButtonText: 'OK'
                });
            }
        });
    </script>
</body>

</html>
