<x-a-header>
    <x-a-link-add href="#" title="{{__('reports.products_more')}}">
        <span class="hidden md:inline-block">{{__('reports.products_more')}}</span>
        <span class="md:hidden">{{__('reports.see_more')}}</span>
    </x-a-link-add>
    <h2 class="text-lg dark:text-black">{{__('reports.products_top')}} {{$currentYear}}</h2>
</x-a-header> 

<canvas class="w-full p-4 mb-4  overflow-x-auto font-light" id="productsChart"></canvas>