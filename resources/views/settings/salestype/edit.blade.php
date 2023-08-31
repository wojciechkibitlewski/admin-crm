<x-app-layout>
    <div class="p-4 sm:p-7">
        <h1 class="font-bold text-lg mb-6">Ustawienia. Stany realizacji zamówienia</h1>
        
        @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Error!</strong> <br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="md:flex md:flex-row gap-4 ">
            
            <div class="md:basis-2/3 bg-white rounded-xl p-4 dark:bg-gray-800 mb-6">
                <h2 class="font-medium text-lg mb-6">Edytuj stan</h2>
                <form action="{{ route('settings.salestype.update') }}" method="POST">
                    @csrf
                    <input type="hidden" name="id" value="{{ $type->id }}" />
                    <input type="hidden" name="_method" value="PATCH">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <!--Category -->
                    <div class="w-full mb-4 ">
                        <label for="type" class="">{{__('Stan*')}}</label>
                        <input id="type" type="text" 
                        class="block mt-2 w-full border-gray-300 rounded-md
                        dark:text-black" 
                        name="type" value="{{ $type->type }}" 
                        required autofocus autocomplete="type" />
                    </div>  
                    <div class="mb-4">
                        <label for="order" class="">{{__('Kolejność*')}}</label>
                        <input id="order" type="text" 
                        class="block mt-2 w-full border-gray-300 rounded-md md:w-[50%]
                        dark:text-black" 
                        name="order" value="{{ $type->order }}" 
                        required autocomplete="order" />

                    </div>                  
                    <!--Submit button-->
                    <button
                    type="submit"
                    class="block w-full rounded-md bg-gray-600 py-4 font-medium text-white">
                    Edytuj stan
                    </button>
                </form>

            </div>

            <div class="md:basis-1/3 bg-gray-100 rounded-xl p-4 dark:bg-gray-800 ">
                
            </div>
        </div>
    </div>
   
</x-app-layout>