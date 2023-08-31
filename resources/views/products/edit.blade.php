<x-app-layout>
    <div class="p-4 sm:p-7">
        <x-a-header>
            <x-a-link-add href="{{route('products.show',$product->id )}}" title="{{__('Podgląd produktu')}}">
                {{__('Podgląd produktu')}}    
            </x-a-link-add>
            <x-a-title-header title="{{__('Produkty/usługi. Edycja produktu')}}" />
        </x-a-header>
    
    

        @if ($message = Session::get('success'))
            <div class="bg-sky-100 rounded-xl p-4 dark:bg-sky-800 mb-4">
                <p>{{ $message }}</p>
            </div>
        @endif

        <div class="md:flex md:flex-row gap-4 mt-4">
            
            <div class="md:basis-2/3 bg-gray-100 rounded-xl p-4 bg-white dark:bg-gray-800 mb-6">
                <div>
                <form action="{{ route('products.update') }}" method="POST" >
                @csrf
                    <input type="hidden" name="id" value="{{ $product->id }}" />
                    <input type="hidden" name="_method" value="PATCH">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    <div class="w-full mb-4 ">
                        <label for="sku">{{__('SKU*')}}</label>
                        <x-a-input id="sku" name="sku" value="{{ $product->sku }}" required autofocus/>
                        <x-a-input-error for="sku" />
                    
                    <div class="w-full mb-4 ">
                        <label for="name">{{__('Nazwa usługi/produktu*')}}</label>
                        <x-a-input id="name" name="name" value="{{ $product->name }}" required />
                        <x-a-input-error for="name" />
                    </div> 

                    <div class="relative mb-6">
                        <label for="category_id" class="block mb-2 ">{{__('Kategoria*')}}</label>
                        <select
                        class="block mt-2  w-full  border-gray-300 rounded-md"
                        id="category_id" name="category_id" value="old('category_id')"
                        >   
                            @foreach ($productcategory as $item)
                            <option value="{{$item['id']}}" {{ $product->category_id == $item['id'] ? 'selected' : '' }} >{{$item['category']}}</option> 
                            @endforeach
                        </select>
                        <x-a-input-error for="category_id" />

                    </div>
                    <div class="mb-4">
                        <label for="desc">{{__('Opis')}}</label>
                        <textarea id="desc" class="block mt-1 rounded-md w-full border-gray-300" rows="13"
                        name="desc">{{$product->desc}}</textarea>
                        <x-a-input-error for="desc" />
                    </div>
                    <div class="w-full mb-4 ">
                        <label for="price">{{__('Cena*')}}</label>
                        <x-a-input id="price" name="price" value="{{ $product->price }}" class="md:w-[50%]" required />
                        <x-a-input-error for="price" />
                    </div>

                    <!--Submit button-->
                    <button
                    type="submit"
                    class="block w-full rounded-md bg-gray-600 py-4 font-medium text-white">
                    Edytuj produkt
                    </button>
                </form>
                </div>
            </div>

            <div class="md:basis-1/3 bg-white rounded-xl p-4 dark:bg-gray-800 ">
                
            </div>
        </div>


    </div>
   
</x-app-layout>