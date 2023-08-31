<x-app-layout>
    <div class="p-4 sm:p-7">
        <x-a-header>
            <x-a-link-add href="{{route('products.index')}}" title="{{__('Lista produktów')}}">
                {{__('Lista produktów')}}    
            </x-a-link-add>
            <x-a-title-header title="{{__('Produkty/usługi. Nowy produkt')}}" />
        </x-a-header>
    
    

        @if ($message = Session::get('success'))
            <div class="bg-sky-100 rounded-xl p-4 dark:bg-sky-800 mb-4">
                <p>{{ $message }}</p>
            </div>
        @endif

        <div class="md:flex md:flex-row gap-4 mt-4">
            
            <div class="md:basis-2/3 bg-white rounded-xl p-4 dark:bg-gray-800 mb-6">
                <h2 class="font-medium text-lg mb-6">Dodawanie nowego produktu</h2>
                
                <div>
                <form action="{{ route('products.store') }}" method="POST" >
                    @csrf
                    <!--Category -->
                    <div class="w-full mb-4 ">
                        <label for="sku" class="">{{__('SKU*')}}</label>
                        <input id="sku" type="text" 
                        class="block mt-2 w-full border-gray-300 rounded-md
                        dark:text-black" 
                        name="sku" value="{{old('sku')}}" 
                        required autofocus autocomplete="sku" />
                    </div>  
                    <div class="w-full mb-4 ">
                        <label for="name" class="">{{__('Nazwa usługi/produktu*')}}</label>
                        <input id="name" type="text" 
                        class="block mt-2 w-full border-gray-300 rounded-md
                        dark:text-black" 
                        name="name" value="{{old('name')}}" 
                        required autocomplete="name" />
                    </div>  
                    <div class="relative mb-6">
                        <label for="category_id" class="block mb-2 ">{{__('Kategoria*')}}</label>
                        <select
                        class="block mt-2  w-full"
                        id="category_id" name="category_id" value="old('category_id')"
                        data-te-select-init
                        data-te-select-placeholder="Wybierz kategorię"
                        >   
                            @foreach ($productcategory as $item)
                            <option value="{{$item['id']}}">{{$item['category']}}</option> 
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-4">
                        <label for="desc" class="">{{__('Opis')}}</label>
                        <textarea id="desc" class="block mt-1 rounded-md w-full border-gray-300" rows="13"
                        name="desc"> </textarea>
                    </div>
                    <div class="w-full mb-4 ">
                        <label for="price" class="">{{__('Cena*')}}</label>
                        <input id="price" type="text" 
                        class="block mt-2 border-gray-300 rounded-md w-[50%]
                        dark:text-black" 
                        name="price" value="{{old('price')}}" 
                        required autocomplete="price" />
                    </div>

                    <!--Submit button-->
                    <button
                    type="submit"
                    class="block w-full rounded-md bg-gray-600 py-4 font-medium text-white">
                    Dodaj produkt
                    </button>
                </form>
                </div>
            </div>

            <div class="md:basis-1/3 bg-white rounded-xl p-4 dark:bg-gray-800 ">
                
            </div>
        </div>


    </div>
   
</x-app-layout>