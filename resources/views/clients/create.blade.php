<x-app-layout>
    <div class="p-4 sm:p-7">
        <h1 class="font-bold text-lg">Klienci. Nowy klient</h1>

        @if ($message = Session::get('success'))
            <div class="bg-sky-100 rounded-xl p-4 dark:bg-sky-800 mb-4">
                <p>{{ $message }}</p>
            </div>
        @endif

        <div class="md:flex md:flex-row gap-4 mt-4">
            
            <div class="md:basis-2/3 bg-white rounded-xl p-4 dark:bg-gray-800 mb-6">
                <h2 class="font-medium text-lg mb-6">Dodawanie nowego klienta</h2>
                
                <div>
                <form action="{{ route('clients.store') }}" method="POST" >
                    @csrf
                      
                    <div class="w-full mb-4 ">
                        <label for="name" class="">{{__('Imię, nazwisko*')}}</label>
                        <input id="name" type="text" 
                        class="block mt-2 w-full border-gray-300 rounded-md
                        dark:text-black" 
                        name="name" value="{{old('name')}}" 
                        required autofocus autocomplete="name" />
                    </div> 
                    <div class="w-full mb-4 ">
                        <label for="email" class="">{{__('E-mail')}}</label>
                        <input id="email" type="email" 
                        class="block mt-2 w-full border-gray-300 rounded-md
                        dark:text-black" 
                        name="email" value="{{old('email')}}" 
                        autocomplete="email" />
                    </div> 
                    <div class="w-full mb-4 ">
                        <label for="phone" class="">{{__('Telefon')}}</label>
                        <input id="phone" type="text" 
                        class="block mt-2 w-full border-gray-300 rounded-md
                        dark:text-black" 
                        name="phone" value="{{old('phone')}}" 
                        autocomplete="phone" />
                    </div> 
                    <div class="w-full mb-4 ">
                        <label for="social" class="">{{__('Social media')}}</label>
                        <input id="social" type="text" 
                        class="block mt-2 w-full border-gray-300 rounded-md
                        dark:text-black" 
                        name="social" value="{{old('social')}}" 
                        autocomplete="social" />
                    </div> 
                    <div class="w-full mb-4 ">
                        <label for="firm" class="">{{__('Firma')}}</label>
                        <input id="firm" type="text" 
                        class="block mt-2 w-full border-gray-300 rounded-md
                        dark:text-black" 
                        name="firm" value="{{old('firm')}}" 
                        autocomplete="firm" />
                    </div> 

                    <div class="mb-4">
                        <label for="note" class="">{{__('Notatki o kliencie')}}</label>
                        <textarea id="note" class="block mt-1 rounded-md w-full border-gray-300" rows="13"
                        name="note">{{old('note')}}</textarea>
                    </div>
                    
                    <!--Submit button-->
                    <button
                    type="submit"
                    class="block w-full rounded-md bg-gray-600 py-4 font-medium text-white">
                    Dodaj klienta
                    </button>
                </form>
                </div>
            </div>

            <div class="md:basis-1/3 bg-gray-100 rounded-xl p-4 dark:bg-gray-800 ">
                
            </div>
        </div>


    </div>
   
</x-app-layout>