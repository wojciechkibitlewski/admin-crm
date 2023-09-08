<x-app-layout>
    <x-a-header style="z-index:1;">
        <div></div>
        <div class="flex items-center">
            <a href="{{ route('products.show',$product->id) }}" title="Back" class="inline mr-2">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" 
                class="w-5 h-5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18" />
                </svg>
            </a>
            <x-a-title-header title="{{__('products.edit')}}" />
        </div>
    </x-a-header>    

    <div class="relative mx-2 pb-10">

        @include('includes.message')
        <div class="">
            @include('products.includes.edit-form')
        </div>
        
    </div>
    
</x-app-layout>