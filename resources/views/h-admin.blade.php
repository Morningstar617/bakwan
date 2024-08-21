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

<body class="select-none">
    <x-navbar></x-navbar>

    <header class="container">
        <div class="w-[80%] mx-auto bg-slate-100 mt-16 text-center">
            <h1 class="text-3xl pb-3 font-semibold">Selamat datang!</h1>
            <h1 class="text-2xl">Lorem ipsum dolor sit amet conse <br> ctetur adipisicing elit. Pariatur possimus in hic Lorem</h1>
            <div class="flex mt-4 gap-6 justify-center">
                <button class="py-2 px-5 rounded-full bg-transparent border-2 border-primary hover:bg-primary hover:text-white transition duration-300 ease-in-out">Lihat Barang</button>
                <button class="py-2 px-7 rounded-full bg-transparent border-2 border-primary hover:bg-primary hover:text-white transition duration-300 ease-in-out">Feedback</button>
            </div>
        </div>
    </header>
    

</body>

</html>
