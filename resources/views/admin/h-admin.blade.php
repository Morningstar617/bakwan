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
</head>

<body class="select-none scroll-smooth">
    <x-navbar></x-navbar>

    <header class="container mx-auto">
        <div class="w-[80%] mx-auto mt-16 text-center">
            <h1 class="text-3xl pb-3 font-semibold lg:text-5xl">Selamat datang Admin!</h1>
            <h1 class="text-2xl lg:text-3xl">hari yang baru untuk memulai pengelolaan pinjamin, manfaatkan semua fitur dan puaskan peminjam</h1>
            <div class="flex mt-4 gap-6 justify-center">
              <a href="{{route ('tabel-view') }}">
                <button class="py-2 px-6 rounded-xl bg-transparent border-2 border-slate-700 hover:bg-slate-700 hover:text-white transition duration-300 ease-in-out lg:py-3 lg:px-10 lg:text-xl ">List Barang</button>
              </a>
              <a href="createAccount">
                <button class="py-2 px-7 rounded-xl bg-transparent border-2 border-slate-700 hover:bg-slate-700 hover:text-white transition duration-300 ease-in-out lg:py-3 lg:px-11 lg:text-xl ">Create Account</button>
              </a>
            </div>
        </div>
    </header>

    {{-- Tabel 1 --}}
    <div class="container mx-auto mt-20 mb-32">
        <div class="w-[80%] mx-auto flex flex-col lg:flex-row justify-center bg-slate-50 p-4 shadow-2xl lg:w-[80%] lg:gap-16 lg:h-96 lg:p-10">
            <table style="border-collapse: collapse;">
                <!-- Table caption -->
                <caption class="text-2xl pb-4 font-semibold">Data Peminjam</caption>
                
                <!-- Table header -->
                <thead>
                  <tr>
                    <th rowspan="2" class="border-[1px] border-slate-800 p-1 text-slate-100 bg-slate-700 text-center">ID</th>
                    <th rowspan="2" class="border-[1px] border-slate-800 p-1 text-slate-100 bg-slate-700 text-center">Name</th>
                    <th rowspan="2" class="border-[1px] border-slate-800 p-1 text-slate-100 bg-slate-700 text-center">Status</th>
                    <th rowspan="2" class="border-[1px] border-slate-800 p-1 text-slate-100 bg-slate-700 text-center">Nama Barang</th>
                    <th rowspan="2" class="border-[1px] border-slate-800 p-1 text-slate-100 bg-slate-700 text-center">Tanggal Pinjam</th>
                    <th rowspan="2" class="border-[1px] border-slate-800 p-1 text-slate-100 bg-slate-700 text-center">Tanggal Kembali</th>
                  </tr>
                </thead>
                
                <!-- Table body -->
                <tbody>
                  <tr>
                    <td class="border-[1px] border-slate-800 p-1 px-3 text-center">1</td>
                    <td class="border-[1px] border-slate-800 p-1 text-center">Ripqi</td>
                    <td class="border-[1px] border-slate-800 p-1 text-center">Dosen</td>
                    <td class="border-[1px] border-slate-800 p-1 text-center">Proyektor</td>
                    <td class="border-[1px] border-slate-800 p-1 text-center">02-11-2024</td>
                    <td class="border-[1px] border-slate-800 p-1 text-center">03-11-2024</td>
                  </tr>
                  <tr>
                    <td class="border-[1px] border-slate-800 p-1 px-3 text-center">2</td>
                    <td class="border-[1px] border-slate-800 p-1 text-center">Ripqi</td>
                    <td class="border-[1px] border-slate-800 p-1 text-center">Dosen</td>
                    <td class="border-[1px] border-slate-800 p-1 text-center">Proyektor</td>
                    <td class="border-[1px] border-slate-800 p-1 text-center">02-11-2024</td>
                    <td class="border-[1px] border-slate-800 p-1 text-center">03-11-2024</td>
                  </tr>
                  <tr>
                    <td class="border-[1px] border-slate-800 p-1 px-3 text-center">3</td>
                    <td class="border-[1px] border-slate-800 p-1 text-center">Ripqi</td>
                    <td class="border-[1px] border-slate-800 p-1 text-center">Dosen</td>
                    <td class="border-[1px] border-slate-800 p-1 text-center">Proyektor</td>
                    <td class="border-[1px] border-slate-800 p-1 text-center">02-11-2024</td>
                    <td class="border-[1px] border-slate-800 p-1 text-center">03-11-2024</td>
                  </tr>
                </tbody>
                
                <!-- Table footer -->
                <tfoot>
                  <tr>
                    <td colspan="7" class="border-[1px] border-slate-800 p-2 text-center">Jumlah Peminjam: 3</td>
                  </tr>
                </tfoot>
              </table>
            <table style="border-collapse: collapse;">
                <!-- Table caption -->
                <caption class="text-2xl pb-4 mt-8 lg:mt-0 font-semibold">Persentase Peminjaman</caption>
                
                <!-- Table header -->
                <thead>
                  <tr>
                    <th rowspan="2" class="border-[1px] border-slate-800 p-1 text-slate-100 bg-slate-700 text-center">Bulan ke</th>
                    <th rowspan="2" class="border-[1px] border-slate-800 p-1 text-slate-100 bg-slate-700 text-center">Bulan</th>
                    <th rowspan="2" class="border-[1px] border-slate-800 p-1 text-slate-100 bg-slate-700 text-center">Tahun</th>
                    <th rowspan="2" class="border-[1px] border-slate-800 p-1 text-slate-100 bg-slate-700 text-center">Jumlah Peminjam</th>
                  </tr>
                </thead>
                
                <!-- Table body -->
                <tbody>
                  <tr>
                    <td class="border-[1px] border-slate-800 p-1 text-center">1</td>
                    <td class="border-[1px] border-slate-800 p-1 px-5 text-center">Januari</td>     
                    <td class="border-[1px] border-slate-800 p-1 px-5 text-center">2024</td>
                    <td class="border-[1px] border-slate-800 p-1 text-center">162</td>
                  </tr>
                  <tr>
                    <td class="border-[1px] border-slate-800 p-1 text-center">2</td>
                    <td class="border-[1px] border-slate-800 p-1 px-5 text-center">Februari</td>
                    <td class="border-[1px] border-slate-800 p-1 px-5 text-center">2024</td>
                    <td class="border-[1px] border-slate-800 p-1 text-center">162</td>
                  </tr>
                  <tr>
                    <td class="border-[1px] border-slate-800 p-1 text-center">3</td>
                    <td class="border-[1px] border-slate-800 p-1 px-5 text-center">Maret</td>
                    <td class="border-[1px] border-slate-800 p-1 px-5 text-center">2024</td>
                    <td class="border-[1px] border-slate-800 p-1 text-center">162</td>
                  </tr>
                </tbody>
                
                <!-- Table footer -->
                <tfoot>
                  <tr>
                    <td colspan="7" class="border-[1px] border-slate-800 p-2 text-center">Total Peminjam per-tahun: 1032</td>
                  </tr>
                </tfoot>
              </table>
        </div>
    </div>

    {{-- Footer --}}
    <x-footer></x-footer>
</body>

</html>
