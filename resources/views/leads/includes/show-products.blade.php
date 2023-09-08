<table class="w-full my-4 text-left bg-gray-200 rounded-xl" id="productsTable">
    <thead class="" >
        <tr class="">
            <th class="p-2 font-thin" scope="col">{{__('leads.product')}}</th>
            <th class="p-2 font-thin" scope="col">{{__('leads.quant')}}</th>
            <th class="p-2 font-thin" scope="col">{{__('leads.price')}}</th>
            <th class="p-2 font-thin" scope="col">{{__('leads.table_action')}}</th>
        </tr>
    </thead>
    <tbody>
        @foreach($leadProduct as $item)
            <tr class="border-b border-gray-200 bg-white">
                <td class="p-2 ">
                    {{ Helper::getProductName($item->product_id) }}
                </td>
                <td class="p-2 ">
                    {{$item->quant}}
                </td>
                <td class="p-2 ">
                    {{$item->product_price}}
                </td>
                <td class="py-2 lg:p-2 ">
                    <button 
                    type="button"
                    class="text-blue-600 px-2"
                    id="deleteRowButton_{{ $item->id }}"
                    data-element="{{ $item->id }}"
                    data-te-toggle="modal"
                    data-te-target="#deleteRowModal"
                    data-te-ripple-init
                    data-te-ripple-color="light"
                    > 
                    {{__('leads.delete')}} 
                    </button> 
                    
                </td>
            </tr>
        @endforeach
            <tr class="">
                <td class="p-2" colspan="4">
                    <button 
                    type="button"
                    class="text-blue-600 px-2"
                    data-te-toggle="modal"
                    data-te-target="#addProductModal"> 
                        {{__('leads.add_product_tab')}}
                    </button> 
                </td>
            </tr>
    </tbody>
</table>