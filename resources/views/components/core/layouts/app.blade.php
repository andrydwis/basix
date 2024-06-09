<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet"/>

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        @stack('styles')
    </head>
    <body class="h-screen scroll-smooth bg-blue-100 selection:bg-neutral-900/50 font-sans text-black antialiased">
        <div class="h-full" x-data="{ showSidebar: true }">
            <div class="grid h-full grid-cols-6">
                <x-core.sidebars.app/>
                <div class="col-span-5" :class="showSidebar ? 'col-span-5' : 'col-span-6'">
                    <x-core.navbars.app/>
                    <div class="p-4">
                        {{ $slot }}
                    </div>
                </div>
            </div>
        </div>

        @stack('scripts')
    </body>
</html>
