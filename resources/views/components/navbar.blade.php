<div>
    <nav class="bg-slate-700" x-data="{ isOpen: false }">
        <div class="mx-auto max-w-7xl px-4 sm:px-8 lg:px-8">
            <div class="flex h-16 items-center justify-between">
                <div class="flex items-center">
                    <div class="flex-shrink-0">
                        <a href="home">
                            <img class="h-12 w-16" src="img/main-logo.png" alt="Your Company">
                        </a>
                    </div>
                    <div class="hidden md:block">
                        <div class="ml-10 flex items-baseline space-x-4 lg:ml-3">
                            <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                            <a href="/home"
                                class="rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:text-white"
                                aria-current="page">Home</a>
                            <a href="/admin.tabel-barang-admin"
                                class="rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:text-white transition duration-300">List
                                Barang</a>
                            <a href="{{ route('trans-index') }}"
                                class="rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:text-white transition duration-300">Pinjam
                                Barang</a>
                            <a href="/contact"
                                class="rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:text-white transition duration-300">{{ $slot }}</a>
                        </div>
                    </div>
                </div>
                
                <div class="mr-2 flex md:hidden">
                    <!-- Mobile menu button -->
                    <button type="button" @click="isOpen = !isOpen"
                        class="relative inline-flex items-center justify-center rounded-md bg-slate-700 p-2 text-gray-400 hover:bg-slate-900 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800 transition duration-300"
                        aria-controls="mobile-menu" aria-expanded="false">
                        <span class="absolute -inset-0.5"></span>
                        <span class="sr-only">Open main menu</span>
                        <!-- Menu open: "hidden", Menu closed: "block" -->
                        <svg :class="{ 'hidden': isOpen, 'block': !isOpen }" class="block h-6 w-6" fill="none"
                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                        </svg>
                        <!-- Menu open: "block", Menu closed: "hidden" -->
                        <svg :class="{ 'block': isOpen, 'hidden': !isOpen }" class="hidden h-6 w-6" fill="none"
                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile menu, show/hide based on menu state. -->
        <div x-show="isOpen" class="md:hidden" id="mobile-menu">
            <div class="space-y-1 px-2 pb-3 pt-2 sm:px-3">
                <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                <a href="/home"
                    class="block rounded-md hover:bg-gray-800 px-4 py-2 text-base font-medium text-gray-300"
                    aria-current="page">Home</a>
                <a href="/admin.tabel-barang-admin"
                    class="block rounded-md px-4 py-2 text-base font-medium text-gray-300 hover:bg-gray-800 hover:text-white">List
                    Barang</a>
                <a href="/admin.transaksi-admin"
                    class="block rounded-md px-4 py-2 text-base font-medium text-gray-300 hover:bg-gray-800 hover:text-white">Pinjam
                    Barang</a>
                {{-- <a href="#"
                class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-800 hover:text-white">{{ $slot }}</a> --}}
                <div class="border-t border-gray-700 pb-8 pt-4 flex justify-between">
                    <div class="flex items-center px-4">
                        <div class="flex-shrink-0">
                            <img class="h-10 w-10 rounded-full" src="img/userLogo-pinjamin.jpg" alt="">
                        </div>
                        <div class="ml-3">
                            <div class="text-base font-medium leading-none text-white pb-2">Admin</div>
                            <div class="text-sm font-medium leading-none text-gray-400">Admin123@gmail.com</div>
                        </div>
                    </div>
                    <div class="mt-3 space-y-1 px-4">
                        @if (Auth::check())
                            <form action="{{ route('logout') }}" method="post">
                                @csrf
                                <button
                                    class="px-6 py-2 text-base text-white bg-red-500 rounded-md hover:bg-red-700 transition duration-300 ease-in-out">Sign
                                    Out</button>
                            </form>
                        @endif
                    </div>
                </div>
            </div>
    </nav>
</div>
