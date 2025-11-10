@extends('components.layout')


@section('header')


@section('HeadDashboard')
    <div class="w-full relative header mt-25 md:mt-30">
        <div
            class="container mx-auto px-[20px] md:px-[100px] xl:px-[200px] flex flex-wrap items-center font-family-abhaya-sm ">
            {{-- Untuk Gambar Atas --}}
            <div
                class="animate-loop-scroll-bottom-to-top-Two xl:hidden w-full xl:w-1/2 flex justify-center lg:justify-end mt-8 lg:mt-16">
                <img src="/src/img/imageOnee.png" alt="Jonveksi" class="max-w-full h-auto object-cover">
            </div>
            {{-- Kiri: Teks dan Statistik --}}
            <div class="w-full xl:w-1/2 xl:mt-5  mt-10">
                <div class="container">
                    <h4
                        class="header text-[40px] md:text-6xl lg:text-6xl py-3 md:py-5 font-extrabold lg:animate-loop-scroll-bottom-to-top">
                        <span class="text-red-jongveksi">Jonveksi</span> Konveksi
                    </h4>

                    <p
                        class="text-[15px] md:text-[15px] lg:text-[20px] xl:text-[18px] pr-2 animate-loop-scroll-bottom-to-top-Two leading-relaxed">
                        Jonveksi adalah solusi terbaik untuk kebutuhan pakaian kustom Anda. <br>
                        <span class="block mt-2">
                            Konveksi kami menawarkan berbagai macam produk seperti jaket, seragam,
                            T-shirt/kaos, wearpack, jersey, dan kemeja dengan kualitas terbaik dan harga terjangkau.
                        </span>
                    </p>
                </div>

                <div class="mt-10">
                    <button type="submit" class="button rounded-[1px] px-8 py-2 transition">
                        Order Disini
                    </button>
                </div>

                {{-- Statistik: hanya tampil di desktop --}}
                <div class="hidden xl:flex flex-row mt-12 w-[410px] bg-white rounded shadow-2xl p-5 text-center"
                    id="stats">
                    <div class="px-8">
                        <h3 id="count1" class="text-2xl font-extrabold">1000 <span>+</span></h3>
                        <p class="text-sm text-gray-700">Client</p>
                    </div>
                    <div class="px-8">
                        <h3 id="count2" class="text-2xl font-extrabold">0</h3>
                        <p class="text-sm text-gray-700">Produksi</p>
                    </div>
                    <div class="px-8">
                        <h3 id="count3" class="text-2xl font-extrabold">0</h3>
                        <p class="text-sm text-gray-700">Tahun</p>
                    </div>
                </div>

            </div> {{-- end kiri --}}

            {{-- Kanan: Gambar --}}
            <div
                class="hidden animate-loop-scroll-top-to-bottom xl:block w-full lg:w-1/2 justify-center lg:justify-end mt-8 lg:mt-16">
                <img src="/src/img/imageOnee.png" alt="Jonveksi" class="max-w-full h-auto object-cover">
            </div>

        </div>
    </div>

@endsection


@section('klien')
    <div class="w-full relative  bg-red-jongveksi">
        <div class="container snap-x snap-proximity md:mt-40  mt-30 py-3 px-[40px] md:px-[100px] xl:px-[200px] mx-auto">

            {{-- Judul --}}
            <h1
                class="flex justify-center  header text-center font-serif text-[16px] md:text-[17px] lg:text-[23px] xl:text-[30px] text-white items-center py-6">
                Perusahaan dan Instansi yang sudah bekerja sama dengan Kami
            </h1>

            {{-- Logo Client (Scrolling) --}}
            <div class="flex overflow-x-auto header overflow-hidden scrollbar-hide scroll-smooth group">
                <div class="flex animate-loop-scroll space-x-10 group-hover:paused">
                    <img src="/src/img/ugm.png" class="h-12 md:h-17 lg:h-20 w-auto" />
                    <img src="/src/img/itb.png" class="h-12 md:h-17 lg:h-20 w-auto" />
                    <img src="/src/img/ui.png" class="h-12 md:h-17 lg:h-20 w-auto" />
                    <img src="/src/img/pupr.png" class="h-12 md:h-17 lg:h-20 w-auto" />
                    <img src="/src/img/ugm.png" class="h-12 md:h-17 lg:h-20 w-auto" />
                    <img src="/src/img/itb.png" class="h-12 md:h-17 lg:h-20 w-auto" />
                    <img src="/src/img/ui.png" class="h-12 md:h-17 lg:h-20 w-auto" />
                    <img src="/src/img/pupr.png" class="h-12 md:h-17 lg:h-20 w-auto" />
                    <img src="/src/img/ugm.png" class="h-12 md:h-17 lg:h-20 w-auto" />
                    <img src="/src/img/itb.png" class="h-12 md:h-17 lg:h-20 w-auto" />
                    <img src="/src/img/ui.png" class="h-12 md:h-17 lg:h-20 w-auto" />
                    <img src="/src/img/pupr.png" class="h-12 md:h-17 lg:h-20 w-auto" />
                    <img src="/src/img/ugm.png" class="h-12 md:h-17 lg:h-20 w-auto" />
                    <img src="/src/img/itb.png" class="h-12 md:h-17 lg:h-20 w-auto" />
                    <img src="/src/img/ui.png" class="h-12 md:h-17 lg:h-20 w-auto" />
                    <img src="/src/img/pupr.png" class="h-12 md:h-17 lg:h-20 w-auto" />
                    <img src="/src/img/ugm.png" class="h-12 md:h-17 lg:h-20 w-auto" />
                    <img src="/src/img/ugm.png" class="h-12 md:h-17 lg:h-20 w-auto" />
                </div>
            </div>

            {{-- Tombol Aksi --}}
            <div class="flex justify-center items-center mt-6 md:mt-8 py-3">
                <button type="submit"
                    class="rounded-[4px] text-sm px-6 py-2.5 md:px-8 text-red-jongveksi hover:text-white bg-white hover:bg-black-jonveksi font-family-abhaya-sm font-semibold transition">
                    Lihat Lebih Banyak
                </button>
            </div>

        </div>
    </div>


    <div class="w-full relative">
        <div class=" container mx-auto px-[30px] md:px-[100px] xl:px-[200px] flex flex-col mt-10 leading-relaxed">
            <h1 class=" header text-[25px] md:text-[25px] xl:text-[50px]  font-family-abhaya-sm font-semibold">
                Produk yang bisa kamu request
            </h1>
            <h2 class=" header text-[19px] md:text-[20px]  xl:text-[25px] font-family-abhaya-sm font-semibold"> <i>
                    Start From Rp.70.000</i>
            </h2>
            <p class="header text-[15px] md:text-[18px] xl:text-[18px] font-family-abhaya-sm">
                Kami menawarkan berbagai macam pakaian yang bisa dikustom
                dengan harga mulai dari Rp 70.000.
            </p>
        </div>
    </div>


@endsection

@section('catalog')
    @include('components.catalog')
@endsection

@section('layanan')
    @include('components.layanan')
@endsection

@section('footer')

    </body>

    </html>
