<x-app-layout>
    <div class="p-4 sm:p-7">
        <h1 class="font-bold text-lg mb-6">Ustawienia. Kategorie usług / produktów</h1>
        
        @if ($message = Session::get('success'))
            <div class="bg-sky-100 rounded-xl p-4 dark:bg-sky-800">
                <p>{{ $message }}</p>
            </div>
        @endif

        <div class="md:flex md:flex-row gap-4 ">
            
            <div class="md:basis-2/3 bg-white rounded-xl p-4 dark:bg-gray-800 mb-6">
                <h2 class="font-medium text-lg mb-6">Lista kategorii usług / produktów</h2>
                @include('settings.productcategory.table')
            </div>

            <div class="md:basis-1/3 bg-white rounded-xl p-4 dark:bg-gray-800 ">
                <h2 class="font-medium text-lg mb-6">Dodaj nową kategorię</h2>
                @include('settings.productcategory.create')
            </div>
        </div>
    </div>
   
</x-app-layout>