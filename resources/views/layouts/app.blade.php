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
    class="antialiased bg-white text-gray-600 
    dark:bg-black dark:text-gray-200">
    <div 
    class="relative z-[10] sticky top-0 h-16 md:h-20 flex justify-between items-center w-full p-2 px-4 border-b 
    bg-gray-50 md:bg-white 
    border-white md:border-gray-200
    md:p-4     
    dark:bg-black dark:border-gray-600">
        <div  class="flex items-center">
            @include('layouts.includes.sidenav-button')
            @include('layouts.includes.logo')
        </div>
        <div class="flex items-center">
            @include('layouts.includes.light-switch')
            @include('layouts.includes.user-menu')

        </div>
    </div>
    
    <div class="w-full">
        @include('layouts.includes.sidenav-left-mobile')
        @include('layouts.includes.sidenav-left')
        <div class="" style="padding-left:-256px !important;" id="content">
            {{ $slot }}
        </div>
        
    </div>

    @stack('modals')
    @livewire('livewire-ui-modal')
    @livewireScripts
</body>


</html>