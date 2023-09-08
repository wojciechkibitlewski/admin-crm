<x-app-layout>
    <x-a-header style="z-index:1;">
        <div></div>
        <div class="flex items-center">
            <x-a-title-header title="{{__('todo.todo')}}" />
        </div>
    </x-a-header>    

    <div class="relative">        
        <div class="overflow-x-auto">
            @livewire('todo.todo-table')
        </div>
        
        
    </div>
    
</x-app-layout>