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
            <x-a-title-header title="{{__('leads.leads')}}" />
        </div>
    </x-a-header>    

    <div class="relative mx-2 pb-10">

        @include('includes.message')
        @include('leads.includes.data-table')
            
            <div class="relative z-[11] sticky bottom-[50px] ml-[70%] md:ml-[80%] lg:ml-[86%] xl:ml-[92%] w-20 h-20 p-2 rounded-full bg-amber-500 text-center text-white font-black">
                <a href="{{route('leads.create')}}" title="{{__('leads.add_lead')}}" class="">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-18 h-18">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                </svg>
                </a>
            </div>
            
    </div>
    @include('leads.modals.modalSearchLead')
    
</x-app-layout>
