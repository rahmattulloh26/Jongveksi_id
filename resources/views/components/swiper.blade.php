
@extends('components.layout')

@section('swiper')
    <!-- Swiper Container -->
    <div class="relative w-full  ">
        <div class="swiper w-full h-[250px] sm:h-[400px] md:h-[500px] lg:h-screen   ">
            <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide">
                    <img src="/src/img/latarOne.png" alt="Slide 1" class="w-full h-full object-cover object-center">
                    <p
                        class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 
             text-white  text-center leading-relaxed  mt-8 md:mt-0text-[15px] md:text-3xl lg:text-5xl font-family-bilbo">
                        Welcome to Jongveksi_ID Your Fashion Starts Here
                    </p>
                </div>
                <div class="swiper-slide">
                    <img src="/src/img/latarTwo.png" alt="Slide 2" class="w-full h-full object-cover object-center">
                    <p
                        class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 
             text-white  text-center leading-relaxed mt-8 md:mt-0 text-[15px] md:text-3xl lg:text-5xl font-family-bilbo">
                        Crafting Quality, Stitch by Stitch.
                    </p>
                </div>
                <div class="swiper-slide">
                    <img src="/src/img/latarFive.png" alt="Slide 3" class="w-full h-full object-cover object-center">
                    <p
                        class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 
             text-white  text-center leading-relaxed mt-8 md:mt-0 text-[15px] md:text-3xl  lg:text-5xl font-family-bilbo">
                        Where Passion Meets Precision
                    </p>
                </div>
            </div>
            <!-- Pagination -->
            <div class="swiper-pagination text-white"></div>

            <!-- Tombol Navigasi -->
            <div
                class="swiper-button-prev !hidden md:!flex
             !absolute  !left-10
             !w-5 !h-5  !items-center !font-semibold !justify-center
             !text-white z-[10]">
            </div>

            <div
                class="swiper-button-next !hidden md:!flex 
             !absolute !right-10
             !w-5 !h-5  !items-center !font-semibold !justify-center
             !text-white z-[10]">
            </div>
        </div>
    </div>
@endsection



@push('crousel')
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
