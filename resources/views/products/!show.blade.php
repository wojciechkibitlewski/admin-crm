<x-app-layout>
    <div class="p-4 sm:p-7">
        <x-a-header>
            <x-a-link-add href="{{route('products.edit',$product->id )}}" title="{{__('Edytuj produkt')}}">
                {{__('Edytuj produkt')}}    
            </x-a-link-add>
            <x-a-title-header title="{{__('Produkty/usługi. Szczegóły produktu')}}" />
        </x-a-header>
    
        @if ($message = Session::get('success'))
            <div class="bg-sky-100 rounded-xl p-4 dark:bg-sky-800 mb-4">
                <p>{{ $message }}</p>
            </div>
        @endif

        <div class="md:flex md:flex-row gap-4 mt-4">
            
            <div class="md:basis-2/3 bg-white rounded-xl p-4 dark:bg-gray-800 mb-6">
                <div class="mt-4">
                    <p>Nazwa</p>
                        <p class="block text-xl font-medium">{{$product->name}}
                    </p>
                </div>
                
                <div class="mt-4">
                    <p>SKU</p>
                        <p class="block text-xl font-medium">{{$product->sku}}
                    </p>
                </div>
                <div class="mt-4">
                    <p>Kategoria</p>
                        <p class="block text-xl font-medium">
                            {{ Helper::getCategoryName($product->category_id) }}
                    </p>
                </div>
                <div class="mt-4">
                    <p>Cena</p>
                        <p class="block text-xl font-medium">{{$product->price}} zł
                    </p>
                </div>
                <div class="mt-4">
                    <p>Opis</p>
                    
                        <p class="block font-normal">
                            @php 
                            print_r(nl2br($product->desc));
                            @endphp
                    </p>
                </div>
            </div>

            <div class="md:basis-1/3 bg-gray-100 rounded-xl p-4 dark:bg-gray-800 ">
                
            </div>
        </div>


    </div>
   
</x-app-layout>