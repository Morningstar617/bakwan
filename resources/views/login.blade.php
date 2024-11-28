<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter+Tight:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    @vite('resources/css/app.css')
</head>

<body class="select-none">
    {{-- Hero start --}}
    <div class="container mx-auto">
        @if ($errors->any())
            <div class="alernt">
                <ul>
                    @foreach ($errors->all() as $item)
                        <li>{{ $item }}</li>
                    @endforeach
                </ul>

            </div>

        @endif
        <div class="w-1/5 h-24 mx-auto mt-20 lg:mt-10">
            <img src="img/logo-uin.png" alt="primary-logo" class="w-20 mx-auto pt-1 lg:w-28">
        </div>
        <div class="w-3/4 h-[17.5rem] bg-slate-200 mx-auto mt-5 shadow-lg rounded-sm lg:w-[35%] lg:h-[21rem] lg:mt-16 ">
            <div class="w-1/2 mx-auto mt-3 text-center">
                <h1 class="text-3xl font-bold p-2 text-dark lg:text-4xl lg:p-3">Sign in</h1>
            </div>
            <form action="" method="post" class="w-11/12 mx-auto h-56 mt-4 lg:mt-4">
                @csrf

                {{-- Input NIM --}}
                <input type="text" value="{{ old('uid') }}" id="uid" name="uid"
                    placeholder="Masukkan uid" class="w-full text-base px-3 py-3 rounded-sm lg:py-4 lg:text-xl">
                {{-- Input Password --}}
                <input type="password" id="password" name="password" placeholder="Masukkan Password"
                    class="w-full text-base px-3 py-3 rounded-sm mt-6 lg:py-4 lg:text-xl lg:mt-8">
                {{-- Button Login --}}
                <button name="submit" type="submit" id="btn-login"
                    class="min-w-full mt-6 py-2 px-8 bg-slate-700 text-lg text-white rounded-sm lg:text-2xl lg:py-3 hover:bg-slate-500 transition duration-300">Login</button>
            </form>
        </div>
    </div>




    {{-- Hero end --}}
    <script src="js/script.js"></script>
</body>

</html>
