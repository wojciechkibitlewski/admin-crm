<x-modal wire:model="showIdeaAllModal">
    <div class="p-6">
        <div class="flex flex-row items-center">
            <h4 class="mb-4 text-xl text-left">{{__('todo.idea')}}</h4>

            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" 
            class="w-8 h-8 ml-4">
            <path stroke-linecap="round" stroke-linejoin="round" d="M15.042 21.672L13.684 16.6m0 0l-2.51 2.225.569-9.47 5.227 7.917-3.286-.672zM12 2.25V4.5m5.834.166l-1.591 1.591M20.25 10.5H18M7.757 14.743l-1.59 1.59M6 10.5H3.75m4.007-4.243l-1.59-1.59" />
            </svg>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" 
            class="w-8 h-8  ml-4">
            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 3.75v4.5m0-4.5h4.5m-4.5 0L9 9M3.75 20.25v-4.5m0 4.5h4.5m-4.5 0L9 15M20.25 3.75h-4.5m4.5 0v4.5m0-4.5L15 9m5.25 11.25h-4.5m4.5 0v-4.5m0 4.5L15 15" />
            </svg>
        </div>
        <div class="w-full pr-10" id="ideaAll">
            @foreach($ideaListAll as $item)
                <div wire:key="{{$item->id}}_m" drag-item="{{$item->id}}" id="{{$item->id}}_m" 
                class="w-full flex flex-row p-2 border-b border-gray-200 cursor-pointer">
                    <div class="w-32">{{$item->date}} </div>
                    <div class="w-full"> {{$item->name}}</div>
                </div>
            @endforeach
        </div>
    </div>
</x-modal>