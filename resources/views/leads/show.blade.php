<x-app-layout>
    <div class="p-4 sm:p-7">
    
        <h1 class="font-bold text-lg ">{{$lead->title}}</h1>

        @if ($message = Session::get('success'))
            <div class="bg-sky-100 rounded-xl p-4 dark:bg-sky-800 mb-4">
                <p>{{ $message }}</p>
            </div>
        @endif

        @if ($errors->any())
            <div class="bg-red-100 rounded-xl p-4 dark:bg-red-800 mb-4">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        
        <div class="md:flex md:flex-row gap-4 mt-4">
            <div class="md:basis-1/2">
                <div class="w-full bg-white rounded-xl p-4 dark:bg-gray-800 ">
                    <p class="uppercase text-xs text-gray-400">{{__('Data sesji')}}</p>
                    <div class="flex flex-row justify-between items-center	">
                        <p class="text-2xl">{{$lead->executionDate}}, godz: {{$lead->executionTime}}</p>
                        
                        <span>
                            <button 
                            type="button" 
                            class="text-sm bg-gray-600 text-gray-100 rounded px-4 py-2"
                            data-te-toggle="modal"
                            data-te-target="#addDateModal"
                            > 
                            Update 
                            </button> 
                        </span>

                    </div>
                

                    <p class="uppercase text-xs text-gray-400 mt-6">{{__('Stan realizacji zamowienia')}}</p>
                    <div class="flex flex-row justify-between items-center	">
                        <p class="text-2xl">{{ Helper::getStateName($lead->type_id) }}</p>
                        <span>
                            <button 
                            type="button" 
                            class="text-sm bg-gray-600 text-gray-100 rounded px-4 py-2"
                            data-te-toggle="modal"
                            data-te-target="#addStateModal"
                            > Update </button>  
                        </span>
                    </div>

                    <p class="uppercase text-xs text-gray-400 mt-6">{{__('Źródło')}}</p>
                    <div class="flex flex-row justify-between items-center	">
                        <p class="text-xl text-medium">{{ Helper::getSourceName($lead->source_id) }}</p>
                        
                    </div>
                </div>
                
                <div class="w-full bg-white rounded-xl p-4 dark:bg-gray-800 mt-6 mb-6">
                    <p class="uppercase text-xs text-gray-400">{{__('Klient')}}</p>
                    <div class="flex flex-row justify-between items-center	">
                        <p class="text-2xl">{{$client->name}}</p>
                        <span>
                            <a href="{{ route('clients.show', $client->id) }}" class="text-sm bg-gray-600 text-gray-100 rounded px-4 py-2"> View </a>
                        </span>
                    </div>
                

                    <div class="mb-4">
                        <a href="mailto:{{$client->email}}" title="" class="text-blue-600 underline text-normal">{{$client->email}}</a><br/>
                        <a href="tel:{{ $client->phone }}" title="" class="text-blue-600 underline text-normal">{{ $client->phone }}</a><br/>
                        <a href="{{$client->social}}" target="_blank" title="" class="text-blue-600 underline text-normal">{{$client->social}}</a><br/>
                        <p class="font-bold text-normal">{{$client->firm}}</p>
                    </div> 
                    <hr class=" my-2 border-gray-200" />
                </div>

            </div>
            <div class="md:basis-1/2 ">
                <div class="w-full bg-white rounded-xl p-4 dark:bg-gray-800 ">
                    <!-- leadValue  -->
                    <div class="flex flex-row">
                        <div class="w-[40%] p-2">
                            <div class="mb-4">
                                <p class="uppercase text-xs text-gray-400">{{__('Wartość zamówienia')}}</p>
                            </div> 
                            <div class="mb-4">
                                <p class="text-2xl">{{$lead->leadValue}} zł</p>
                            </div> 
                        </div>
                        <div class="w-[60%]  p-2 {{$lead->leadValue > $lead->advanceValue ? 'bg-red-400 rounded-xl':''}}">
                            <div class="mb-4">
                                <p class="uppercase text-xs {{$lead->leadValue > $lead->advanceValue ? 'text-white ':'text-gray-400 '}}">{{__('Zaliczka')}}</p>
                            </div> 
                            <div class="mb-4 flex flex-row justify-between">
                                <p class="text-2xl">{{$lead->advanceValue}} zł</p>
                                <span>
                                    <button 
                                    class="text-sm bg-gray-600 text-gray-100 rounded px-4 py-2"
                                    data-te-toggle="modal"
                                    data-te-target="#addAdvanceModal"
                                    > Dodaj wpłatę </button>  
                                </span>
                            </div> 
                        </div>
                    </div>
                </div>
                <div class="w-full bg-white rounded-xl p-4 dark:bg-gray-800 mt-6">
                    <table class="w-full my-4 text-left" id="productsTable">
                        <thead>
                            <tr class="border-b border-gray-200">
                                <th class="p-2 font-thin">Produkt</th>
                                <th class="p-2 font-thin">Ilość</th>
                                <th class="p-2 font-thin">Cena</th>
                                <th class="p-2 font-thin">Akcja</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($leadProduct as $item)
                                <tr class="border-b border-gray-200">
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
                                        Remove 
                                        </button> 
                                        
                                    </td>
                                </tr>
                            @endforeach
                                <tr>
                                    <td class="p-2" row="4">
                                        <button 
                                        type="button"
                                        class="text-blue-600 py-2"
                                        data-te-toggle="modal"
                                        data-te-target="#addProductModal"> 
                                            Add new product
                                        </button> 
                                    </td>
                                </tr>
                        </tbody>
                    </table> 
                </div> 

                <div class="w-full bg-white rounded-xl p-4 dark:bg-gray-800 mt-6">
                    
                    <div class="flex flex-row justify-between items-center	">
                        <p class="uppercase text-xs text-gray-400">{{__('Notatki do zamówienia')}}</p>
                        <span>
                            <button 
                            type="button" 
                            class="text-sm bg-gray-600 text-gray-100 rounded px-4 py-2"
                            data-te-toggle="modal"
                            data-te-target="#addNoteModal"
                            > Update </button>                            
                        </span>
                    </div>
                    <div class="mb-4">
                        <p class="text-normal">
                            @php 
                            print_r(nl2br($lead->note));
                            @endphp
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
@include('leads.modal-date')
@include('leads.modal-state')
@include('leads.modal-advance')
@include('leads.modal-product')
@include('leads.modal-remove-product')

@include('leads.modal-note')

<script>
    /// delete row
    const leadsTable = document.getElementById("productsTable");
    let deleteRowButton = leadsTable.getElementsByTagName("button");
    const inputID = document.getElementById("deleteRowModalId");

    const buttonPressed = e => {
    //console.log(e.target.getAttribute('data-element'));
        inputID.setAttribute("value", e.target.getAttribute('data-element'));
    }

    for (let button of deleteRowButton) {
    button.addEventListener("click", buttonPressed);
    }
</script>