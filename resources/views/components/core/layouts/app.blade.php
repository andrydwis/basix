<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <link rel="icon" type="image/x-icon" href="{{ asset('images/logos/favicon.ico') }}">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet"/>

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        @livewireStyles

        @stack('styles')
    </head>
    <body class="scroll-smooth bg-neutral-300 selection:bg-neutral-900/50 font-sans text-black antialiased">
        <div x-data="{ showSidebar: false }" class="flex h-full flex-col lg:flex-row">
            <x-core.sidebars.app/>
            <div class="flex-grow">
                <x-core.navbars.app/>
                <div class="p-4">
                    {{ $slot }}
                </div>
            </div>
        </div>

        @livewireScripts

        @stack('scripts')
    </body>
</html>
