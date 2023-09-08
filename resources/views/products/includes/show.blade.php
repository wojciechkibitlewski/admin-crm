<div class="md:flex md:flex-row ">
    <div class="md:basis-1/3 p-4 md:border-r md:border-gray-200">

        <div class="mt-4 ">
            <p class="text-gray-400 uppercase text-xs">{{__('products.form_name')}}</p>
            <p class="block text-xl font-medium">{{$product->name}}</p>
            
        </div>
        <div class="mt-4 ">
            <p class="text-gray-400 uppercase text-xs">{{__('products.form_sku')}}</p>
            <p class="block text-xl font-medium">{{$product->sku}}</p>
            
        </div>
        <div class="mt-4">
            <p class="text-gray-400 uppercase text-xs">{{__('products.form_category')}}</p>
            <p class="block text-xl font-medium">{{ Helper::getCategoryName($product->category_id) }}</p>
        </div>
        <div class="mt-4">
            <p class="text-gray-400 uppercase text-xs">{{__('products.form_price')}}</p>
            <p class="block text-xl font-medium">{{$product->price}} zł</p>
            </p>
        </div>
        <div class="mt-4">
            <p class="text-gray-400 uppercase text-xs" >{{__('products.form_desc')}}</p>
            
                <p class="block font-normal mt-4">
                    @php 
                    print_r(nl2br($product->desc));
                    @endphp
            </p>
        </div>
        <div class="mt-4">
            <p class="text-gray-400 uppercase text-xs">{{__('products.created_at')}}</p>
                <p class="block text-xl font-medium">{{ date("Y-m-d", strtotime($product->created_at))  }}
            </p>
        </div>
        <div class="mt-4">
            <p class="text-gray-400 uppercase text-xs">{{__('products.updated_at')}}</p>
                <p class="block text-xl font-medium">{{ date("Y-m-d", strtotime($product->updated_at))  }}
            </p>
        </div>
        <!-- edit   -->
        <div class="mt-4 w-full border-y border-gray-200 dark:border-gray-600 py-4 ">
            <a  href="{{route('products.edit',$product->id)}}" title="{{__('products.form_edit')}}"
            class="block w-full text-sm bg-gray-600 text-white rounded px-4 py-2 text-center"> 
            {{__('products.form_edit')}}
            </a>  
            
        </div>
        <!-- delete  -->
        <div class="md:border-b border-gray-200 dark:border-gray-600 py-4 ">
            <button 
            type="button" 
            class="w-full text-sm bg-red-600 text-white rounded px-4 py-2 mb-4"
            data-te-toggle="modal"
            data-te-target="#deleteProductModal"
            > {{__('products.form_delete')}}  </button>  
        </div>
    </div>
    <div class="md:basis-1/3 p-4 border-t border-gray-200 md:border-t-0 ">
    <!-- łączna suma sprzedaży  -->
        <div class="mt-4 ">
            <p class="text-gray-400 uppercase text-xs">{{__('products.leads-value')}}</p>
            <p class="block text-xl font-medium">{{$productLeadsValue}} zł</p>
        </div>
        <div class="mt-4 ">
            <p class="text-gray-400 uppercase text-xs">{{__('products.lead-count')}}</p>
            <p class="block text-xl font-medium">{{$productLeadsCount}}</p>
        </div>
        
    </div>
    <div class="md:basis-1/3 ">
    </div>
</div>
@include('products.modals.modal-delete-product')
