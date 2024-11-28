<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter+Tight:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body class="select-none scroll-smooth">
    <x-navbar></x-navbar>

    @if (session('sukses'))
        <script>
            Swal.fire({
                position: 'top-end',
                icon: 'success',
                title: "{{ session('sukses') }}",
                showConfirmButton: false,
                timer: 1500
            });
        </script>
    @endif

    <header class="container mx-auto">
        <div class="w-[80%] mx-auto mt-16 text-center">
            <h1 class="text-3xl pb-3 font-semibold lg:text-5xl">Selamat datang Admin!</h1>
            <h1 class="text-2xl lg:text-3xl">Lorem ipsum dolor sit amet conse <br> ctetur adipisicing elit. Pariatur
                <br> possimus in hic Lorem
            </h1>
            <div class="flex mt-4 gap-6 justify-center">
                <a href="{{ route('tabel-view') }}">
                    <button
                        class="py-2 px-6 rounded-xl bg-transparent border-2 border-slate-700 hover:bg-slate-700 hover:text-white transition duration-300 ease-in-out lg:py-3 lg:px-10 lg:text-xl ">List
                        Barang</button>
                </a>
                <a href="/acc">
                    <button
                        class="py-2 px-7 rounded-xl bg-transparent border-2 border-slate-700 hover:bg-slate-700 hover:text-white transition duration-300 ease-in-out lg:py-3 lg:px-11 lg:text-xl ">Create
                        Account</button>
                </a>
            </div>
        </div>
    </header>

    {{-- Tabel 1 --}}
    <div class="container mx-auto mt-20 mb-32">
        <div class="w-[80%] mx-auto overflow-x-auto rounded-lg shadow-lg">
            <table class="min-w-full bg-white border border-gray-300 rounded-lg">
                <thead>
                    <tr class="bg-slate-700 text-white text-center">
                        <th class="px-6 py-3 text-sm font-semibold uppercase tracking-wide">No</th>
                        <th class="px-6 py-3 text-sm font-semibold uppercase tracking-wide">Nama</th>
                        <th class="px-6 py-3 text-sm font-semibold uppercase tracking-wide">Status</th>
                        <th class="px-6 py-3 text-sm font-semibold uppercase tracking-wide">Barang</th>
                        <th class="px-6 py-3 text-sm font-semibold uppercase tracking-wide">Jumlah</th>
                        <th class="px-4 py-3 text-sm font-semibold uppercase tracking-wide">Tanggal Pinjam</th>
                        <th class="px-4 py-3 text-sm font-semibold uppercase tracking-wide">Tanggal Kembali</th>
                        <th class="px-6 py-3 text-sm font-semibold uppercase tracking-wide">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($transaksi as $no => $trans)
                        <tr
                            class="border-b hover:bg-blue-50 transition-colors duration-200 {{ $no % 2 === 0 ? 'bg-gray-50' : 'bg-white' }}">
                            <td class="px-6 py-4 text-center text-gray-800">{{ $no + 1 }}</td>
                            <td class="px-6 py-4 text-center text-gray-800 first-letter:uppercase">
                                {{ $trans->searchName }}</td>
                            <td class="px-6 py-4 text-center">
                                <span
                                    class="py-1 px-3 rounded-full text-sm {{ $trans->searchStatus === 'Aktif' ? 'bg-green-100 text-green-700' : 'bg-red-100 text-red-700' }}">
                                    {{ $trans->searchStatus }}
                                </span>
                            </td>
                            <td class="px-6 py-4 text-center ">
                                <div class="py-1 px-3 rounded bg-slate-700 text-white mb-1">
                                    Barang 1: {{ $trans->barang1 }}
                                </div>
                                @if ($trans->barang2)
                                    <div class="py-1 px-3 rounded bg-indigo-700 text-white">
                                        Barang 2: {{ $trans->barang2 }}
                                    </div>
                                @endif
                            </td>
                            <td class="px-6 py-4 text-center ">
                                <div class="py-1 px-3 rounded bg-slate-700 text-white mb-1">
                                    {{ $trans->jumlah1 }}
                                </div>
                                @if ($trans->jumlah2)
                                    <div class="py-1 px-3 rounded bg-indigo-700 text-white">
                                        {{ $trans->jumlah2 }}
                                    </div>
                                @endif
                            </td>
                            <td class="px-6 py-4 text-center text-gray-800">{{ $trans->tanggal_pinjam }}</td>
                            <td class="px-6 py-4 text-center text-gray-800">{{ $trans->tanggal_kembali }}</td>
                            <td class="px-6 py-4 text-center">
                                <form action="{{ route('finish-transaksi', $trans->id) }}" method="post">
                                    @csrf
                                    <button type="submit"><i class='bx bxs-check-square text-2xl text-green-500'></i></button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="8" class="py-4 text-center text-gray-500">Tidak ada data transaksi yang
                                tersedia.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

    {{-- Footer --}}
    <x-footer></x-footer>
</body>

</html>
