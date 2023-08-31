<div>
    <div class="relative mb-[100px] p-4">
        <div class="flex flex-row">
            <div class="w-[60%] mr-4">
                <label for="type_id" class="block mb-2 w-full">{{__('Wybierz usługę/produkt*')}}</label>
                <select class="block mt-1 w-full border-gray-300 rounded-md" wire:model="selectedProductID">
                    <option value="0">Wybierz usługę/produkt</option>
                    @foreach ( $records as $item)
                        <option value="{{ $item['id'] }}">{{ $item['name'] }}</option>
                    @endforeach
                </select>
            </div>
            <div class="w-[20%] mr-4">
                <label class="block mb-2 w-full" for="quant">{{__('Ilość*')}}</label>
                <input id="quant" type="text" 
                class="block mt-1 w-full border-gray-300 rounded-md  mr-4 dark:text-black" 
                name="name" wire:model="quant"
                required />
            </div>
            <div class="w-[20%]">
                <label class="block mb-2 w-full" for="buttonAdd">{{__('Akcja')}}</label>
                <button id="buttonAdd" type="button" wire:click="addProductList"
                class="block sm:inline text-sm md:text-base p-1 py-2 px-3 bg-sky-200  rounded-md">
                    Dodaj
                </button>
            </div>
        </div>
    </div>
    <div id="nextProdukt">
        @if($selectedProducts)
           @foreach ($selectedProducts as $index => $product)
            <div class=" flex flex-row mb-4" key="{{ $index }}">
                <div class="w-[60%] mr-4">
                    <label  for="product_name_{{ $index }}">{{__('Produkt')}}</label>
                    <input id="product_id_{{ $index }}" type="hidden" name="product_id[]"
                    value="{{ $product['product_id'] }}"/>
                    <input id="product_price_{{ $index }}" type="hidden" name="product_price[]"
                    value="{{ $product['product_price'] }}"/>
                    <input id="product_quant_{{ $index }}" type="hidden" name="product_quant[]"
                    value="{{ $product['quant'] }}"/>
                    <input id="product_name_{{ $index }}" type="text" 
                    class="block mt-1 w-full border-gray-300 rounded-md  mr-4 dark:text-black" 
                    readonly name="product_name[]"
                    value="{{ $product['name'] }}"/>
                </div>
                <div class="w-[20%] mr-4">
                    <label for="product_price_{{ $index }}">{{__('Wartość')}}</label>
                    <input id="product_price_{{ $index }}" 
                    class="block mt-1 w-full border-gray-300 rounded-md  mr-4 dark:text-black" 
                    type="text" readonly name="product_value[]"
                    value="{{ $product['productValue'] }}"/>
                </div>
                <div class="w-[20%]">
                    <label for="buttonDelete_{{ $index }}">{{__('Akcja')}}</label>
                    <button id="buttonDelete_{{ $index }}" type="button" 
                    class="block  w-full sm:inline text-sm md:text-base mt-1 p-1 py-2 px-3 bg-red-200 rounded-md" 
                    wire:click="removeProduct({{ $index }})">Usuń</button>
                </div>
            </div>
            @endforeach
        @else
        <div class="mb-4">
            <div>
                <p>Wybierz usługi/produkty do zamówienia</p>
            </div>
        </div>
        @endif
    </div>

    <!--Value -->
    <div class="mb-4">
        <label for="leadValue">{{__('Wartość zamówienia*')}}</label>
        <input id="leadValue" 
        class="block mt-1 w-[50%] border-gray-300 rounded-md  mr-4 dark:text-black" 
        type="text" name="leadValue"
        wire:model="leadValue" 
        />
    </div>
    
</div>