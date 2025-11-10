@extends('components.layout')

<x-slot:title>
    {{ $title }}
</x-slot:title>


@section('detail-produk')
    <div class="w-full relative mt-10 md:mt-30  ">
        <div class="container mx-auto px-[20px]  xl:px-[200px] py-10">
           <div class="flex flex-col md:flex-row justify-between font-family-abyssinica gap-5">
                <div class="w-full md:w-1/2">
                    <img src="/src/img/sample.png" alt="" class="">
                    <!-- Slider main container -->
                    <div class="swiper">
                        <!-- Additional required wrapper -->
                        <div class="swiper-wrapper">
                            <!-- Slides -->
                            <div class="swiper-slide">
                                <img src="/src/img/1.png" alt="">
                            </div>
                            <div class="swiper-slide">
                                <img src="/src/img/1.png" alt="">
                            </div>
                            <div class="swiper-slide">
                                <img src="/src/img/1.png" alt="">
                            </div>

                            <div class="swiper-slide">
                                <img src="/src/img/1.png" alt="">
                            </div>
                            <div class="swiper-slide">
                                <img src="/src/img/1.png" alt="">
                            </div>
                            <div class="swiper-slide">
                                <img src="/src/img/1.png" alt="">
                            </div>
                        </div>
                        <!-- If we need pagination -->
                        <div class="swiper-pagination"></div>

                    </div>
                </div>
                <div class="w-full md:w-1/2 px-5">
                    <h1>Home » Produk Kami » PDL/PDH</h1>
                    <h1 class="text-[25px] md:text-[40px]">PDL/PDH</h1>
                    <p class="py-2 md:py-3 text-[15px] md:text-[20px]">Rp 125k – Rp 195k</p>
                    <p class="py-2 md:py-3 text-[15px] md:text-[20px]">Minimal order 6 pcs</p>
                    <p class="text-justify text-[15px] md:text-[20px]">Jongveksi Konveksi menyediakan layanan konveksi PDL/PDH berkualitas tinggi
                        dengan berbagai pilihan
                        desain dan bahan.
                        Kami melayani pembuatan PDL/PDH untuk kebutuhan personal, perusahaan, komunitas, dan acara khusus.
                        <br> <br>
                        Dengan dukungan tim profesional dan peralatan modern, kami memastikan setiap PDL/PDH dibuat dengan
                        detail yang presisi dan kualitas terbaik. <br>
                        Dapatkan PDL/PDH kustom yang nyaman, stylish, dan sesuai dengan keinginan Anda di Kholifah Konveksi.
                        Hubungi kami untuk konsultasi dan desain gratis.
                    </p>
                    <button class="bg-red-jongveksi mt-10 py-2 px-10 text-white"> Order Here</button>
                </div>

            </div>
        </div>
    </div>
@endsection

@push('detail-produk')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.js"></script>
    <script>
        const swiper = new Swiper('.swiper', {
            speed: 1600,
            loop: true,
            autoplay: {
                delay: 3000
            },
            direction: 'horizontal', // ubah jadi horizontal
            slidesPerView: 3, // ✅ tampilkan 3 gambar sekaligus
            spaceBetween: 20, // ✅ jarak antar gambar (opsional)
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });
    </script>
@endpush
