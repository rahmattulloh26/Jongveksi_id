  <header class="w-full fixed top-0 z-10 cursor-pointer">
        <div class=" bg-white py-3 px-0 md:py-2 lg:py-4 xl:py-0  md:px-10 ">
            <div class="container mx-auto flex items-center justify-between px-3   ">

                {{-- ==== Kiri: Logo ==== --}}
                <div class="flex items-center pl-10  md:pl-15 ">
                    <a href="/">
                        <img src="/src/img/jongveksi.png" alt="Jongveksi Logo"
                            class="w-20 md:w-25 lg:w-30 xl:w-40 object-contain">
                    </a>
                </div>

                {{-- ==== Tengah / Kanan: Navigation Menu ==== --}}
                <nav id="nav-menu"
                    class="hidden absolute py-3  bg-white  max-w-[200px] w-full right-0 top-full xl:block xl:static xl:bg-transparent xl:py-6 lg:px-6 xl:max-w-full rounded-bl-2xl xl:rounded-none z-50">
                    <ul
                        class="block xl:flex xl:items-center text-black xl:pl-[200px]  font-bold font-family-abhaya-sm  text-sm">
                        <li><a href="/"
                                class="{{ request()->is('/') ? 'text-red-jongveksi' : 'text-black' }} py-2.5 px-6 md:px-4 lg:px-0 xl:px-4  flex font-semibold   ">Home</a>
                        </li>
                        <li class="group relative block xl:flex items-center  ">
                            <a href="/produk" id="produk-dropdown-btn"
                                class=" {{ request()->is('/produk') ? 'text-red-jongveksi' : 'text-black' }} py-2.5 px-6 md:px-4   lg:px-0 xl:px-4   flex items-center font-semibold text-sm hover:text-red-jongveksi cursor-pointer ">
                                Produk Kami
                                <svg class=" w-4 h-4 ml-1 transition-transform duration-200" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 9l-7 7-7-7" />
                                </svg>
                            </a>
                            <div id="produk-dropdown-menu"
                                class="hidden xl:absolute right-0 xl:top-full lg:mt-2 w-full xl:w-40 bg-white  hover:text-red-jongveksi rounded-md py-1 xl:z-20">
                                <a href="/produk/opsi-1"
                                    class="block px-8 py-2.5 lg:px-3  font-family-abhaya-sm font-semibold text-black  hover:text-red-jongveksi hover:bg-gray-100">
                                    1: Jaket</a>
                                <a href="/produk/opsi-2"
                                    class="block px-8 py-2.5 lg:px-3 font-family-abhaya-sm font-semibold text-black hover:text-red-jongveksi hover:bg-gray-100">
                                    2: PDH/PDL</a>
                                <a href="/produk/opsi-3"
                                    class="block px-8 py-2.5 lg:px-3 font-family-abhaya-sm font-semibold text-black hover:text-red-jongveksi hover:bg-gray-100">
                                    3: Almamater C</a>
                                <a href="/produk/opsi-4"
                                    class="block px-8 py-2.5 lg:px-3 font-family-abhaya-sm font-semibold text-black hover:text-red-jongveksi hover:bg-gray-100">
                                    4: Varsity</a>
                            </div>
                        </li>
                        <li><a href="/layanan"
                                class="{{ request()->is('layanan') ? 'text-red-jongveksi' : 'text-black' }} py-2.5 px-6 md:px-4 lg:px-0 xl:px-4   flex font-semibold">Layanan
                            </a></li>
                        <li><a href="/klien"
                                class=" {{ request()->is('klien') ? 'text-red-jongveksi' : 'text-black' }} py-2.5 px-6 md:px-4 lg:px-0 xl:px-4   flex font-semibold ">Klien
                                Kami </a></li>
                        <li><a href="/about"
                                class="{{ request()->is('tentang-kami') ? 'text-red-jongveksi' : 'text-black' }} py-2.5 px-6 md:px-4 lg:px-0 xl:px-4   flex font-semibold ">Tentang
                                Kami </a></li>
                        <li><a href="/cek-progrs"
                                class="{{ request()->is('cek-progres') ? 'text-red-jongveksi' : 'text-black' }} py-2.5 px-6 md:px-4 lg:px-0 xl:px-4   flex font-semibold ">Cek
                                Progres
                                Produksi</a></li>
                    </ul>
                </nav>

                {{-- ==== Kanan: Tombol Aksi + Hamburger ==== --}}
                <div class="flex items-center space-x-3">
                    <div class="hidden xl:flex md:pr-16  items-center space-x-3">
                        <a href="/tanya-harga"
                            class=" button px-10 py-2  text-sm  rounded-[1%]  hover:bg-red-800 transition-colors whitespace-nowrap">
                            Order Disini
                        </a>
                    </div>

                    {{-- Hamburger hanya tampil di mobile --}}
                    <button id="hamburger" name="hamburger" type="button" class="block p-3 xl:hidden">
                        <span
                            class="hamburger-line block w-[25px] h-[2px] my-1 bg-black transition duration-300 ease-in-out origin-bottom-left"></span>
                        <span
                            class="hamburger-line block w-[25px] h-[2px] my-1 bg-black transition duration-300 ease-in-out"></span>
                        <span
                            class="hamburger-line block w-[25px] h-[2px] my-1 bg-black transition duration-300 ease-in-out origin-bottom-left"></span>
                    </button>
                </div>

            </div>
        </div>
    </header>