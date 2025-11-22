@extends('components.layout')

@section('catalog')
<div class="w-full relative">
    <div class="container header px-[20px] md:px-[100px] xl:px-[200px] mx-auto 
                grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 mt-10 py-5">
        @foreach ($products as $product)
            <div class="flex flex-col justify-center items-center px-2 py-5">
                <img src="{{ asset('img/' . $product->image) }}" alt="{{ $product->name_produk }}" class="h-50">
                <div class="flex flex-col py-5 font-family-abyssinica text-center">
                    <h1 class="text-[15px]"> {{ $product->name_produk }}</h1>
                    <p class="text-[10px] xl:px-14">
                        {{ $product->sub_judul }}
                        <span>{{ Str::limit( $product->description , 40 )}} </span>
                    </p>
                    <div class="mt-5">
                        <a href="{{ route('produk.detail', $product->id) }}" class="button rounded-[1px] px-5 py-2 text-[9px]">
                            Lihat Lebih detail
                        </a>
                    </div>
                </div>
            </div>
        @endforeach
    </div> <!-- End grid -->
</div> <!-- End wrapper -->
@endsection
