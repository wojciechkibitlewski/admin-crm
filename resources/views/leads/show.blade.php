<x-app-layout>
    <x-a-header style="z-index:1;">
        <x-a-header-button-search 
        data-te-toggle="modal"
        data-te-target="#modalSearchLead"
        data-te-ripple-init
        data-te-ripple-color="light"
        >
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" 
            class="w-6 h-6 inline">
            <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
            </svg>
                <span class="hidden md:inline-block  md:ml-2">
                    {{__('leads.search_leads')}}
                </span>
        </x-a-header-button-search>
        <div class="flex items-center">
                         
            <a href="{{ route('leads.index') }}" title="Back" class="inline mr-2">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" 
                class="w-5 h-5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18" />
                </svg>
            </a>
            
            <x-a-title-header title="{{__('leads.leads')}}" />
        </div>
    </x-a-header> 
    <div class="p-4 ">
        @include('includes.message')
    </div>
    <div class="relative pb-10 ">
        <div class="p-4 border-b border-gray-200 dark:border-gray-600">
            <h3 class="font-medium text-2xl">{{$lead->title}}</h3>
        </div>
        
        <div class="md:flex md:flex-row border-b border-gray-200 dark:border-gray-600 w-full 2xl:w-[90%]">
            <div class="w-full md:basis-1/2 md:border-r md:border-gray-200 dark:border-gray-600">
                <!-- date and time  -->
                <div class="w-full border-b border-gray-200 dark:border-gray-600 p-4">
                    @include('leads.includes.show-date')
                </div>
                <!-- state  -->
                <div class="w-full border-b border-gray-200 dark:border-gray-600 p-4">
                    @include('leads.includes.show-state')
                </div>
                <!-- source  -->
                <div class="w-full border-b border-gray-200 dark:border-gray-600 p-4">
                    @include('leads.includes.show-source')
                </div> 
                <!-- client  -->
                <div class="w-full border-b border-gray-200 dark:border-gray-600 p-4">  
                    @include('leads.includes.show-client')
                </div> 
                <!-- date  -->
                <div class="w-full border-b border-gray-200 dark:border-gray-600 p-4">  
                    @include('leads.includes.show-created')
                </div> 
                <div class="w-full border-b border-gray-200 dark:border-gray-600 p-4">  
                    @include('leads.includes.show-updated')
                </div> 
            </div>
            <div class="md:basis-1/2 md:border-r md:border-gray-200 dark:border-gray-600">
                <!-- lead value  -->
                <div class="w-full border-b border-gray-200 dark:border-gray-600 p-4">
                    @include('leads.includes.show-leadvalue')
                </div> 
                <!-- products  -->
                <div class="w-full border-b border-gray-200 dark:border-gray-600 p-4">
                    @include('leads.includes.show-products')
                </div>
                <!-- note  -->
                <div class="w-full border-b border-gray-200 dark:border-gray-600 p-4">
                    @include('leads.includes.show-note')
                </div>
                <!-- delete leads  -->
                <div class="w-full border-b border-gray-200 dark:border-gray-600 p-4 text-right">
                    <div class="flex flex-row w-full justify-between items-center	">
                        <p class="text-2xl"></p>
                        <span>
                            <button 
                            type="button" 
                            class="text-sm bg-red-600 text-white rounded px-4 py-2"
                            data-te-toggle="modal"
                            data-te-target="#deleteLeadsModal"
                            > {{__('leads.delete_lead')}}  </button>  
                        </span>
                    </div> 
                
                </div>
            </div>
        </div>

    </div>
    
</x-app-layout>
@include('leads.modals.modal-date')
@include('leads.modals.modal-state')
@include('leads.modals.modal-advance')
@include('leads.modals.modal-product')
@include('leads.modals.modal-remove-product')
@include('leads.modals.modal-note')
@include('leads.modals.modal-delete-leads')

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