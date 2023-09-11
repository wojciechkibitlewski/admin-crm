<x-app-layout>
    <x-a-header style="z-index:1;">
        <div></div>
        <div class="flex items-center">
            <x-a-title-header title="{{__('reports.reports_sales')}}" />
        </div>
    </x-a-header>    

    <div class="relative mx-2 pb-10">

        @include('includes.message')
        <div >
            @livewire('sales.sales-month-table')
            @livewire('sales.sales-category')
            @livewire('sales.sales-year-category')
            @livewire('sales.sales-year-to-year')

        </div>
        
    </div>
    
</x-app-layout>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
