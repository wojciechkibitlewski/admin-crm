<x-app-layout>
    <x-a-header style="z-index:1;">
        <div></div>
        <div class="flex items-center">
            <x-a-title-header title="{{__('reports.raports')}}" />
        </div>
    </x-a-header>    

    <div class="relative pb-10">

        @include('includes.message')
        <div class="p-4">
            @livewire('sales.sales-month-table')
            @livewire('sales.sales-category')
            @livewire('sales.sales-year-category')
            @livewire('sales.sales-year-to-year')
            
            @include('reports.includes.topclients-index')
            @include('reports.includes.topproducts-index')

        </div>
        

    </div>
    
</x-app-layout>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>



<script>
    var chartData = @json($chartDataClient);
    
    var ctx = document.getElementById('clientsChart');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: JSON.parse(chartData.labels),
            datasets: [{
                label: " {{__('reports.sales_value')}}",
                data: JSON.parse(chartData.dataset),
                backgroundColor: JSON.parse(chartData.colours),
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script>

<script>
    var chartData = @json($chartDataProduct);

    var ctx = document.getElementById('productsChart');
    var chart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: JSON.parse(chartData.labels),
            datasets: [{
                label: " {{__('reports.sales_value')}}",
                data: JSON.parse(chartData.dataset),
                backgroundColor: JSON.parse(chartData.colours),
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script>