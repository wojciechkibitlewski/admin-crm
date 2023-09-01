<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'PhotoCRM') }}</title>

        <!-- Fonts -->

        <!-- Scripts -->
        @vite(['resources/js/app.js', 'resources/css/app.css'])
        @vite(['resources/js/light-mode.js',])

        <!-- Styles -->
        @livewireStyles
    </head>
    <body class="antialiased relative font-sans font-inter
    text-sm text-black font-normal overflow-x-hidden vertical
    bg-gray-300 text-gray-800
    dark:bg-black dark:text-gray-100" >
    
        <div class="w-full flex flex-nowrap items-center justify-between">
            <div class="p-4 dark:bg-black">
                <a href="{{route('welcome')}}" class="flex-1 w-full">
                <img src="{{asset('images/logo.png')}}" alt="PhotoCRM" class="block dark:hidden h-5">
                <img src="{{asset('images/dark-logo.png')}}" alt="PhotoCRM" class="hidden dark:block h-5">
                </a>
            </div>

            <div class="flex flex-wrap items-center pr-6">
                <!-- dark / light mode  -->
                <x-a-light-mode />
                <!-- join now  -->
                <a href="{{route('register')}}" title="{{__('auth.joinnow')}}" class="p-1 px-2 ">
                    <svg xmlns="http://www.w3.org/2000/svg" 
                    fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="md:hidden w-6 h-6 inline">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 7.5v3m0 0v3m0-3h3m-3 0h-3m-2.25-4.125a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zM4 19.235v-.11a6.375 6.375 0 0112.75 0v.109A12.318 12.318 0 0110.374 21c-2.331 0-4.512-.645-6.374-1.766z" />
                    </svg>
                    <p class="hidden md:inline-block ">{{__('auth.joinnow')}}</p>
                </a>
                <!-- sign in  -->
                <a href="{{route('login')}}" title="{{__('auth.signin')}}" class="p-1 px-2 border border-gray-300 rounded">
                    <svg xmlns="http://www.w3.org/2000/svg" 
                    fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="md:hidden w-6 h-6 inline">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15m3 0l3-3m0 0l-3-3m3 3H9" />
                    </svg>
                    <p class="hidden md:inline-block ">{{__('auth.signin')}}</p>
                </a>

            </div>
        </div> 
    
        <div class="">
            {{ $slot }}
        </div>

        @stack('modals')
        @livewireScripts
    </body>
</html>