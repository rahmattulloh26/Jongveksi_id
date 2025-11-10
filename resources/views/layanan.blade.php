@extends('components.layout')

<x-slot:title>
    {{ $title }}
</x-slot:title>
@section('header')


@section('swiper')
@include('components.swiper')
@endsection


@section('layanan-jongveksi')
    <div class="w-full relative mt-15">
        <div class=" container mx-auto px-[20px] md:px-[100px] lg:px-[150px]">
            <!-- Judul -->
            <div class="header flex justify-center text-center font-family-abhaya-sm mb-5 md:mb-15 ">
                <h1 class="text-[20px] md:text-[40px]  font-extrabold">
                    Layanan Gratis Untuk Pelanggan  <span class="text-red-jongveksi"> Jongveksi  </span> Konveksi
                </h1>
            </div>
            <div x-data="{ open: 'konsultasi' }" class="font-family-abhaya-sm">
                <!-- Container utama: fleksibel tergantung ukuran layar -->
                <div class="flex  flex-col md:flex-row gap-10 items-start mb-30 ">
                    <!-- Kolom kiri: daftar layanan -->
                    <div class="header flex flex-col w-full xl:w-1/4  text-white space-y-3">
                        <!-- Tombol 1 -->
                        <div>
                            <button @click="open = 'konsultasi'"
                                :class="open === 'konsultasi' ? 'bg-black-jonveksi card' : 'bg-red-jongveksi'"
                                class="w-full py-4 px-4 text-left transition-all duration-300">
                                Gratis Konsultasi dan Design
                            </button>
                            <!-- Konten khusus HP -->
                            <div x-show="open === 'konsultasi'" x-transition x-cloak
                                class="xl:hidden mt-3 p-4 bg-white animate-loop-scroll-bottom-to-top-Two rounded-lg text-black">
                                <img src="/src/img/imageFive.png" alt="Gratis Konsultasi"
                                    class="w-full h-auto rounded-md mb-3">
                                <p class="text-sm leading-relaxed">
                                    Kami memahami bahwa setiap klien memiliki kebutuhan dan karakteristik yang berbeda.
                                    Karena itu, kami menyediakan layanan konsultasi gratis untuk membantu Anda menemukan
                                    desain terbaik yang sesuai identitas, fungsi, dan tujuan pemesanan. Proses ini mencakup
                                    diskusi konsep, rekomendasi bahan, pilihan model, hingga penyesuaian warna dan detail
                                    sesuai branding Anda.
                                    Tim desain kami akan membuatkan mockup visual sebelum produksi, sehingga Anda dapat
                                    melihat hasil secara realistis dan melakukan revisi bila diperlukan. Dengan layanan ini,
                                    Anda tidak hanya menghemat biaya desain, tetapi juga mendapatkan hasil yang tepat sesuai
                                    ekspektasi sejak awal proses.
                                </p>
                            </div>
                            <!-- Tombol 2 -->
                            <button @click="open = 'ongkir'"
                                :class="open === 'ongkir' ? 'bg-black-jonveksi card ' : 'bg-red-jongveksi'"
                                class=" w-full py-4 px-4 text-left transition-all duration-300 mt-5">
                                Gratis Ongkir Se-Indonesia
                            </button>
                            <!-- Konten khusus HP -->
                            <div x-show="open === 'ongkir'" x-transition x-cloak
                                class="xl:hidden mt-3 p-4 bg-white animate-loop-scroll-bottom-to-top-Two text-black">
                                <img src="/src/img/imageFive.png" alt="Gratis Ongkir" class="w-full h-auto rounded-md mb-3">
                                <p class="text-sm leading-relaxed">
                                    memastikan bahwa jarak bukan menjadi hambatan untuk mendapatkan produk berkualitas dari
                                    Kholifah Konveksi. Untuk itu, kami memberikan layanan gratis ongkir atau subsidi
                                    pengiriman ke seluruh wilayah Indonesia bagi pesanan yang memenuhi ketentuan.

                                    Kami bekerja sama dengan ekspedisi terpercaya untuk memastikan produk sampai ke tangan
                                    Anda dengan aman dan tepat waktu. Dengan adanya fasilitas ini, Anda dapat menghemat
                                    biaya logistik sekaligus mendapatkan pengalaman pemesanan yang lebih praktis tanpa perlu
                                    khawatir soal ongkos kirim.
                                </p>
                            </div>
                            <!-- Tombol 3 -->
                            <button <button @click="open = 'pengukuran'"
                                :class="open === 'pengukuran' ? 'bg-black-jonveksi card' : 'bg-red-jongveksi'"
                                class=" w-full py-4 px-4 text-left transition-all duration-300 mt-5">
                                Pengukuran Gratis
                            </button>
                            <!-- Konten khusus HP -->
                            <div x-show="open === 'pengukuran'" x-transition x-cloak
                                class="xl:hidden mt-3 p-4 animate-loop-scroll-bottom-to-top-Two bg-white text-black">
                                <img src="/src/img/imageFive.png" alt="Gratis Ongkir" class="w-full h-auto rounded-md mb-3">
                                <p class="text-sm leading-relaxed">
                                    memastikan bahwa jarak bukan menjadi hambatan untuk mendapatkan produk berkualitas dari
                                    Kholifah Konveksi. Untuk itu, kami memberikan layanan gratis ongkir atau subsidi
                                    pengiriman ke seluruh wilayah Indonesia bagi pesanan yang memenuhi ketentuan.

                                    Kami bekerja sama dengan ekspedisi terpercaya untuk memastikan produk sampai ke tangan
                                    Anda dengan aman dan tepat waktu. Dengan adanya fasilitas ini, Anda dapat menghemat
                                    biaya logistik sekaligus mendapatkan pengalaman pemesanan yang lebih praktis tanpa perlu
                                    khawatir soal ongkos kirim.
                                </p>
                            </div>
                            <!-- Tombol 3 -->
                           <button @click="open = 'garansi'"
                                :class="open === 'garansi' ? 'bg-black-jonveksi card' : 'bg-red-jongveksi'"
                                class=" w-full py-4 px-4  animate-loop-scroll-bottom-to-top-Two text-left transition-all duration-300 mt-5">
                                Garansi 100 %
                            </button>
                            <!-- Konten khusus HP -->
                            <div x-show="open === 'garansi'" x-transition x-cloak
                                class="xl:hidden mt-3 p-4  animate-loop-scroll-bottom-to-top-Two bg-white text-black">
                                <img src="/src/img/imageFive.png" alt="Gratis Ongkir" class="w-full h-auto rounded-md mb-3">
                                <p class="text-sm leading-relaxed">
                                    memastikan bahwa jarak bukan menjadi hambatan untuk mendapatkan produk berkualitas dari
                                    Kholifah Konveksi. Untuk itu, kami memberikan layanan gratis ongkir atau subsidi
                                    pengiriman ke seluruh wilayah Indonesia bagi pesanan yang memenuhi ketentuan.

                                    Kami bekerja sama dengan ekspedisi terpercaya untuk memastikan produk sampai ke tangan
                                    Anda dengan aman dan tepat waktu. Dengan adanya fasilitas ini, Anda dapat menghemat
                                    biaya logistik sekaligus mendapatkan pengalaman pemesanan yang lebih praktis tanpa perlu
                                    khawatir soal ongkos kirim.
                                </p>
                            </div>
                            <!-- Tambahkan tombol lainnya dengan pola yang sama -->
                        </div>
                    </div>
                    <!-- Kolom tengah & kanan (desktop only) -->
                    <div class="hidden xl:flex w-fullrounded-md px-10    xl:w-3/4 gap-10 mb-20">
                        <!-- Gambar -->
                        <div class="w-1/2 flex justify-center">
                            <img x-show="open === 'konsultasi' " x-cloak src="/src/img/imageFive.png"
                                alt="Gratis Konsultasi"
                                class="shadow-lg w-full max-w-[400px] animate-loop-scroll-bottom-to-top-Two object-cover  transition-all duration-500">

                            <img x-show="open === 'ongkir'" x-cloak src="/src/img/imageFive.png" alt="Gratis Ongkir"
                                class="shadow-lg w-full max-w-[400px] object-cover  animate-loop-scroll-bottom-to-top-Two transition-all duration-500">
                            <img x-show="open === 'pengukuran'" x-cloak src="/src/img/imageFive.png" alt="Gratis Ongkir"
                                class="shadow-lg w-full max-w-[400px] object-cover animate-loop-scroll-bottom-to-top-Two  transition-all duration-500">

                            <img x-show="open === 'garansi'" x-cloak src="/src/img/imageFive.png" alt="Gratis Ongkir"
                                class="shadow-lg w-full max-w-[400px] object-cover animate-loop-scroll-bottom-to-top-Two  transition-all duration-500">
                        </div>
                        <!-- Teks -->
                        <div class="w-1/2 text-justify leading-relaxed animate-loop-scroll-bottom-to-top-Two text-gray-900">
                            <div x-show="open === 'konsultasi' " x-cloak x-transition>
                                <p class="text-[16px] leading-relaxed animate-loop-scroll-bottom-to-top-Two">
                                    memastikan bahwa jarak bukan menjadi hambatan untuk mendapatkan produk berkualitas dari
                                    Kholifah Konveksi. Untuk itu, kami memberikan layanan gratis ongkir atau subsidi
                                    pengiriman ke seluruh wilayah Indonesia bagi pesanan yang memenuhi ketentuan.

                                    Kami bekerja sama dengan ekspedisi terpercaya untuk memastikan produk sampai ke tangan
                                    Anda dengan aman dan tepat waktu. Dengan adanya fasilitas ini, Anda dapat menghemat
                                    biaya logistik sekaligus mendapatkan pengalaman pemesanan yang lebih praktis tanpa perlu
                                    khawatir soal ongkos kirim.
                                </p>
                            </div>
                            <div x-show="open === 'ongkir'" x-cloak x-transition>
                                <p class="text-[16px] leading-relaxed animate-loop-scroll-bottom-to-top-Two">
                                    memastikan bahwa jarak bukan menjadi hambatan untuk mendapatkan produk berkualitas dari
                                    Kholifah Konveksi. Untuk itu, kami memberikan layanan gratis ongkir atau subsidi
                                    pengiriman ke seluruh wilayah Indonesia bagi pesanan yang memenuhi ketentuan.

                                    Kami bekerja sama dengan ekspedisi terpercaya untuk memastikan produk sampai ke tangan
                                    Anda dengan aman dan tepat waktu. Dengan adanya fasilitas ini, Anda dapat menghemat
                                    biaya logistik sekaligus mendapatkan pengalaman pemesanan yang lebih praktis tanpa perlu
                                    khawatir soal ongkos kirim.
                                </p>
                            </div>
                            <div x-show="open === 'pengukuran'" x-cloak x-transition>
                                <p class="text-[16px] leading-relaxed  animate-loop-scroll-bottom-to-top-Two">
                                    memastikan bahwa jarak bukan menjadi hambatan untuk mendapatkan produk berkualitas dari
                                    Kholifah Konveksi. Untuk itu, kami memberikan layanan gratis ongkir atau subsidi
                                    pengiriman ke seluruh wilayah Indonesia bagi pesanan yang memenuhi ketentuan.

                                    Kami bekerja sama dengan ekspedisi terpercaya untuk memastikan produk sampai ke tangan
                                    Anda dengan aman dan tepat waktu. Dengan adanya fasilitas ini, Anda dapat menghemat
                                    biaya logistik sekaligus mendapatkan pengalaman pemesanan yang lebih praktis tanpa perlu
                                    khawatir soal ongkos kirim.
                                </p>
                            </div>
                            <div x-show="open === 'garansi'" x-cloak x-transition>
                                <p class="text-[16px] leading-relaxed  animate-loop-scroll-bottom-to-top-Two">
                                    memastikan bahwa jarak bukan menjadi hambatan untuk mendapatkan produk berkualitas dari
                                    Kholifah Konveksi. Untuk itu, kami memberikan layanan gratis ongkir atau subsidi
                                    pengiriman ke seluruh wilayah Indonesia bagi pesanan yang memenuhi ketentuan.

                                    Kami bekerja sama dengan ekspedisi terpercaya untuk memastikan produk sampai ke tangan
                                    Anda dengan aman dan tepat waktu. Dengan adanya fasilitas ini, Anda dapat menghemat
                                    biaya logistik sekaligus mendapatkan pengalaman pemesanan yang lebih praktis tanpa perlu
                                    khawatir soal ongkos kirim.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


@section('footer')
