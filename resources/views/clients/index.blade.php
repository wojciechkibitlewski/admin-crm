<x-app-layout>
    <div class="p-4 sm:p-7">
        
        <x-a-header>
            <x-a-link-add href="{{route('clients.create')}}" title="{{__('Dodaj nowego klienta')}}">
                {{__('Dodaj nowego klienta')}}    
            </x-a-link-add>
            <x-a-title-header title="{{__('Klienci. Wszyscy')}}" />
        </x-a-header>        

        @if ($message = Session::get('success'))
            <div class="bg-sky-100 rounded-xl p-4 dark:bg-sky-800 mb-4">
                <p>{{ $message }}</p>
            </div>
        @endif

        <div class="bg-white rounded-xl p-4 dark:bg-gray-800 ">
            <div class="w-full overflow-x-auto font-light" id="clientTable">
            @livewire('client-table')
            </div>
        

            
        </div>
    </div>
   
</x-app-layout>