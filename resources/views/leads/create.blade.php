<x-app-layout>
    <x-a-header style="z-index:1;">
        <div></div>
    {{-- 
        <x-a-header-button-search 
        data-te-toggle="modal"
        data-te-target="#modalSearchLead"
        data-te-ripple-init
        data-te-ripple-color="light"
        >
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" 
            class="w-6 h-6 inline">
            <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
            </svg>
                <span class="hidden md:inline-block  md:ml-2">
                    {{__('Szukaj zamówień')}}
                </span>
        </x-a-header-button-search>
    --}}
        <div class="flex items-center">
                         
            <a href="{{ route('leads.index') }}" title="Back" class="inline mr-2">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" 
                class="w-5 h-5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18" />
                </svg>
            </a>
            
            <x-a-title-header title="{{__('Zamówienia')}}" />
        </div>
    </x-a-header>    

    <div class="relative pb-10">
        <div class="p-4 border-b border-gray-200">
            <h3 class="font-bold">Utwórz nowe zamówienie</h3>
            <p class="block md:hidden text-xs">Uzupełnij dane w trzech zakładkach i naciśnij "Dodaj zamówienie" na dole formularza</p>
            <p class="hidden md:block text-xs">Uzupełnij dane w trzech zakładkach i naciśnij "Dodaj zamówienie" z prawej strony formularza</p>
        </div>
        
        @include('leads.includes.message')
        @include('leads.includes.create-form')
        {{-- 
        <a href="{{route('leads.create')}}" title="Dodaj nowe zamówienie" class="">
            <div class="relative z-[11] sticky bottom-[50px] ml-[70%] md:ml-[80%] lg:ml-[86%] xl:ml-[92%] w-20 h-20 p-2 rounded-full bg-amber-500 text-center text-white font-black">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-18 h-18">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                </svg>
            </div>
        </a>
         --}}
    </div>
    
</x-app-layout>
