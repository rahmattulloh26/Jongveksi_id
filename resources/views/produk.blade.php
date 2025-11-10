@extends('components.layout')


@section('HeadCatalog')
<div class="w-full relative">
    <div class="container mx-auto mt-30 ">
        <div class="flex flex-col justify-center items-center text-center font-family-abhaya-sm leading-relaxed">
        <h1 class="text-[15px]  ">Produk >> Jaket </h1>
        <h1 class="text-[25px] font-semibold ">Produk Jongveksi_ID</h1>
        <p class="text-[10px] px-[30px]">Wujudkan desain pakaian impianmu! Pilih, kustom, dan dapatkan kualitas terbaik mulai dari Rp 100.000 saja.</p>
        
        </div>
    </div>

</div>
@endsection

@section('layanan')
@include('components.layanan')
@endsection

@section('catalog')
@include('components.catalog')
@endsection