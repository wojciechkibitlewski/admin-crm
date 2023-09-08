<x-app-layout>
    <x-a-header style="z-index:1;">
        <div></div>
        <div class="flex items-center">
            <x-a-title-header title="{{__('settings.category')}}" />
        </div>
    </x-a-header>    

    <div class="relative mx-2 pb-10">

        @include('includes.message')
        <div class="p-4">
            @include('settings.productcategory.includes.show-category')
           
        </div>
        
    </div>
    
</x-app-layout>