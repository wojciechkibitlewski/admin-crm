<x-app-layout>
    <x-a-header style="z-index:1;">
        <div></div>
        <div class="flex items-center">
            <x-a-title-header title="{{__('products.products')}}" />
        </div>
    </x-a-header>    

    <div class="relative mx-2 pb-10">

        @include('includes.message')
        <div class="p-4">
            @livewire('product.product-table')
        </div>
        
            <div class="relative z-[11] sticky bottom-[50px] ml-[70%] md:ml-[80%] lg:ml-[86%] xl:ml-[92%] w-20 h-20 p-2 rounded-full bg-amber-500 text-center text-white font-black">
                <a href="{{route('products.create')}}" title="{{__('clients.add_client')}}" class="">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-18 h-18">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                </svg>
                </a>
            </div>
        
    </div>
    
</x-app-layout>