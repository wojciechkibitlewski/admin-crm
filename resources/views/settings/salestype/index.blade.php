<x-app-layout>
    <div class="p-4 sm:p-7">
        <h1 class="font-bold text-lg mb-6">Ustawienia. Stany realizacji zamówienia</h1>
        
        @if ($message = Session::get('success'))
            <div class="bg-sky-100 rounded-xl p-4 dark:bg-sky-800 mb-4">
                <p>{{ $message }}</p>
            </div>
        @endif

        <div class="md:flex md:flex-row gap-4 ">
            
            <div class="md:basis-2/3 bg-white rounded-xl p-4 dark:bg-gray-800 mb-6">
                <h2 class="font-medium text-lg mb-6">Stany realizacji zamówienia</h2>
                @include('settings.salestype.table')
            </div>

            <div class="md:basis-1/3 bg-white rounded-xl p-4 dark:bg-gray-800 ">
                <h2 class="font-medium text-lg mb-6">Dodaj nowy stan</h2>
                @include('settings.salestype.create')
            </div>
        </div>
    </div>
   
</x-app-layout>