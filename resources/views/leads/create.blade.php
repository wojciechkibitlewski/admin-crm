<x-app-layout>
    <x-a-header style="z-index:1;">
        <div></div>
    
        <div class="flex items-center">
                         
            <a href="{{ route('leads.index') }}" title="{{__('leads.leads')}}" class="inline mr-2">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" 
                class="w-5 h-5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18" />
                </svg>
            </a>
            
            <x-a-title-header title="{{__('leads.leads')}}" />
        </div>
    </x-a-header>    

    <div class="relative pb-10">
        <div class="p-4 border-b border-gray-200">
            <h3 class="font-bold">{{__('leads.create_lead_h')}}</h3>
            <p class="block md:hidden text-xs">{{__('leads.create_lead_p_mobile')}}</p>
            <p class="hidden md:block text-xs">{{__('leads.create_lead_p_desk')}}</p>
        </div>
        
        @include('includes.message')
        @include('leads.includes.create-form')
        
    </div>
    
</x-app-layout>
