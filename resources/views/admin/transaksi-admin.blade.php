<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pinjam Barang</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter+Tight:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <x-navbar></x-navbar>

    <header class="bg-white shadow flex">
        <div class="py-7 pl-9 lg:pl-20">
            <a href="{{ route('admin.h-admin') }}"
                class="py-2 px-4 bg-slate-700 rounded-md text-white font-semibold hover:bg-slate-800 transition duration-300">Back</a>
        </div>
        <div class="max-w-7xl py-6 pl-8 lg:pl-[26.5rem]">
            <h1 class="text-3xl text-center font-bold tracking-wide text-gray-900">Pinjam Barang</h1>
        </div>
    </header>

    @if (session('success'))
        <script>
            Swal.fire({
                title: 'Berhasil!',
                text: "{{ session('success') }}",
                icon: 'success',
                showCancelButton: true,
                confirmButtonText: 'Oke',
                cancelButtonText: 'Lihat',
            }).then((result) => {
                if (result.isConfirmed) {
                    // Jika tombol "Oke" dipilih, tetap di halaman
                    window.location.reload();
                } else if (result.isDismissed) {
                    // Jika tombol "Lihat" dipilih, arahkan ke halaman home
                    window.location.href = "{{ route('admin.h-admin') }}";
                }
            });
        </script>
    @endif


    @if ($errors->any())
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Kesalahan',
                html: `
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            `
            });
        </script>
    @endif


    <div class="px-10 pt-10 pb-10">
        <div class="w-full lg:w-[38%] mx-auto px-4 pt-4 pb-6 bg-gray-100 shadow-md rounded-lg mb-10">
            <form action="{{ route('submit-transaksi') }}" method="POST">
                @csrf
                <h1 class="text-gray-800 text-xl font-semibold mb-2 pl-1 text-center">Form Peminjaman</h1>

                {{-- UID & Autofill Data --}}
                <div class="flex flex-col space-y-4">
                    <div class="mb-1">
                        <label for="searchUID" class="block text-gray-800 text-lg font-semibold pl-1 mb-2">UID</label>
                        <input type="text" id="searchUID" name="searchUID" placeholder="Masukkan UID User"
                            value="{{ old('searchUID') }}"
                            class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-slate-700"
                            required>
                        @error('searchUID')
                            <span style="color: red;" class="pl-1">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="flex justify-between">
                        <div class="w-[55%]">
                            <label for="searchName"
                                class="block text-gray-800 text-lg font-semibold mb-2 pl-1">Nama</label>
                            <input type="text" id="searchName" name="searchName" placeholder="Nama"
                                value="{{ old('searchName') }}"
                                class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none" required>
                            @error('searchName')
                                <span style="color: red;">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="w-[37%]">
                            <label for="searchStatus"
                                class="block text-gray-800 text-lg font-semibold mb-2 pl-1">Status</label>
                            <input type="text" id="searchStatus" name="searchStatus" placeholder="Status"
                                value="{{ old('searchStatus') }}"
                                class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none" required>
                            @error('searchStatus')
                                <span style="color: red;">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>

                {{-- Data Barang --}}
                <div class="w-full flex justify-between mt-4 mb-2">
                    <div class="w-[75%] space-y-2">
                        <label for="barang1" class="pl-1 font-semibold">Barang 1</label>
                        <select name="barang1" id="barang1" class="w-full py-[0.6rem] pl-1" required>
                            <option value="">Pilih Barang</option>
                            @foreach ($barang as $item)
                                <option value="{{ $item->nama_barang }}"
                                    {{ old('barang1') == $item->nama_barang ? 'selected' : '' }}>
                                    {{ $item->nama_barang }}</option>
                            @endforeach
                        </select>
                        @error('barang1')
                            <span style="color: red;">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="w-[20%] space-y-2">
                        <label for="jumlah1" class="pl-1 font-semibold">Jumlah</label>
                        <input type="number" name="jumlah1" id="jumlah1" value="{{ old('jumlah1') }}" required
                            class="w-full pl-2 py-[0.51rem] appearance-none">
                    </div>
                </div>

                <div class="w-full flex justify-between mt-4 mb-2">
                    <div class="w-[75%] space-y-2">
                        <label for="barang2" class="pl-1 font-semibold">Barang 2</label>
                        <select name="barang2" id="barang2" class="w-full py-[0.6rem] pl-1">
                            <option value="">Pilih Barang</option>
                            @foreach ($barang as $item)
                                <option value="{{ $item->nama_barang }}"
                                    {{ old('barang2') == $item->nama_barang ? 'selected' : '' }}>
                                    {{ $item->nama_barang }}</option>
                            @endforeach
                        </select>
                        @error('barang2')
                            <span style="color: red;">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="w-[20%] space-y-2">
                        <label for="jumlah2" class="pl-1 font-semibold">Jumlah</label>
                        <input type="number" name="jumlah2" id="jumlah2" value="{{ old('jumlah2') }}"
                            class="w-full pl-2 py-[0.51rem] appearance-none">
                    </div>
                </div>

                <h1 class="text-sm text-red-600">*Hanya dapat meminjam 2 jenis barang!</h1>


                <div class="mb-4 mt-6">
                    <label for="tanggal_pinjam" class="block pl-1 font-semibold">Tanggal Pinjam:</label>
                    <input type="date" id="tanggal_pinjam" name="tanggal_pinjam"
                        value="{{ old('tanggal_pinjam') }}" required
                        class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500">
                    @error('tanggal_pinjam')
                        <div class="text-red-500 text-sm mt-2">{{ $message }}</div>
                    @enderror
                </div>


                <div>
                    <label for="tanggal_kembali" class="block pl-1 font-semibold">Tanggal Kembali:</label>
                    <input type="date" id="tanggal_kembali" name="tanggal_kembali"
                        value="{{ old('tanggal_kembali') }}" required
                        class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500">
                    @error('tanggal_kembali')
                        <div class="text-red-500 text-sm mt-2">{{ $message }}</div>
                    @enderror
                </div>

                <div class="w-full mx-auto text-center">
                    <button type="submit"
                        class="bg-slate-700 text-white px-4 py-2 rounded-md mt-7 w-[70%] font-semibold tracking-wide">Submit</button>
                </div>
            </form>


        </div>
    </div>



    <x-footer></x-footer>

    {{-- <script>
        function fetchNama() {
            const uid = document.getElementById('searchUID').value;

            if (uid.trim() !== "") {
                fetch(`/get-user-info?uid=${uid}`)
                    .then(response => response.json())
                    .then(data => {
                        // Isi kolom nama dan status dengan data yang diterima
                        document.getElementById('searchName').value = data.nama || '';
                        document.getElementById('searchStatus').value = data.status || '';
                    })
                    .catch(error => {
                        console.error('Error:', error);
                    });
            }
        }
    </script> --}}

</body>

</html>
