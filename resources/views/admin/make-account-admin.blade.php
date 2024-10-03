<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Account</title>
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


    <header class="bg-white shadow flex">
        <div class="py-7 pl-9 lg:pl-20">
            <a href="{{ route('h-admin') }}"
            class="py-2 px-4 bg-slate-700 rounded-md text-white font-semibold hover:bg-slate-800 transition duration-300">Back</a>
        </div>
        <div class="max-w-7xl py-6 pl-8 lg:pl-[26.5rem]">
            <h1 class="text-3xl text-center font-bold tracking-tight text-gray-900">Create Account</h1>
        </div>
    </header>

    <div class="mt-10 mb-28">
        
        <form action="{{ route('make.store') }}" method="POST" class="px-5 py-5 bg-gray-100 w-3/4 lg:w-1/3 mx-auto rounded-md shadow-lg">
            @csrf
            
            <label for="name" class="block text-xl font-semibold pb-2">Masukkan Nama</label>
            <div class="flex justify-between">
                <input type="text" name="name" required class="block w-[87%] py-1 px-2 rounded-md">
                <box-icon type='solid' name='user' class="mt-1"></box-icon>
            </div>
            <Label for="uid" class="block text-xl font-semibold py-2">UID</Label>
            <div class="flex justify-between">
                <input type="text" name="uid" required class="block w-[87%] py-1 px-2 rounded-md">
                <box-icon name='id-card' type='solid' class="mt-1"></box-icon>
            </div>
            <Label for="password" class="block text-xl font-semibold py-2">Password</Label>
            <div class="flex justify-between">
                <input type="password" name="password" required class="block w-[87%] py-1 px-2 rounded-md">
                <box-icon type='solid' name='lock-alt'></box-icon>
            </div>
            <label for="role" class="text-xl font-semibold pt-3 flex">
                <p>Role</p><span class="text-red-700">*</span>
            </label>
            <div class="flex">
                <span class="flex mr-4">
                    <input type="radio" name="role" id="univ" value="univ"
                        class="w-4 h-4 mt-1 border-2 rounded-md border-gray-400 appearance-none checked:bg-slate-700 focus:outline-none">
                    <p class="pl-1 text-base font-light">Universitas</p>
                </span>
                <span class="flex mr-4">
                    <input type="radio" name="role" id="dosen" value="dosen"
                        class="w-4 h-4 mt-1 border-2 rounded-md border-gray-400 appearance-none checked:bg-slate-700 focus:outline-none">
                    <p class="pl-1 text-base font-light">Dosen</p>
                </span>
                <span class="flex">
                    <input type="radio" name="role" id="mahasiswa" value="mahasiswa"
                        class="w-4 h-4 mt-1 border-2 rounded-md  border-gray-400 appearance-none checked:bg-slate-700 focus:outline-none">
                    <p class="pl-1 text-base font-light">Mahasiswa</p>
                </span>
            </div>
            <div class="mt-8 w-3/5 mx-auto py-1 text-center rounded-md bg-slate-700">
                <button class="text-lg font-semibold text-white tracking-wide">Submit</button>
            </div>

        </form>
    </div>

    <x-footer></x-footer>

</body>

</html>
