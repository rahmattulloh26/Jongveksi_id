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
    <link
        href="https://fonts.googleapis.com/css2?family=Abhaya+Libre:wght@400;500;600;700;800&family=Abyssinica+SIL&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Abhaya+Libre:wght@400;500;600;700;800&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Aclonica&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
        integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />
    <!-- Make sure you put this AFTER Leaflet's CSS -->
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
        integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
    <title>Dashboard Jongveksi_id</title>
</head>

<body>

    <header class="w-full relative z-10 cursor-pointer">
        <div class="md:bg-white bg-white bg-transparent py-3 md:py-2 lg:py-4 xl:py-0  px-0 md:px-10 ">
            <div class="container mx-auto flex items-center justify-between px-3 md:bg-white ">

                {{-- ==== Kiri: Logo ==== --}}
                <div class="flex items-center pl-10 md:pl-25 ">
                    <a href="/">
                        <img src="/src/img/jongveksi.png" alt="Jongveksi Logo"
                            class="w-20 md:w-25 lg:w-30 xl:w-48 object-contain">
                    </a>
                </div>

                {{-- ==== Tengah / Kanan: Navigation Menu ==== --}}
                <nav id="nav-menu"
                    class="hidden absolute py-5 bg-white  max-w-[200px] w-full right-0 top-full xl:block xl:static xl:bg-transparent xl:py-6 xl:max-w-full rounded-bl-2xl xl:rounded-none z-50">
                    <ul
                        class="block xl:flex xl:items-center text-black lg:pl-[25%] font-bold font-family-abhaya-sm  text-sm">
                        <li class="group relative block xl:flex items-center xl:border-l xl:border-gray-300  ">
                            <a href="#" id="produk-dropdown-btn"
                                class="py-2.5  px-6 lg:px-0  xl:px-6 lg:py-0 flex items-center font-semibold text-sm hover:text-red-jongveksi cursor-pointer ">
                                Produk Kami
                                <svg class="xl:hidden w-4 h-4 ml-1 transition-transform duration-200" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 9l-7 7-7-7" />
                                </svg>
                            </a>
                            <div id="produk-dropdown-menu"
                                class="hidden right-0 xl:top-full lg:mt-2 w-full xl:w-60 bg-white  hover:text-red-jongveksi rounded-md py-1 xl:z-20">
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
                        <li><a href="#about"
                                class="py-2.5 px-6 md:px-4 lg:px-0 xl:px-6   flex font-semibold group-hover:text-teal-600  hover:text-red-jongveksi">Layanan
                                Gratis</a></li>
                        <li><a href="#apreciate"
                                class="py-2.5 px-6 md:px-4 lg:px-0 xl:px-6   flex font-semibold group-hover:text-teal-600 hover:text-red-jongveksi">Klien
                                Kami </a></li>
                        <li><a href="#"
                                class="py-2.5 px-6 md:px-4 lg:px-0 xl:px-6   flex font-semibold group-hover:text-teal-600 hover:text-red-jongveksi">Tentang
                                Kami </a></li>
                        <li><a href="#"
                                class="py-2.5 px-6 md:px-4 lg:px-0 xl:px-6   flex font-semibold group-hover:text-teal-600 hover:text-red-jongveksi">Cek
                                Progres
                                Produksi</a></li>
                    </ul>
                </nav>

                {{-- ==== Kanan: Tombol Aksi + Hamburger ==== --}}
                <div class="flex items-center space-x-3">
                    <div class="hidden xl:flex md:pr-16  items-center space-x-3">
                        <a href="/tanya-harga"
                            class="px-10 py-2 bg-red-jongveksi text-white font-family-abyssinica text-sm  rounded-[1%] font-semibold hover:bg-red-800 transition-colors whitespace-nowrap">
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
        <div class=" header xl:hidden w-full xl:w-1/2 flex justify-center lg:justify-end mt-8 lg:mt-16">
            <img src="/src/img/imageOnee.png" alt="Jonveksi" class="max-w-full h-auto object-cover">
        </div>
        {{-- Kiri: Teks dan Statistik --}}
        <div class=" w-full xl:w-1/2 lg:mt-3">
            <h4 class="text-2xl md:text-5xl lg:text-5xl font-extrabold">
                <span class="text-red-jongveksi">Jonveksi</span> Konveksi
            </h4>
            <p class="text-[13px] md:text-[15px]  lg:text-[20px] xl:text-sm mt-3 leading-relaxed">
                Jonveksi adalah solusi terbaik untuk kebutuhan pakaian kustom Anda.
                <br>
                <span class="  block mt-2">
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
            <img src="/src/img/imageOnee.png" alt="Jonveksi" class="max-w-full h-auto object-cover">
        </div>

    </div>

    {{-- Logo Client --}}
    <div class="table-header-groupsnap-x snap-proximity mt-20 bg-red-jongveksi py-3 px-[15%]">
        <h1
            class=" flex justify-center text-center font-family-abyssinica text-[10px]  md:text-[17px]    text-white items-center py-6">
            Perusahaan dan Instansi yang sudah bekerja Sama dengan Kami </h1>

        <div class=" flex overflow-x-auto overflow-hidden scrollbar-hide  scroll-smooth group">
            <div class="flex animate-loop-scroll space-x-10 group-hover:paused">
                <img src="/src/img/ugm.png" class=" h-12 md:h-17  lg:h-20    w-auto" />
                <img src="/src/img/itb.png" class=" h-12 md:h-17  lg:h-20  w-auto" />
                <img src="/src/img/ui.png" class=" h-12 md:h-17  lg:h-20  w-auto" />
                <img src="/src/img/pupr.png" class=" h-12 md:h-17  lg:h-20  w-auto" />
                <img src="/src/img/ugm.png" class=" h-12 md:h-17  lg:h-20  w-auto" />
                <img src="/src/img/itb.png" class=" h-12 md:h-17  lg:h-20  w-auto" />
                <img src="/src/img/ui.png" class=" h-12 md:h-17  lg:h-20  w-auto" />
                <img src="/src/img/pupr.png" class=" h-12 md:h-17  lg:h-20  w-auto" />
                <img src="/src/img/ugm.png" class=" h-12 md:h-17  lg:h-20  w-auto" />
                <img src="/src/img/itb.png" class=" h-12 md:h-17  lg:h-20  w-auto" />
                <img src="/src/img/ui.png" class=" h-12 md:h-17  lg:h-20  w-auto" />
                <img src="/src/img/pupr.png" class=" h-12 md:h-17  lg:h-20  w-auto" />
                <img src="/src/img/ugm.png" class=" h-12 md:h-17  lg:h-20  w-auto" />
                <img src="/src/img/itb.png" class=" h-12 md:h-17  lg:h-20  w-auto" />
                <img src="/src/img/ui.png" class=" h-12 md:h-17  lg:h-20  w-auto" />
                <img src="/src/img/pupr.png" class=" h-12 md:h-17  lg:h-20  w-auto" />
                <img src="/src/img/ugm.png" class=" h-12 md:h-17  lg:h-20  w-auto" />
                <img src="/src/img/ugm.png" class=" h-12 md:h-17  lg:h-20  w-auto" />
            </div>

        </div>
        <div class="flex justify-center items-center mt-6 md:mt-8 py-3">
            <button type="submit"
                class="rounded-[4px] bg-white px-6 py-2.5 md:px-8 py-3 text-red-jongveksi font-family-abhaya-sm font-semibold text-sm transition">
                Lihat Lebih Banyak
            </button>
        </div>
    </div>
    </div>

    <div class="header flex flex-col px-[15%] mt-10 leading-relaxed">
        <h1 class="text-[19px] font-family-abhaya-sm ">Produk yang bisa kamu request</h1>
        <h2 class="text-[19px] font-family-abhaya-sm"> Start From Rp.70.000 </h2>
        <p class="text-[15px] font-family-abhaya-sm">Kami menawarkan berbagai macam pakaian yang bisa di kustom dengan
            harga mulai dari Rp 70.000</p>
    </div>

    <div class=" header grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4   mt-10 px-[15%] py-5 ">

        <div class="flex flex-col justify-center items-center px-2 py-5 ">
            <img src="/src/img/1.png " alt="" class="h-35">
            <div class=" flex flex-col py-5 font-family-abyssinica text-center ">
                <h1 class="text-[15px]">Jaket</h1>
                <p class="text-[10px]">Start From 100k – 270k <span> 270k Varsity, Bomber, Parka, Coach, Workjaket dll
                    </span> </p>
                <div class="mt-5">
                    <a href=""
                        class="rounded-[1px] bg-red-jongveksi  px-5 py-2 text-[9px] font-family-abyssinica text-white  hover:bg-red-800 transition">
                        Lihat Lebih detail
                    </a>
                </div>
            </div>
        </div>
        <div class="flex flex-col justify-center items-center px-2 py-5  ">
            <img src="/src/img/2.png " alt="" class="h-35">
            <div class=" flex flex-col py-5 font-family-abyssinica text-center ">
                <h1 class="text-[15px]">Jaket</h1>
                <p class="text-[10px]">Start From 100k – 270k <span> 270k Varsity, Bomber, Parka, Coach, Workjaket dll
                    </span> </p>
                <div class="mt-5">
                    <a href=""
                        class="rounded-[1px] bg-red-jongveksi  px-5 py-2 text-[9px] font-family-abyssinica text-white  hover:bg-red-800 transition">
                        Lihat Lebih detail
                    </a>
                </div>
            </div>
        </div>
        <div class="flex flex-col justify-center items-center px-2 py-5 ">
            <img src="/src/img/1.png " alt="" class="h-35">
            <div class=" flex flex-col py-5 font-family-abyssinica text-center ">
                <h1 class="text-[15px]">Jaket</h1>
                <p class="text-[10px]">Start From 100k – 270k <span> 270k Varsity, Bomber, Parka, Coach, Workjaket dll
                    </span> </p>
                <div class="mt-5">
                    <a href=""
                        class="rounded-[1px] bg-red-jongveksi  px-5 py-2 text-[9px] font-family-abyssinica text-white  hover:bg-red-800 transition">
                        Lihat Lebih detail
                    </a>
                </div>
            </div>
        </div>
        <div class="flex flex-col justify-center items-center px-2 py-5 ">
            <img src="/src/img/2.png " alt="" class="h-35">
            <div class=" flex flex-col py-5 font-family-abyssinica text-center ">
                <h1 class="text-[15px]">Jaket</h1>
                <p class="text-[10px]">Start From 100k – 270k <span> 270k Varsity, Bomber, Parka, Coach, Workjaket dll
                    </span> </p>
                <div class="mt-5">
                    <a href=""
                        class="rounded-[1px] bg-red-jongveksi  px-5 py-2 text-[9px] font-family-abyssinica text-white  hover:bg-red-800 transition">
                        Lihat Lebih detail
                    </a>
                </div>
            </div>
        </div>
        <div class="flex flex-col justify-center items-center px-2 py-5 ">
            <img src="/src/img/1.png " alt="" class="h-35">
            <div class=" flex flex-col py-5 font-family-abyssinica text-center ">
                <h1 class="text-[15px]">Jaket</h1>
                <p class="text-[10px]">Start From 100k – 270k <span> 270k Varsity, Bomber, Parka, Coach, Workjaket dll
                    </span> </p>
                <div class="mt-5">
                    <a href=""
                        class="rounded-[1px] bg-red-jongveksi  px-5 py-2 text-[9px] font-family-abyssinica text-white  hover:bg-red-800 transition">
                        Lihat Lebih detail
                    </a>
                </div>
            </div>
        </div>
        <div class="flex flex-col justify-center items-center px-2 py-5  ">
            <img src="/src/img/2.png " alt="" class="h-35">
            <div class=" flex flex-col py-5 font-family-abyssinica text-center ">
                <h1 class="text-[15px]">Jaket</h1>
                <p class="text-[10px]">Start From 100k – 270k <span> 270k Varsity, Bomber, Parka, Coach, Workjaket dll
                    </span> </p>
                <div class="mt-5">
                    <a href=""
                        class="rounded-[1px] bg-red-jongveksi  px-5 py-2 text-[9px] font-family-abyssinica text-white  hover:bg-red-800 transition">
                        Lihat Lebih detail
                    </a>
                </div>
            </div>
        </div>
        <div class="flex flex-col justify-center items-center px-2 py-5 ">
            <img src="/src/img/1.png " alt="" class="h-35">
            <div class=" flex flex-col py-5 font-family-abyssinica text-center ">
                <h1 class="text-[15px]">Jaket</h1>
                <p class="text-[10px]">Start From 100k – 270k <span> 270k Varsity, Bomber, Parka, Coach, Workjaket dll
                    </span> </p>
                <div class="mt-5">
                    <a href=""
                        class="rounded-[1px] bg-red-jongveksi  px-5 py-2 text-[9px] font-family-abyssinica text-white  hover:bg-red-800 transition">
                        Lihat Lebih detail
                    </a>
                </div>
            </div>
        </div>
        <div class="flex flex-col justify-center items-center px-2 py-5 ">
            <img src="/src/img/2.png " alt="" class="h-35">
            <div class=" flex flex-col py-5 font-family-abyssinica text-center ">
                <h1 class="text-[15px]">Jaket</h1>
                <p class="text-[10px]">Start From 100k – 270k <span> 270k Varsity, Bomber, Parka, Coach, Workjaket dll
                    </span> </p>
                <div class="mt-5">
                    <a href=""
                        class="rounded-[1px] bg-red-jongveksi  px-5 py-2 text-[9px] font-family-abyssinica text-white  hover:bg-red-800 transition">
                        Lihat Lebih detail
                    </a>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="header flex justify-center items-center mt-6 md:mt-8 py-3">
        <button type="submit"
            class="rounded-[1px] bg-red-jongveksi px-4 py-2 md:px-6 py-3 text-white font-family-abyssinica  text-sm transition">
            Lihat Semua Detail Product
        </button>
    </div>

    <div class="header flex flex-col mx-[15%]  justify-center items-center mt-5 font-family-abhaya-sm leading-relaxed">
        <h1 class="text-sm justify-center items-center text-center md:text-[22px] lg:text-2xl  font-extrabold">Masih
            bingung menentukan pilihan produk yang sesuai? </h1>
        <h1 class="text-sm  justify-center items-center text-center md:text-[22px] lg:text-2xl pt-5  font-extrabold">
            Kami Menawarkan Layanan Terbaik Untuk Anda </h1>
    </div>
    </div>

    <div class="header grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 mt-10 px-[8%] py-5 leading-relaxed ">
        <div class="flex flex-col mx-5 my-3 px-4 py-3 bg-merah-muda rounded-[4px]">
            <img src="/src/img/produksi.png" alt="Produksi-Jongveksi" class="h-20 w-20 ">
            <h2 class="font-Alconica text-[15px]  py-2 ">Produksi Cepat dan Tepat Waktu</h2>
            <p class="text-sm font-family-abyssinica  ">Dengan estimasi pengerjaan sekitar 2–4 minggu, kami menjamin
                setiap proses berjalan efisien dan terkontrol tanpa menurunkan kualitas produk.</p>
        </div>
        <div class="flex flex-col mx-5 my-3 px-4 py-3 bg-Oren-muda rounded-[4px]">
            <img src="/src/img/harga.png" alt="" class="h-20 w-20 ">
            <h2 class="font-Alconica text-[15px] py-2 ">Harga Kompetitif dan Terjangkau!</h2>
            <p class="text-sm font-family-abyssinica ">Mulai dari 70K/pcs, kamu sudah bisa mendapatkan produk
                berkualitas tinggi dengan desain eksklusif dan bahan pilihan.</p>
        </div>
        <div class="flex flex-col mx-5 my-3 px-4 py-3 bg-Grey-muda rounded-[4px]">
            <img src="/src/img/kualitas.png" alt="" class="h-20 w-20 ">
            <h2 class="font-Alconica text-[15px]  py-2 ">Kualitas Bahan dan Jahitan Terjamin</h2>
            <p class="text-sm font-family-abyssinica ">Menggunakan bahan kain dan bordir premium dengan pengawasan
                ketat di setiap tahap produksi, sebagai bentuk komitmen kami terhadap kualitas dan kepuasan pelanggan.
            </p>
        </div>
        <div class="flex flex-col mx-4 my-3 px-4 py-3 bg-Grey rounded-[4px]">
            <img src="/src/img/design.png" alt="" class="h-20 w-20 ">
            <h2 class="font-Alconica text-[15px]  py-2 ">Design Custom Sesuai Kebutuhan Permintaan</h2>
            <p class="text-sm font-family-abyssinica ">Nikmati layanan konsultasi desain gratis bersama tim profesional
                kami, agar setiap detail produk tampil sempurna dan sesuai keinginan Anda.</p>
        </div>

    </div>

    <div style=" background-image: url('/src/img/jongveksi-1.png');"
        class=" hover:bg-fixed h-[400px] bg-contain bg-center bg-cover bg-no-repeat  flex  flex-col items-center justify-center ">
        <h1 class="text-[20px] text-white  font-Alconica font-semibold leading-relaxed  text-center">Konsultasi dan
            Konsultasi dan Design Custom Gratis <br> Sesuai Kebutuhan Permintaan </h1>
              <button type="submit"
            class="rounded-[2px] bg-red-jongveksi px-4 py-2 my-4 md:px-7 md:py-2.5 text-white font-family-abyssinica  text-sm transition">
            Hubungin Kami
        </button>
            
    </div>

    <div class="flex flex-col bg-black m-0 py-10 px-[15%] ">
        <h1 class="font-family-abhaya-sm text-md lg:text-[20px] text-white font-extrabold ">Portofolio <span
                class="text-red-jongveksi">  Jongveksi</span> Konveksi</h1>
        <p class="text-white font-family-abyssinica py-3 text-[10px]"> Jongveksi adalah usaha konveksi pakaian yang bergerak dalam bidang pembuatan berbagai jenis pakaian seperti kaos, kemeja, jaket, seragam sekolah dan almamater. Kami melayani pesanan dari skala kecil hingga besar dengan kualitas terbaik dan harga terjangkau. 
           <br> <br> Jongveksi berdiri sejak 2018. Kami melayani pemesanan secara online yang dapat diakses melalui instagram @jongveksi_id dan nomor whatsApp di nomor 0858-8595-5401.</p>
        <img src="/src/img/porto.png" alt="" class="py-10">
    </div>

    <footer class=" flex flex-col  m-0 bg-black px-[15%] ">
        <div class="grid lg:grid-cols-4 md:grid-cols-3 grid-cols-1 my-12 ">
            <div class="text-sm text-white">
                <p class="md:text-[20px] text-sm font-Alconica text-white">JONGVEKSI_ID</p>
                <p>Beralamat di Jl. Perum Bukit Tiara No. C4/32, Pasir Jaya, Cikupa, Tangerang, Banten 15710.</p> <br>
                
            </div>
            <div class="text-sm text-white lg:px-15">
                <a href="#">Perusahaan</a> <br>
                <a href="#">Tentang Kami</a> <br>
                <a href="#">Klien Kami </a>
            </div>
            <div class="text-sm text-white lg:px-15 ">
               <a href="#">Produk Kami</a> <br>
                <a href="#">PDH</a> <br>
                <a href="#">Jaket </a> <br>
                <a href="#">Varsity </a> <br>
                <a href="#">T shirt</a> <br>
                <a href="#">Hoodie </a> <br>
            </div>
              <div class="text-sm text-white py-4 ">
                 <a href="#">Layanan Kami </a> <br>
                <a href="#">Produksi Cepat dan Tepat Waktu</a> <br>
                <a href="#">Harga Kompetitif dan Terjangkau </a> <br>
                <a href="#">Kualitas Bahan dan Jahitan Terjamin</a> <br>
                <a href="#">Design Custom Sesuai Kebutuhan Permintaan</a> <br>
            </div>
        </div>
        <div id="map"
            class="h-[200px] w-[200px]  md:h-[400px] md:w-[400px] xl:h-[300px]  xl:w-[800px] rounded-2xl my-10  ">
        </div>
        

    </footer>






</body>

</html>
