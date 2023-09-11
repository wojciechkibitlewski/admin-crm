<x-modal wire:model="showLeadModal">
    <div class="p-6">
        @if($leadsToModal)
        <div class="p-4 border-b border-gray-200 dark:border-gray-600">
            <h3 class="font-medium text-2xl">{{$leadsToModal->title}}</h3>
            
        </div>
        @endif
    </div>
</x-modal>