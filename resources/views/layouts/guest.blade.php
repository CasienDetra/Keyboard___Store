<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans bg-black text-gray-900 antialiased">
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-900/5 relative"> <!-- Added relative to parent -->
            <div class="absolute inset-0 z-0" style="background-image: url('/build/assets/Background.png'); opacity: 70%; background-size: cover; background-position: center;"></div>
            <!-- Logo -->
            {{-- <div class="z-10 relative"> <!-- Added relative to ensure z-index works -->
                <a href="/">
                    <h1 class="text-[12rem] font-bold text-white">Art E-Store</h1>
                </a>
            </div> --}}
             <div class="mt-16 flow-root sm:mt-24 ">
            <div class="h-[70%] w-[100%] rounded-xl  lg:p-4 flex justify-center items-center mx-auto">
                <img src="/build/assets/Glow Effect.png" alt="App screenshot" width="2432" height="1442" class="opacity-40 absolute top-0 h-[100%] w-[62%] rounded-xl  lg:p-4 flex justify-center items-center mx-auto z-0" />
                <img src="/build/assets/Glow Effect.png" alt="App screenshot" width="2432" height="1442" class="opacity-40 absolute top-0 h-[100%] w-[62%] rounded-xl  lg:p-4 flex justify-center items-center mx-auto z-0" />
            </div>
            {{-- <div class=" absolute top-0 h-[80%] w-[70%] rounded-xl  lg:p-4 flex justify-center items-center mx-auto">
                <img src="/build/assets/Glow Effect.png" alt="App screenshot" width="2432" height="1442" class="rounded-md shadow-2xl" />
            </div> --}}

        </div>
            <!-- Register Card -->
            <div class="w-full sm:max-w-md mt-6 px-6 py-4 border bg-[#111827] border-white shadow-md overflow-hidden sm:rounded-xl relative z-10">
                {{ $slot }}
            </div>
        </div>
    </body>
</html>
