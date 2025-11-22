@extends('components.layout')

@section('layanan')

<div class=" flex justify-center items-center mt-6 md:mt-8 py-3">
   <a href="{{ route('produk.catalog') }}" 
        class="header rounded-[1px] bg-red-jongveksi px-4 md:px-6 py-3 text-white font-family-abyssinica text-sm transition">
        Lihat Semua Detail Product
</a>
</div>

<div class=" flex flex-col px-[20px] md:px-[100px] xl:px-[200px] justify-center items-center mt-5 font-family-abhaya-sm leading-relaxed">
    <h1 class=" header text-sm text-center md:text-[22px] lg:text-2xl font-extrabold">
        Masih bingung menentukan pilihan produk yang sesuai?
    </h1>
    <h1 class=" header text-sm text-center md:text-[22px] lg:text-2xl pt-5 font-extrabold">
        Kami Menawarkan Layanan Terbaik Untuk Anda
    </h1>
</div>

<div class="w-full relative   ">
<div class="container  cardAnimate  grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 xl:grid-cols-4 mt-10 mx-auto px-[20px] md:px-[100px] xl:px-[200px] py-5 leading-relaxed">
    
    <div class="card  flex flex-col mx-2 my-3 px-4 py-3 bg-merah-muda rounded-[15px] ">
        <img src="/src/img/produksi.png" alt="Produksi-Jongveksi" class="h-20 w-20">
        <h2 class="font-Alconica text-[15px] py-2">Produksi Cepat dan Tepat Waktu</h2>
        <p class="text-sm font-family-abyssinica">
            Dengan estimasi pengerjaan sekitar 2–4 minggu, kami menjamin setiap proses berjalan efisien dan terkontrol
            tanpa menurunkan kualitas produk.
        </p>
    </div>

    <div class="card  flex flex-col mx-2 my-3 px-4 py-3 bg-Oren-muda rounded-[15px]">
        <img src="/src/img/harga.png" alt="Harga" class="h-20 w-20">
        <h2 class="font-Alconica text-[15px] py-2">Harga Kompetitif dan Terjangkau!</h2>
        <p class="text-sm font-family-abyssinica">
            Mulai dari 70K/pcs, kamu sudah bisa mendapatkan produk berkualitas tinggi dengan desain eksklusif dan bahan pilihan.
        </p>
    </div>

    <div class="card  flex flex-col mx-2 my-3 px-4 py-3 bg-Grey-muda rounded-[15px]">
        <img src="/src/img/kualitas.png" alt="Kualitas" class="h-20 w-20">
        <h2 class="font-Alconica text-[15px] py-2">Kualitas Bahan dan Jahitan Terjamin</h2>
        <p class="text-sm font-family-abyssinica">
            Menggunakan bahan kain dan bordir premium dengan pengawasan ketat di setiap tahap produksi, 
            sebagai bentuk komitmen kami terhadap kualitas dan kepuasan pelanggan.
        </p>
    </div>

    <div class="card  flex flex-col mx-2 my-3 px-4 py-3 bg-Grey rounded-[15px]">
        <img src="/src/img/design.png" alt="Desain Custom" class="h-20 w-20">
        <h2 class="font-Alconica text-[15px] py-2">Design Custom Sesuai Kebutuhan Permintaan</h2>
        <p class="text-sm font-family-abyssinica">
            Nikmati layanan konsultasi desain gratis bersama tim profesional kami, 
            agar setiap detail produk tampil sempurna dan sesuai keinginan Anda.
        </p>
    </div>

</div>

<div class="w-full  relative mt-10">
<div style="background-image: url('/src/img/jongveksi-1.png') ;"
    class="hover:bg-fixed h-[400px]  bg-center bg-cover bg-no-repeat flex flex-col items-center justify-center">
    <h1 class="header text-[15px] md:text-[35px] text-white font-Alconica font-semibold leading-relaxed text-center">
        Konsultasi dan Design Custom Gratis <br>
        Sesuai Kebutuhan Permintaan
    </h1>
    <button type="submit"
        class="header rounded-[2px] bg-red-jongveksi px-4 py-2 my-4 md:px-7 md:py-2.5 text-white font-family-abyssinica text-sm transition">
        Hubungin Kami
    </button>
</div>

<div class="w-full relative bg-black">

<div class=" container header flex flex-col  m-0 py-10 md:py-20  mx-auto px-[20px] md:px-[100px] xl:px-[200px] ">
    <h1 class="font-family-abhaya-sm text-[25px] lg:text-[35px] text-white font-extrabold">
        Portofolio <span class="text-red-jongveksi">Jongveksi</span> Konveksi
    </h1>

    <p class="text-white font-family-abyssinica py-3 text-[15px]">
        Jongveksi adalah usaha konveksi pakaian yang bergerak dalam bidang pembuatan berbagai jenis pakaian seperti kaos, 
        kemeja, jaket, seragam sekolah, dan almamater. Kami melayani pesanan dari skala kecil hingga besar dengan kualitas terbaik 
        dan harga terjangkau.
        <br><br>
        Jongveksi berdiri sejak 2018. Kami melayani pemesanan secara online yang dapat diakses melalui 
        Instagram <span class="text-red-jongveksi font-bold">@jongveksi_id</span> dan nomor WhatsApp 
        <span class="text-red-jongveksi font-bold">0858-8595-5401</span>.
    </p>

    <img src="/src/img/porto.png" alt="Portofolio Jongveksi" class="py-10">
</div>
</div>
</div>
</div>
@endsection

