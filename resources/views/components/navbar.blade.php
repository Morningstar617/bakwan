<div>
<<<<<<< HEAD
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
=======
  <nav class="bg-slate-700" x-data="{ isOpen: false }">
    <div class="mx-auto max-w-7xl px-4 sm:px-8 lg:px-8">
        <div class="flex h-16 items-center justify-between">
            <div class="flex items-center">
                <div class="flex-shrink-0">
                    <a href="home">
                        <img class="h-12 w-16" src="img/main-logo.png"
                        alt="Your Company">
                    </a>
                </div>
                <div class="hidden md:block">
                    <div class="ml-10 flex items-baseline space-x-4 lg:ml-3">
                        <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                        <a href="/home"
                            class="rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:text-white"
                            aria-current="page">Home</a>
                        <a href="/admin.tabel-barang-admin"
                            class="rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:text-white transition duration-300">List Barang</a>
                        <a href="{{ route ('trans-index') }}"
                            class="rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:text-white transition duration-300">Pinjam Barang</a>
                        <a href="/contact"
                            class="rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:text-white transition duration-300">{{ $slot }}</a>
                    </div>
                </div>
            </div>
            <div class="hidden md:block">
                <div class="ml-4 flex items-center md:ml-6">

                    <!-- Profile dropdown -->
                    <div class="relative ml-3">
                        <div>
                            <button type="button" @click="isOpen = !isOpen"
                                class="relative flex max-w-xs items-center rounded-full bg-gray-800 text-sm focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800"
                                id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                                <span class="absolute -inset-1.5"></span>
                                <span class="sr-only">Open user menu</span>
                                <img class="h-8 w-8 rounded-full"
                                    src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                    alt="">
                            </button>
                        </div>

                        <div x-show="isOpen" x-transition:enter="transition ease-out duration-100 transform"
                            x-transition:enter-start="opacity-0 scale-95"
                            x-transition:enter-end="opacity-100 scale-100"
                            x-transition:leave="transition ease-in duration-75 transform"
                            x-transition:leave-start="opacity-100 scale-100"
                            x-transition:leave-end="opacity-0 scale-95"
                            class="absolute right-0 z-10 mt-2 w-48 origin-top-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none"
                            role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button"
                            tabindex="-1">
                            <!-- Active: "bg-gray-100", Not Active: "" -->
                            <a href="#" class="block px-4 py-2 text-sm text-gray-800" role="menuitem"
                                tabindex="-1" id="user-menu-item-0">Your Profile</a>
                            <a href="#" class="block px-4 py-2 text-sm text-gray-800" role="menuitem"
                                tabindex="-1" id="user-menu-item-1">Settings</a>
                            <a href="#" class="block px-4 py-2 text-sm text-gray-800" role="menuitem"
                                tabindex="-1" id="user-menu-item-2">Sign out</a>
                        </div>
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
            <a href="/home" class="block rounded-md hover:bg-gray-800 px-4 py-2 text-base font-medium text-gray-300"
                aria-current="page">Home</a>
            <a href="/admin.tabel-barang-admin"
                class="block rounded-md px-4 py-2 text-base font-medium text-gray-300 hover:bg-gray-800 hover:text-white">List Barang</a>
            <a href="/admin.transaksi-admin"
                class="block rounded-md px-4 py-2 text-base font-medium text-gray-300 hover:bg-gray-800 hover:text-white">Pinjam Barang</a>
            {{-- <a href="#"
                class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-800 hover:text-white">{{ $slot }}</a> --}}
            <div class="border-t border-gray-700 pb-8 pt-4 flex justify-between">
                <div class="flex items-center px-4">
                    <div class="flex-shrink-0">
                        <img class="h-10 w-10 rounded-full"
                            src="img/userLogo-pinjamin.jpg"
                            alt="">
                    </div>
                    <div class="ml-3">
                        <div class="text-base font-medium leading-none text-white pb-2">Admin</div>
                        <div class="text-sm font-medium leading-none text-gray-400">Admin123@gmail.com</div>
                    </div>
                </div>
                <div class="mt-3 space-y-1 px-4">
                    <a href="/login">
                        <button class="px-6 py-2 text-base text-white bg-red-500 rounded-md hover:bg-red-700 transition duration-300 ease-in-out">Sign Out</button>
                    </a>
>>>>>>> 5ceee63523c621d4d6a35481391a31bae819c5b9
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
