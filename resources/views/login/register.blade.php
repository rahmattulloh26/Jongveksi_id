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
    <link
        href="https://fonts.googleapis.com/css2?family=Aclonica&family=Bilbo+Swash+Caps&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <title>{{ $title }}</title>
</head>

<body class="bg-body">

    <div class="w-full relative mt-20">
        <div class="container mx-auto px-[40px] md:px-[100px] xl:px-[150px]">
            <div class="flex justify-center items-center  font-family-abhaya-sm  ">

                <h2
                    class="mt-10 text-center text-[40px] font-extrabold tracking-tight text-red-jongveksi leading-relaxed">
                    Welcome <br>Glad to See you!</h2>
            </div>

            <div class="mt-5 sm:mx-auto sm:w-full sm:max-w-sm">
                <form action="{{ route('create') }}" method="POST" class="space-y-6 font-family-abhaya-sm">
                    @csrf
                    {{-- <label for="email"
                            class="block text-sm/6 font-medium text-red-jongveksi tracking-[2px]">Email address</label> --}}
                    @if ($errors->any())
                        <div class="alert text-red-jongveksi">
                            <ul>
                                @foreach ($errors->all() as $error )
                                <li>   {{ $error }} !  </li>
                                @endforeach
                                
                            </ul>
                        </div>
                        
                    @endif

                    <div class="mt-2">
                        <input id="name" value="{{ Session::get('name') }}" type="text" name="name" required
                            autocomplete="name" placeholder="Your Username"
                            class="block w-full rounded-md bg-white-jongveksi  outline-red-jongveksi  shadow-white border-red-jongveksi  shadow-black shadow-6xl px-3 py-3 md:py-4 text-base outline-1 -outline-offset-1  placeholder:text-gray-500   placeholder:tracking-[3px] focus:outline-2 focus:-outline-offset-2 focus:outline-red-jongveksi sm:text-sm/6" />
                    </div>
                    <div class="mt-2">
                        <input id="email" value="{{ Session::get('email') }}" type="email" name="email" required
                            autocomplete="email" placeholder="Your Email Address"
                            class="block w-full rounded-md bg-white-jongveksi  outline-red-jongveksi  shadow-white border-red-jongveksi  shadow-black shadow-6xl px-3 py-3 md:py-4 text-base outline-1 -outline-offset-1  placeholder:text-gray-500   placeholder:tracking-[3px] focus:outline-2 focus:-outline-offset-2 focus:outline-red-jongveksi sm:text-sm/6" />
                    </div>
                    <div>
                        <div class="mt-2">
                            <input id="password" type="password" name="password" required
                                autocomplete="current-password" placeholder="Your Password"
                                class="block w-full rounded-md bg-white-jongveksi  outline-red-jongveksi  shadow-white border-red-jongveksi  shadow-black shadow-6xl px-3 py-3 md:py-4 text-base outline-1 -outline-offset-1  placeholder:text-gray-500  placeholder:tracking-[3px] focus:outline-2 focus:-outline-offset-2 focus:outline-red-jongveksi sm:text-sm/6" />
                        </div>
                        <label for="password" class="block text-sm/6 font-medium text-gray-100">Password</label>
                    </div>
                    <div>
                        <button type="submit"
                            class="flex w-full justify-center rounded-md bg-red-jongveksi px-3 py-3 text-md tracking-[2px] font-semibold text-white hover:bg-black-jonveksi focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-red-jongveksi">Register</button>
                    </div>
                </form>

                {{-- <p class="mt-10 text-center text-sm/6 text-gray-400">
      Not a member?
      <a href="#" class="font-semibold text-indigo-400 hover:text-indigo-300">Start a 14 day free trial</a>
    </p> --}}
            </div>
        </div>
    </div>
</body>
