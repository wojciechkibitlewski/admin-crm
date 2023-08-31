<x-app-layout>
    <div class="p-4 sm:p-7">
        <h1 class="font-bold text-lg">Ustawienia. Wszystkie</h1>
       

        <h2 class="text-lg mt-6">Zamówienia</h2>
        <div class="grid grid-cols-3 gap-4 mt-4">
            <div class="bg-white rounded-xl p-4 dark:bg-gray-800 ">
                <h3 class="font-medium text-lg ">Źródła klientów</h3>
                <p>Dodaj, edytuj lub usuń Źródła pozyskiwania klientów w CRM</p>
                <a href="{{route('settings.salessource.index')}}" title="Żródła klientów"
                class="inline-block rounded mt-4 p-2 px-4 bg-gray-600 text-xs font-medium uppercase text-white
                hover:bg-gray-700 focus:outline-none 
                dark:hover:bg-gray-900 dark:focus:outline-none"
                >
                Go!
                </a>
            </div>
            <div class="bg-white rounded-xl p-4 dark:bg-gray-800 ">
                <h3 class="font-medium text-lg ">Stany realizacji zamowienia</h3>
                <p>Dodaj, edytuj lub usuń Stan realizacji zamówienia w CRM</p>
                <a href="{{route('settings.salestype.index')}}" title="Stany realizacji zamowienia"
                class="inline-block rounded mt-4 p-2 px-4 bg-gray-600 text-xs font-medium uppercase text-white
                hover:bg-gray-700 focus:outline-none 
                dark:hover:bg-gray-900 dark:focus:outline-none"
                >
                Go!
                </a>
            </div>
            <div></div>
        </div>


        <h2 class="text-lg mt-6">Usługi / produkty</h2>
        <div class="grid grid-cols-3 gap-4 mt-4">
            <div class="bg-white rounded-xl p-4 dark:bg-gray-800 ">
                <h3 class="font-medium text-lg ">Kategorie</h3>
                <p>Dodaj, edytuj lub usuń Kategorie usług / produktów w CRM</p>
                <a href="{{route('settings.productcategory.index')}}" title="Kategorie produktów"
                class="inline-block rounded mt-4 p-2 px-4 bg-gray-600 text-xs font-medium uppercase text-white
                hover:bg-gray-700 focus:outline-none 
                dark:hover:bg-gray-900 dark:focus:outline-none"
                >
                Go!
            </a>
            </div>
            <div></div>
            <div></div>
        </div>



    </div>
   
</x-app-layout>