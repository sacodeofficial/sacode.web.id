<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="light">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css','resources/js/app.js'])

        <!-- Alpine.js -->
        {{-- <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script> --}}

        <!-- WP CSS -->
        <link rel="stylesheet" type="text/css" href="{{asset('assets/css/wp-style.css')}}">

        <!-- Styles -->
        @livewireStyles

    </head>
    <body class="bg-white dark:bg-black" style="background-image: url('{{ asset('images/bg-1.png') }}'); background-attachment: fixed;">

        <x-guest-header />

        <div class="font-sans text-gray-900 antialiased">
            <!-- ========== MAIN CONTENT ========== -->
            <main id="content">
                <div class="mx-auto pt-12 pb-10 px-4 sm:px-6 lg:px-8 md:pt-24">
                    {{ $slot }}
                </div>
            </main>
            <!-- ========== END MAIN CONTENT ========== -->
        </div>

        <x-guest-footer />

        @livewireScripts
    </body>
</html>
