<x-a-header>
    <x-a-link-add href="#" title="{{__('reports.clients_more')}}">
        <span class="hidden md:inline-block">{{__('reports.clients_more')}}</span>
        <span class="md:hidden">{{__('reports.see_more')}}</span>
    </x-a-link-add>
    <h2 class="text-lg dark:text-black">{{__('reports.clients_top')}} {{$currentYear}}</h2>
</x-a-header>    

<canvas class="w-full p-4 mb-4 overflow-x-auto font-light" id="clientsChart"></canvas>