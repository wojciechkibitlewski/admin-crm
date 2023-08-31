<x-app-layout>
    <div class="p-4 sm:p-7">
        <h1 class="font-bold text-lg mb-6">Ustawienia. Źródła klientów</h1>
        
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
                <h2 class="font-medium text-lg mb-6">Źródła klientów</h2>
                <form action="{{ route('settings.salessource.update') }}" method="POST">
                    @csrf
                    <input type="hidden" name="id" value="{{ $source->id }}" />
                    <input type="hidden" name="_method" value="PATCH">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <!--Category -->
                    <div class="w-full mb-4 ">
                        <label for="source" class="">{{__('Źródło*')}}</label>
                        <input id="source" type="text" 
                        class="block mt-2 w-full border-gray-300 rounded-md
                        dark:text-black" 
                        name="source" value="{{ $source->source }}" 
                        required autofocus autocomplete="source" />
                    </div>                   
                    <!--Submit button-->
                    <button
                    type="submit"
                    class="block w-full rounded-md bg-gray-600 py-4 font-medium text-white">
                    Edytuj Źródło
                    </button>
                </form>

            </div>

            <div class="md:basis-1/3 bg-gray-100 rounded-xl p-4 dark:bg-gray-800 ">
                
            </div>
        </div>
    </div>
   
</x-app-layout>