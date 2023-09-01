<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
    <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', 'PhotoCRM') }}</title>

        <!-- Fonts -->
        @vite(['resources/js/app.js', 'resources/css/app.css'])
        @vite(['resources/js/light-mode.js',])
        <!-- Styles -->
        @livewireStyles
        <style>
            [x-cloak] { display: none !important; }
        </style>
    </head>

    <body 
    class="antialiased relative font-sans font-inter  
    text-sm  font-normal overflow-x-hidden vertical
    bg-gray-300 text-gray-800
    dark:bg-black dark:text-gray-100">
        
        <div class="flex w-full ">
            <!-- navigation menu  -->
            @include('layouts.sidenav')
            <div id="content" class="!pl-[260px] w-full min-h-screen">
                <!-- Navbar -->
                @include('layouts.navbar')
                <!--Main layout-->
                <main class="pt-[26px] xl:pt-2 ">
                    {{ $slot }}
                </main>
                <!--Footer-->
                <footer>

                </footer>
            </div>
            @include('layouts.notification')
        </div> 
        @stack('modals')
        @livewireScripts
    </body>
</html>