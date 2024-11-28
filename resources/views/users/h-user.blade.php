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
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
</head>

<body class="select-none">
    <x-navbar></x-navbar>

<<<<<<< HEAD
    <header class="bg-white shadow">
        <div class="mx-auto max-w-7xl px-8 py-6 text-center sm:px-6 lg:text-center">
            <h1 class="text-3xl font-semibold tracking-wide text-slate-700">Pinjamin.</h1>
        </div>
    </header>
=======
    {{-- <header class="bg-white shadow">
        <div class="mx-auto max-w-7xl px-8 py-6 text-center sm:px-6 lg:text-center">
            <h1 class="text-3xl font-semibold tracking-wide text-slate-700">Pinjamin.</h1>
        </div>
    </header> --}}
>>>>>>> 5ceee63523c621d4d6a35481391a31bae819c5b9

    {{-- Content 1 --}}
    <div class="w-full h-[40rem] bg-slate-100 relative">
        <div class="w-[80%] mx-auto flex flex-col lg:flex-row-reverse">
            <div>
                <img src="img/Content1.png" alt="">
            </div>
            <div class="text-center lg:text-left">
                <h1 class="text-2xl tracking-normal">
                    Pinjamin. merupakan aplikasi peminjaman barang berbasis website di Universitas Islam Maulana Malik
                    Ibrahim Kota Malang
                </h1>
                <div class="flex justify-center gap-4 py-4">
                    <button
                        class="px-6 py-2 bg-slate-700 text-white text-lg font-semibold tracking-wide rounded-lg ">List
                        Barang</button>
                    <button
                        class="px-6 py-2 bg-slate-700 text-white text-lg font-semibold tracking-wide rounded-lg ">Pinjam
                        Barang</button>
                </div>
            </div>
        </div>
        <div class="absolute -bottom-5 left-[45%] px-1 rounded-full bg-gray-300">
            <box-icon name='down-arrow-alt' color="#ffffff" size="45px"></box-icon>
        </div>
    </div>

    <div class="w-[80%] mx-auto text-center mt-20">
        <h1 class="text-3xl tracking-wide font-semibold text-gray-600">Memudahkan Proses Meminjam Barang</h1>
        <p class="mt-3 font-light">Pinjam barang secara ringkas dan cepat. <br> Buat proses pembelajaran menjadi
            efisien.
        </p>
    </div>

    <div class="flex flex-col pb-10 lg:flex-row lg:w-[83%] lg:mx-auto">
        <div class="w-[80%] mx-auto relative mt-20">
            <div class="absolute left-[45%] px-3 py-2 rounded-full bg-slate-700">
                <box-icon type='solid' name='calendar-check' color="#ffffff" size="30px"></box-icon>
            </div>
            <div class="mt-20 text-center">
                <h1 class="text-2xl text-gray-600 font-semibold tracking-wide">Syarat Pendaftaran Mudah</h1>
                <div class="w-3/4 mx-auto text-balance mt-2">
                    <p class="font-light text-gray-600 text-lg">
                        Login sesuai dengan UID dan sistem akan otomatis
                        mendeteksi status anda. Selamat datang!!
                    </p>
                </div>
            </div>
        </div>
        <div class="w-[80%] mx-auto relative mt-20">
            <div class="absolute left-[45%] px-3 py-2 rounded-full bg-slate-700">
                <box-icon type='solid' name='calendar-check' color="#ffffff" size="30px"></box-icon>
            </div>
            <div class="mt-20 text-center">
                <h1 class="text-2xl text-gray-600 font-semibold tracking-wide">Proses Pinjam Cepat</h1>
                <div class="w-5/6 mx-auto text-balance mt-2">
                    <p class="font-light text-gray-600 text-lg">
                        Masuk ke halaman pinjam barang,
                        terdapat form peminjaman dan isi form tersebut,
                        setelah itu peminjaman akan langsung terproses
                    </p>
                </div>
            </div>
        </div>
        <div class="w-[80%] mx-auto relative mt-20">
            <div class="absolute left-[45%] px-3 py-2 rounded-full bg-slate-700">
                <box-icon type='solid' name='calendar-check' color="#ffffff" size="30px"></box-icon>
            </div>
            <div class="mt-20 text-center">
                <h1 class="text-2xl text-gray-600 font-semibold tracking-wide">Pinjam Barang Lebih dari 1</h1>
                <div class="w-3/4 mx-auto text-balance mt-2">
                    <p class="font-light text-gray-600 text-lg">
                        Diperbolehkan meminjam lebih dari
                        satu barang dengan batas maksimal
                        peminjaman 3 hari
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="border-b-[1px] mx-12 my-8"></div>
<<<<<<< HEAD
    <div class="w-[80%] mx-auto pb-28   ">
=======
    <div class="w-[80%] mx-auto pb-28">
>>>>>>> 5ceee63523c621d4d6a35481391a31bae819c5b9
        <h1 class="text-2xl tracking-wide text-gray-600 font-semibold text-center">Langkah - langkah meminjam barang di Pinjamin :
        </h1>
        <div class="space-y-7 text-left">
            <div class="w-[87%] mx-auto mt-4 py-1 px-2 bg-gray-100 rounded-md shadow-md">
                <h2 class="text-xl pl-2">1. Masuk ke halaman Peminjaman</h2>
            </div>
            <div class="w-[87%] mx-auto mt-4 py-1 px-2 bg-gray-100 rounded-md shadow-md">
                <h2 class="text-xl pl-2">2. Isi form peminjaman sesuai dengan barang yang akan dipinjam</h2>
            </div>
            <div class="w-[87%] mx-auto mt-4 py-1 px-2 bg-gray-100 rounded-md shadow-md">
                <h2 class="text-xl pl-2">3. Klik tombol pinjam untuk melakukan peminjaman</h2>
            </div>
            <div class="w-[87%] mx-auto mt-4 py-1 px-2 bg-gray-100 rounded-md shadow-md">
                <h2 class="text-xl pl-2">4. Pergi ke tempat barang dan tunjukkan bukti peminjaman kepada admin</h2>
            </div>
            <div class="w-[87%] mx-auto mt-4 py-1 px-2 bg-gray-100 rounded-md shadow-md">
                <h2 class="text-xl pl-2">5. Terima barang dan barang siap digunakan</h2>
            </div>
            <div class="w-[90%] mx-auto pl-1">
                <h2 class="font-semibold text-lg">Catatan*</h2>
                <p class="font-light">Barang yang sudah dipinjam, sepenuhnya menjadi tanggung jawab peminjam, apabila ada kerusakan maka ada pertanggung jawaban, dan Harap dikembalikan tepat waktu, Terima kasih.</p>
            </div>
        </div>
    </div>


    <x-footer></x-footer>
</body>

</html>
