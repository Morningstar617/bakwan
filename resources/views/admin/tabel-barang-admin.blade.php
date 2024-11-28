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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>

    <x-navbar></x-navbar>

    <header class="bg-white shadow">
        <div class="mx-auto max-w-full px-8 py-6 flex gap-5 lg:ml-16 lg:mr-12">
            <a href="{{ route('admin.h-admin') }}"
                class="py-2 px-4 mr-10 bg-slate-700 rounded-md text-white font-semibold hover:bg-slate-800 transition duration-300">Back</a>
            <div class="lg:mx-auto mr-8">
                <h1 class="text-2xl font-bold tracking-wide text-gray-900 mt-1 lg:text-3xl">List Barang</h1>
            </div>
            <a href="{{ route('barang-admin') }}"
                class="py-2 px-4 bg-blue-900 rounded-md text-white font-semibold hover:bg-blue-950 transition duration-300">Input
                barang</a>
        </div>
    </header>


    <div class="mt-12">
        <table class="mx-auto w-[87%] lg:w-2/3">
            <tr class="text-sm lg:text-xl bg-slate-700 text-white">
                <th class="px-1 py-1 lg:px-4 lg:py-2">Kode <br> Barang</th>
                <th class="px-1 py-1 lg:px-4 lg:py-2">Nama Barang</th>
                <th class="px-1 py-1 lg:px-4 lg:py-2">Deskripsi Barang</th>
                <th class="px-1 py-1 lg:px-4 lg:py-2">Jumlah <br> Barang</th>
                <th class="px-10 py-1 lg:px-28 lg:py-2">Aksi</th>
            </tr>
            @foreach ($barang as $item)
                <tr class="text-center text-sm font-semibold border-t border-b border-gray-300">
                    <td class="py-3 border-l border-gray-300 lg:text-base">{{ $item->kode_barang }}</td>
                    <td class="py-3 border-l border-gray-300 lg:text-xl">{{ $item->nama_barang }}</td>
                    <td class="py-3 border-l border-gray-300 max-w-[6ch] whitespace-normal break-words lg:text-xl">
                        {{ $item->deskripsi_barang }}</td>
                    <td class="py-3 border-l border-gray-300 lg:text-xl">{{ $item->jumlah_barang }}</td>
                    <td class="py-3 border-l border-r border-gray-300 lg:text-xl">
                        <div class="block lg:flex justify-center gap-6">
                            {{-- edit --}}
                            <a href="{{ route('tabel.edit', $item->id) }}"
                                class="bg-slate-700 text-white font-semibold rounded-md px-6 py-1 hover:bg-slate-800 transition duration-300">Edit
                            </a>

                            {{-- delete --}}
                            <form action="{{ route('tabel.destroy', $item->id) }}" method="POST" class="delete-data">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                    class="bg-red-700 text-white font-semibold rounded-md px-4 py-1 hover:bg-red-800 transition duration-300">
                                    Delete
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>

    <script>
        document.querySelectorAll('.delete-data').forEach((form) => {
            form.addEventListener('submit', function(e) {
                e.preventDefault();

                // Memunculkan SweetAlert konfirmasi
                Swal.fire({
                    title: 'Apa Anda yakin?',
                    text: 'Barang akan dihapus permanen!',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonText: 'Ya, hapus!',
                    cancelButtonText: 'Batal',
                    reverseButtons: true
                }).then((result) => {
                    if (result.isConfirmed) {
                        form.submit();
                    } else {
                        Swal.fire('Dibatalkan', 'Data barang aman!', 'info');
                    }
                });
            });
        });
    </script>




</body>

</html>
