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
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Aclonica&family=Bilbo+Swash+Caps&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <title>{{ $title }}</title>
</head>

<body class="bg-body">

    @include('components.header')

    {{-- Header > Index.blade --}}
    @yield('HeadDashboard')
    {{-- End Head Dashboard --}}

    {{-- Klien > index.blade --}}
    @yield('klien')
    {{-- End Klien --}}

    {{-- Head Catalog > Index.blade --}}
    @yield('HeadCatalog')
    {{-- End Header  --}}

    {{-- Catalog => Component > Catalog --}}
    @yield('catalog')
    {{-- End Catalog --}}

    {{-- Catalog => Component > Swiper / slider --}}
    @yield('swiper')
    @stack('crousel')
    {{-- End Swiper --}}

    {{-- Layanan-Jongveksi => Elements  > layanan --}}
    @yield('layanan-jongveksi')
    {{-- Ends Layanan --}}

    {{-- About => Elements > About --}}
    @yield('about')
    {{-- Ends About --}}


        {{-- Catalog => Component > Swiper / slider --}}
    @yield('detail-produk')
    @stack('detail-produk')
    {{-- End Swiper --}}

    {{-- Layanan --}}
    @yield('layanan')
    {{-- Ends Layanan --}
    
    }


    {{-- Component Footer => Component > Footer  --}}
    @include('components.footer')
    @stack('map')
    {{-- Ends Footer --}}

</body>

</html>
