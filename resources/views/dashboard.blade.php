<x-app-layout>
    <div class="p-4 sm:p-7">
        
        <x-a-header>
            <div></div>
            <x-a-title-header title="{{__('dashboard.dashboard')}}" />
        </x-a-header>        

        @if ($message = Session::get('success'))
            <div class="bg-green-200 rounded-xl p-4 dark:bg-sky-800 mb-4">
                <p>{{ $message }}</p>
            </div>
        @endif
        @if ($errors->any())
            <div class="bg-lime-200 rounded-xl p-4 dark:bg-red-800 mb-4">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="xl:grid xl:grid-cols-3 xl:gap-4 mt-4">
            @include('dashboard.box-orders')
            @include('dashboard.box-clients')
            @include('dashboard.box-calendar_desktop')
            @include('dashboard.box-calendar_mobile')

            
            
            
            
        </div>

        
    </div>
   
</x-app-layout>
