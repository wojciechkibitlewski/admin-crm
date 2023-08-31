
<form action="{{ route('clients.search') }}" method="POST" >
    @csrf
    <p class="font-bold text-lg ">Szukaj klienta</p>
    <div class="flex flex-row items-center ">
        <div class="basis-1/3">
            <p>Zakres dat</p>
        </div>
        <div class="basis-1/3 mr-4">
            <input type="date" class="block mt-2 w-full border-gray-300 rounded-md dark:text-black" 
            name="date_start" value="{{$startDate}}" 
            autocomplete="date_start" />
        </div>
        <div class="basis-1/3">
            <input type="date" class="block mt-2 w-full border-gray-300 rounded-md dark:text-black" 
            name="date_end" value="{{$endDate}}" 
            autocomplete="date_end" />
        </div>
    </div>
    
    
    
    <div class="flex flex-row items-center ">
        <div class="basis-1/3">
        </div>
        <div class="basis-1/3 mr-4">
            
        </div>
        <div class="basis-1/3">
            <button type="submit" 
            class="block w-full rounded-md bg-gray-600 py-4 font-medium text-white mt-4">
            {{ __('Szukaj Klientów')}}
            </button> 
        </div>
    </div>
</form>