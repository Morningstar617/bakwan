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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <x-navbar></x-navbar>

    <header class="bg-white shadow flex">
        <div class="py-7 pl-9 lg:pl-20">
            <a href="{{ route('h-admin') }}"
                class="py-2 px-4 bg-slate-700 rounded-md text-white font-semibold hover:bg-slate-800 transition duration-300">Back</a>
        </div>
        <div class="max-w-7xl py-6 pl-8 lg:pl-[26.5rem]">
            <h1 class="text-3xl text-center font-bold tracking-wide text-gray-900">Pinjam Barang</h1>
        </div>
    </header>

    <div class="px-10 pt-10 pb-4">
        <form action="{{ route('trans-search') }}" method="GET"
            class="w-full lg:w-1/2 mx-auto p-4 bg-gray-100 shadow-md rounded-lg mb-6">
            <div class="flex flex-col space-y-4">

                {{-- uid --}}
                <div class="mb-1">
                    <label for="searchUID" class="block text-gray-800 text-lg font-semibold ml-1 mb-2">UID</label>
                    <div class="flex items-center">
                        <input type="text" id="searchUID" name="searchUID" placeholder="Search UID"
                            value="{{ request('searchUID') }}"
                            class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-slate-700"
                            oninput="fetchNama()">
                    </div>
                    <div id="uidError"></div>
                </div>

                {{-- nama --}}
                <div class="mb-4">
                    <label for="searchName" class="block text-gray-800 text-lg font-semibold mb-2">Nama</label>
                    <input type="text" id="searchName" name="searchName" placeholder="Nama"
                        value="{{ request('searchName') }}"
                        class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none cursor-default"
                        readonly>
                </div>

                {{-- status --}}
                <div class="mb-4">
                    <label for="searchStatus" class="block text-gray-800 text-lg font-semibold mb-2">Status</label>
                    <input type="text" id="searchStatus" name="searchStatus" placeholder="Status"
                        value="{{ request('searchStatus') }}"
                        class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none cursor-default"
                        readonly>
                </div>

                {{-- random code  --}}
                <div class="mb-4">
                    <label for="searchKode" class="block text-gray-800 text-lg font-semibold mb-2">Status</label>
                    <input type="text" id="searchKode" name="searchKode" placeholder="kode transaksi"
                        value="{{ request('searchKode') }}"
                        class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none cursor-default"
                        readonly>
                </div>


                {{-- search button --}}
                <div class="flex items-center">
                    <input type="text" name="search" placeholder="Search Products" value="{{ request('search') }}"
                        class="border p-2 rounded-lg flex-1 focus:outline-none focus:ring-2 focus:ring-slate-700">
                    <button type="submit"
                        class="bg-blue-900 hover:bg-blue-950 text-white font-semibold rounded-md px-4 py-2 ml-2 transition duration-300">Search</button>
                </div>
            </div>
        </form>
    </div>

    @if (count($barang) > 0)
        <div class="px-10 pb-32">
            <table class="mx-auto w-full lg:w-2/3 bg-white border border-gray-300">
                <thead>
                    <tr class="text-sm lg:text-xl bg-slate-700 text-white">
                        <th class="px-1 py-1 lg:px-4 lg:py-2">Kode <br> Barang</th>
                        <th class="px-1 py-1 lg:px-4 lg:py-2">Nama Barang</th>
                        <th class="px-1 py-1 lg:px-4 lg:py-2">Deskripsi Barang</th>
                        <th class="px-1 py-1 lg:px-4 lg:py-2">Jumlah <br> Barang</th>
                        <th class="px-10 py-1 lg:px-28 lg:py-2">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($barang as $item)
                        <tr class="text-center text-sm lg:text-xl font-semibold border-t border-b border-gray-300">
                            <td class="py-3 border-l border-gray-300">{{ $item->kode_barang }}</td>
                            <td class="py-3 border-l border-gray-300">{{ $item->nama_barang }}</td>
                            <td class="py-3 border-l border-gray-300 max-w-[10ch] whitespace-normal break-words">
                                {{ $item->deskripsi_barang }}</td>
                            <td class="py-3 border-l border-gray-300">{{ $item->jumlah_barang }}</td>
                            <td class="py-3 border-l border-r border-gray-300">
                                <div class="block lg:flex justify-center gap-6">
                                    <a href="{{ route('tabel.edit', $item->kode_barang) }}"
                                        class="bg-slate-700 text-white font-semibold rounded-md px-4 py-1 hover:bg-slate-800 transition duration-300">Tambah
                                    </a>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @else
        <p class="text-center text-gray-700 pb-28 text-lg">Cari barang yang kamu perlukan</p>
    @endif

    <div class="w-2/3 bg-gray-100 mx-auto shadow-xl">
        <div class="pt-4 pb-2 flex gap-2 border-b-[1px] border-gray-300 mx-6">
            <h1 class="text-2xl font-semibold tracking-wide text-gray-800">Jumlah Barang</h1>
            <box-icon name='cart-add' color='#1f2937' size="28px" class="pt-[0.15rem]"></box-icon>
        </div>
        <div class="pt-2 mx-6">
            <table>
                <tbody>
                    @foreach ($barang as $item)
                        <td>
                            <input type="checkbox" name="check" checked id="check" class="mr-2">
                        </td>
                        <td class="pr-[5.4rem] text-xl">{{ $item->nama_barang }}</td>
                        <td class="pt-2">
                            <div class="flex gap-2">
                                <button>
                                    <box-icon name='minus' color="#ffffff" class="bg-red-500 rounded-xl">
                                    </box-icon>
                                </button>
                                <div>{{ $item->jumlah_barang }}</div>
                                <button>
                                    <box-icon name='plus' color="#ffffff" class="bg-slate-700 rounded-xl">
                                    </box-icon>
                                </button>
                            </div>
                        </td>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="mt-8 w-full text-center pb-5 flex justify-center gap-2">
            <button
                class="bg-blue-900 px-12 text-white hover:bg-blue-950 text-lg tracking-wide font-semibold rounded-md transition duration-300">Pinjam
            </button>
            <button>
                <box-icon type='solid' size="25px" name='trash' class="pt-1"></box-icon>
            </button>
        </div>
    </div>


    <div class="pb-96"></div>

    <script>
        function fetchNama() {
            const uid = document.getElementById('searchUID').value;

            if (uid) {
                fetch(`{{ route('trans-uid') }}?uid=${uid}`)
                    .then(response => response.json())
                    .then(data => {
                        if (!data.error) {
                            document.getElementById('searchName').value = data.name;
                            document.getElementById('searchStatus').value = data.role;
                            document.getElementById('searchKode').value = data.kode_transaksi;
                        } else {
                            document.getElementById('searchName').value = '';
                            document.getElementById('searchStatus').value = '';
                            document.getElementById('searchKode').value = '';
                            // alert(data.message);
                            Swal.fire({
                                title: "WARNING",
                                text: data.message,
                                icon: "warning",
                                showCloseButton: true,
                                confirmButtonColor: "#334155",
                            })
                        }

                    })
                    .catch(error => console.error('Error:', error));
            } else {
                document.getElementById('searchName').value = '';
                document.getElementById('searchStatus').value = '';
                document.getElementById('searchKode').value = '';
            }
        }
    </script>

</body>

</html>
