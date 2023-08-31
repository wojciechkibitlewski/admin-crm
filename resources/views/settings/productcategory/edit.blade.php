<x-app-layout>
    <div class="p-4 sm:p-7">
        <h1 class="font-bold text-lg mb-6">Ustawienia. Kategorie usług / produktów</h1>
        
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
            
            <div class="md:basis-2/3 bg-gray-100 rounded-xl p-4 dark:bg-gray-800 mb-6">
                <h2 class="font-medium text-lg mb-6">Lista kategorii usług / produktów</h2>
                <form action="{{ route('settings.productcategory.update') }}" method="POST">
                    @csrf
                    <input type="hidden" name="id" value="{{ $productcategory->id }}" />
                    <input type="hidden" name="_method" value="PATCH">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <!--Category -->
                    <div class="w-full mb-4 ">
                        <label for="category" class="">{{__('Kategoria*')}}</label>
                        <input id="category" type="text" 
                        class="block mt-2 w-full border-gray-300 rounded-md
                        dark:text-black" 
                        name="category" value="{{ $productcategory->category }}" 
                        required autofocus autocomplete="category" />
                    </div>                   
                    <!--Submit button-->
                    <button
                    type="submit"
                    class="block w-full rounded-md bg-gray-600 py-4 font-medium text-white">
                    Edytuj kategorię
                    </button>
                </form>

            </div>

            <div class="md:basis-1/3 bg-gray-100 rounded-xl p-4 dark:bg-gray-800 ">
                
            </div>
        </div>
    </div>
   
</x-app-layout>