<x-a-header>
    <x-a-link-add href="{{route('reports.sales')}}" title="{{__('reports.sales_more')}}">
        <span class="hidden md:inline-block">{{__('reports.sales_more')}}</span>
        <span class="md:hidden">{{__('reports.see_more')}}</span>
    </x-a-link-add>
    <h2 class="text-lg dark:text-black">{{__('reports.sales_month')}} {{$currentYear}}</h2>
</x-a-header> 

<canvas class="w-full p-4 mb-4 overflow-x-auto font-light" id="userChart"></canvas>