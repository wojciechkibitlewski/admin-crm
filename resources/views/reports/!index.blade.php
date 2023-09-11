<x-app-layout>
    <div class="p-4 sm:p-7">
        
        <x-a-header>
            <div></div>
            <x-a-title-header title="{{__('Analyses and reports')}}" />
        </x-a-header>        

        @if ($message = Session::get('success'))
            <div class="bg-sky-100 rounded-xl p-4 dark:bg-sky-800 mb-4">
                <p>{{ $message }}</p>
            </div>
        @endif
        @if ($errors->any())
            <div class="bg-red-100 rounded-xl p-4 dark:bg-red-800 mb-4">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="bg-white rounded-xl p-4 dark:bg-gray-300 mb-8">
            <x-a-header>
                <x-a-link-add href="#" title="{{__('Więcej raportów nt sprzedaży')}}">
                    <span class="hidden md:inline-block">{{__('Więcej raportów nt. sprzedaży')}}</span>
                    <span class="md:hidden">{{__('more')}}</span>
                </x-a-link-add>
                <h2 class="text-lg dark:text-black">Sprzedaż łączna z podziałem na miesiące w {{$currentYear}}</h2>
            </x-a-header>            
            <canvas class="w-full overflow-x-auto font-light" id="userChart"></canvas>
        </div>

        <div class="bg-white rounded-xl p-4 dark:bg-gray-300  mb-8">
            <x-a-header>
                <x-a-link-add href="#" title="{{__('Więcej raportów nt klientów')}}">
                    {{__('Więcej raportów nt. klientów')}}    
                </x-a-link-add>
                <h2 class="text-lg dark:text-black">Top 10. Najlepsi klienci w {{$currentYear}}</h2>
            </x-a-header>            
            <canvas class="w-full overflow-x-auto font-light" id="clientsChart"></canvas>
        </div>

        <div class="bg-white rounded-xl p-4 dark:bg-gray-300 ">
            <x-a-header>
                <x-a-link-add href="#" title="{{__('Więcej raportów nt klientów')}}">
                    {{__('Więcej raportów nt. produktów')}}    
                </x-a-link-add>
                <h2 class="text-lg dark:text-black">TOP 10. Najlepiej sprzedające się produkty w {{$currentYear}}</h2>
            </x-a-header>            
            <canvas class="w-full overflow-x-auto font-light" id="productsChart"></canvas>
        </div>
    </div>
   
</x-app-layout>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
    var chartData = @json($chartData);
    var ctx = document.getElementById('userChart');
    var userChart = new Chart(ctx, {
        type: 'bar', // Możesz wybrać inny rodzaj wykresu
        data: {
            labels: JSON.parse(chartData.labels),
            datasets: [{
                label: 'Wartosć sprzedaży',
                data: JSON.parse(chartData.dataset),
                backgroundColor: JSON.parse(chartData.colours),
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
    var chartData = @json($chartDataClient);
    
    var ctx = document.getElementById('clientsChart');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: JSON.parse(chartData.labels),
            datasets: [{
                label: 'Wartość sprzedaży',
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
                label: 'Wartość sprzedaży',
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