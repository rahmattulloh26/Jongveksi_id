@extends('components.layout')

<x-slot:title>
    {{ $title }}
</x-slot:title>

@section('header')
@endsection

@section('swiper')
@include('components.swiper')
@endsection

@section('about')
    <!-- Section Tentang -->
    <div class=" w-full  h-[210px] md:h-[350px] relative  mb-10 md:mb-10 bg-black">
        <div class="container mx-auto px-[20px] md:px-[100px] xl:px-[200px] justify-center text-center py-5 xl:py-15">
            <div class="text-white font-family-abyssinica leading-relaxed">
                <h1 class=" header text-[15px] md:text-[30px] py-3 ">Tentang<span class="text-red-jongveksi"> Jongveksi
                    </span></h1>
                <p class=" header text-[8px] md:text-[14px] ">
                    Sejak 2018 Jongveksi hadir sebagai solusi konveksi modern yang membantu Anda mewujudkan setiap ide
                    menjadi karya nyata. Kami percaya bahwa setiap potongan dan jahitan memiliki cerita — cerita tentang
                    ketelitian, dedikasi, dan semangat untuk menciptakan yang terbaik. Dengan dukungan tenaga profesional,
                    bahan berkualitas, serta proses produksi yang detail, kami berkomitmen memberikan hasil terbaik untuk
                    setiap pelanggan. <br> <br> Bagi kami, Jongveksi bukan sekadar tempat menjahit, tetapi mitra yang tumbuh
                    bersama Anda dalam membangun brand dan kepercayaan.
                </p>
            </div>
        </div>
    </div>

    <div class="w-full relative h-[300px] md:h-[510px] xl:h-[650px]  ">
        <div class="container mx-auto mt-10 xl:mt-10  px-[20px] md:px-[100px] xl:px-[200px]">
            <div class="text-black font-family-abhaya-sm">
                <h1
                    class=" header  font-extrabold justify-center text-center items-center leading-relaxed text-[15px] md:text-[35px] xl:text-[40px]">
                    VISI MISI <span class="text-red-jongveksi"> JONGVEKSI</span>
                </h1>

                <!-- VISI -->
                <div class="flex flex-row items-start gap-4  py-0 xl:py-10 ">
                    <img src="/src/img/visi.png" alt="" class="w-20 md:w-40  lg:w-40 ">
                    <p class="py-8 md:py-15 xl:py-10 text-[10px] md:text-[18px] xl:text-[23px] ">
                        Menjadi brand konveksi online terpercaya untuk generasi muda
                    </p>
                </div>

                <!-- MISI -->
                <div class="flex flex-row-reverse items-start gap-4 py-0 xl:py-0 md:py-0 ">
                    <img src="/src/img/misi.png" alt="" class="w-20 md:w-40 lg:w-50 py-5 ">
                    <p class="py-5 md:py-7 text-[10px] md:text-[18px] xl:text-[23px]  text-justify">
                        Menyediakan layanan konveksi cepat, rapi, dan sesuai keinginan.
                        Memberikan layanan digital melalui media sosial yang aktif dan interaktif
                        menjadi solusi produktif pakaian untuk di kelas, organisasi, dan partai.
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection
