<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport"
        content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width, height=device-height, target-densitydpi=device-dpi" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/aaa.css') }}" rel="stylesheet" />
    <link href="{{ asset('vendor2/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor2/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor2/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor2/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
    <style>
        :root {
            touch-action: pan-x pan-y;
            height: 100%
        }

        .noselect {
            -webkit-touch-callout: none;
            /* iOS Safari */
            -webkit-user-select: none;
            /* Safari */
            -khtml-user-select: none;
            /* Konqueror HTML */
            -moz-user-select: none;
            /* Old versions of Firefox */
            -ms-user-select: none;
            /* Internet Explorer/Edge */
            user-select: none;
            /* Non-prefixed version, currently
                                      supported by Chrome, Edge, Opera and Firefox */
        }

        .Scard {
            box-shadow: 0 6px 10px rgba(0, 0, 0, .08), 0 0 6px rgba(0, 0, 0, .05);
            transition: .3s transform cubic-bezier(.155, 1.105, .295, 1.12), .3s box-shadow, .3s -webkit-transform cubic-bezier(.155, 1.105, .295, 1.12);
            cursor: pointer;
        }

        .Scard:hover {
            transform: scale(1.01);
            box-shadow: 0 10px 20px rgba(0, 0, 0, .12), 0 4px 8px rgba(0, 0, 0, .06);
        }

    </style>

    <title>{{ __('Waseetco') }}</title>
    @livewireStyles

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script type="module">
        // Import the functions you need from the SDKs you need
        import { initializeApp } from "https://www.gstatic.com/firebasejs/9.6.10/firebase-app.js";
        // https://firebase.google.com/docs/web/setup#available-libraries

        // Your web app's Firebase configuration
        const firebaseConfig = {
          apiKey: "AIzaSyAuUz1eW0v7wSZG7b7Qf91dRyyIoofb-DA",
          authDomain: "ecommerce-for-mhd.firebaseapp.com",
          projectId: "ecommerce-for-mhd",
          storageBucket: "ecommerce-for-mhd.appspot.com",
          messagingSenderId: "632576955647",
          appId: "1:632576955647:web:c1a9ccdf14a17f1564a8ca"
        };

        // Initialize Firebase
        const app = initializeApp(firebaseConfig);
      </script>
</head>

<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100">
        @include('layouts.navigation')
        @livewire('dashboard.dashboard')

        {{-- <!-- Page Heading -->
        <header class="bg-white shadow">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                {{ $header }}
            </div>
        </header>
        adsfadsf
        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main> --}}
    </div>
    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14"></script>
    @livewireScripts
</body>

</html>
