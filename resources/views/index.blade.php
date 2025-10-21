<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
    @endif
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Abhaya+Libre:wght@400;500;600;700;800&display=swap"
        rel="stylesheet">
    <title>Dashboard Jongveksi_id</title>
</head>

<body>

    <header class="w-full relative z-10 cursor-pointer">
        <div class="md:bg-white bg-white bg-transparent py-3 md:py-2 lg:py-4 xl:py-0  px-0 md:px-10 ">
            <div class="container mx-auto flex items-center justify-between px-3 md:bg-white ">

                {{-- ==== Kiri: Logo ==== --}}
                <div class="flex items-center pl-10 md:pl-25 ">
                    <a href="/">
                        <img src="/src/img/jongveksi.jpg" alt="Jongveksi Logo"
                            class="w-20 md:w-25 lg:w-30 xl:w-48 object-contain">
                    </a>
                </div>

                {{-- ==== Tengah / Kanan: Navigation Menu ==== --}}
                <nav id="nav-menu"
                    class="hidden absolute py-5 bg-white  max-w-[250px] w-full right-0 top-full xl:block xl:static xl:bg-transparent xl:py-6 xl:max-w-full  xl:rounded-none z-50">
                    <ul class="block xl:flex xl:items-center text-black lg:pl-[25%] font-bold font-family-abhaya-sm  text-sm">
                        <li class="group relative block xl:flex items-center xl:border-l xl:border-gray-300  ">
                            <a href="#" id="produk-dropdown-btn"
                                class="py-2  px-6 md:px-4 lg:px-0  flex items-center font-semibold text-sm hover:text-red-jongveksi cursor-pointer lg:py-0">
                                Produk Kami
                                <svg class="w-4 h-4 ml-1 transition-transform duration-200" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 9l-7 7-7-7" />
                                </svg>
                            </a>
                            <div id="produk-dropdown-menu"
                                class="hidden xl:absolute right-0 xl:top-full lg:mt-2 w-full xl:w-60 bg-white  hover:text-red-jongveksi rounded-md py-1 xl:z-20">
                                <a href="/produk/opsi-1"
                                    class="block px-8 py-2 lg:px-6  font-family-abhaya-sm font-semibold text-black  hover:text-red-jongveksi hover:bg-gray-100">Opsi
                                    1: Nama Produk A</a>
                                <a href="/produk/opsi-2"
                                    class="block px-8 py-2 lg:px-6 font-family-abhaya-sm font-semibold text-black hover:text-red-jongveksi hover:bg-gray-100">Opsi
                                    2: Nama Produk B</a>
                                <a href="/produk/opsi-3"
                                    class="block px-8 py-2 lg:px-6 font-family-abhaya-sm font-semibold text-black hover:text-red-jongveksi hover:bg-gray-100">Opsi
                                    3: Nama Produk C</a>
                                <a href="/produk/opsi-4"
                                    class="block px-8 py-2 lg:px-6 font-family-abhaya-sm font-semibold text-black hover:text-red-jongveksi hover:bg-gray-100">Opsi
                                    4: Nama Produk D</a>
                            </div>
                        </li>
                        <li><a href="#about" class="py-2 px-6 md:px-4 lg:px-6 flex font-semibold group-hover:text-teal-600  hover:text-red-jongveksi">Layanan
                                Gratis</a></li>
                        <li><a href="#apreciate" class="py-2 px-6 md:px-4 lg:px-6 flex font-semibold group-hover:text-teal-600 hover:text-red-jongveksi">Klien
                                Kami </a></li>
                        <li><a href="#" class="py-2 px-6 md:px-4 lg:px-6 flex font-semibold group-hover:text-teal-600 hover:text-red-jongveksi">Tentang
                                Kami </a></li>
                        <li><a href="#" class="py-2 px-6 md:px-4 lg:px-6 flex font-semibold group-hover:text-teal-600 hover:text-red-jongveksi">Cek Progres
                                Produksi</a></li>
                    </ul>
                </nav>

                {{-- ==== Kanan: Tombol Aksi + Hamburger ==== --}}
                <div class="flex items-center space-x-3">
                    <div class="hidden xl:flex md:pr-16  items-center space-x-3">
                        <a href="/tanya-harga"
                            class="px-10 py-2 bg-red-jongveksi text-white font-sans text-sm  rounded-[1%] font-semibold hover:bg-red-800 transition-colors whitespace-nowrap">
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

    <div class="header w-full  flex flex-wrap items-center font-family-abhaya-sm mt-10 px-[15%]">

{{-- Untuk Gambar Atas --}}
             <div class=" xl:hidden w-full xl:w-1/2 flex justify-center lg:justify-end mt-8 lg:mt-16">
            <img src="/src/img/imageFive.png" alt="Jonveksi" class="max-w-full h-auto object-cover">
        </div>
        {{-- Kiri: Teks dan Statistik --}}
        <div class=" w-full xl:w-1/2 lg:mt-3">
            <h4 class="text-2xl md:text-5xl lg:text-5xl font-extrabold">
                <span class="text-red-jongveksi">Jonveksi</span> Konveksi
            </h4>
            <p class="text-[13px] md:text-[15px]  lg:text-[20px] xl:text-sm mt-3 leading-relaxed">
                Jonveksi adalah solusi terbaik untuk kebutuhan pakaian kustom Anda.
                <br>
                <span class=" header block mt-2">
                    Konveksi kami menawarkan berbagai macam produk seperti jaket, seragam, <br> T-shirt/kaos, wearpack,
                    jersey, dan kemeja dengan kualitas terbaik dan harga terjangkau.
                </span>
            </p>

            <div class=" mt-10">
                <button type="submit"
                    class="rounded-[1px] bg-red-jongveksi px-8 py-2 text-white font-semibold hover:bg-red-800 transition">
                    Order Disini
                </button>
            </div>

            {{-- Statistik: hanya tampil di desktop --}}
            <div class="hidden xl:flex flex-row mt-12 w-[85%] bg-white rounded shadow p-4 text-center">
                <div class="px-8">
                    <h3 class="text-2xl font-extrabold">2.000+</h3>
                    <p class="text-sm text-gray-700">Client</p>
                </div>
                <div class="px-8">
                    <h3 class="text-2xl font-extrabold">100.000+</h3>
                    <p class="text-sm text-gray-700">Produksi</p>
                </div>
                <div class="px-8">
                    <h3 class="text-2xl font-extrabold">10</h3>
                    <p class="text-sm text-gray-700">Tahun</p>
                </div>
            </div>
        </div>

        {{-- Kanan: Gambar --}}
        <div class="header hidden xl:block w-full lg:w-1/2 flex justify-center lg:justify-end mt-8 lg:mt-16">
            <img src="/src/img/imageFive.png" alt="Jonveksi" class="max-w-full h-auto object-cover">
        </div>

    </div>

    {{-- Logo Client --}}
    <div class=" snap-x snap-proximity mt-20 bg-red-jongveksi py-5 px-[15%]">
        <h1 class="header flex  justify-center font-family-abhaya-sm text-white items-center">Perusahaan dan Instansi yang
            sudah bekerja Sama dengan Kami </h1>
        <div class=" flex space-x-16 overflow-hidden  group ">
            <div class="flex animate- overflow-x-auto snap-x snap-mandatory space-x-10 scrollbar-hide">

                <img src="/src/img/imageOne.png  " class="w-50" />
                <img src="/src/img/imageOne.png " class="w-50" />
                <img src="/src/img/imageOne.png " class="w-50" />
                <img src="/src/img/imageOne.png " class="w-50" />
                <img src="/src/img/imageOne.png " class="w-50" />
                <img src="/src/img/imageOne.png " class="w-50" />

                <img src="/src/img/imageOne.png  " class="w-50" />
                <img src="/src/img/imageOne.png " class="w-50" />
                <img src="/src/img/imageOne.png " class="w-50" />
                <img src="/src/img/imageOne.png " class="w-50" />
                <img src="/src/img/imageOne.png " class="w-50" />
                <img src="/src/img/imageOne.png " class="w-50" />

            </div>
        </div>
    </div>


       <div class=" snap-x snap-proximity mt-96 bg-red-jongveksi py-5 px-[15%]">
        <h1 class="header flex  justify-center font-family-abhaya-sm text-white items-center">Perusahaan dan Instansi yang
            sudah bekerja Sama dengan Kami </h1>
        <div class=" flex space-x-16 overflow-hidden  group ">
            <div class="flex animate- overflow-x-auto snap-x snap-mandatory space-x-10 scrollbar-hide">

          

            </div>
        </div>
    </div>
</body>

</html>
