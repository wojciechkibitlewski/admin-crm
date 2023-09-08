<div class="flex flex-row justify-between items-center	">
    <p class="uppercase text-xs text-gray-400">{{__('leads.note')}}</p>
    <span>
        <button 
        type="button" 
        class="text-sm bg-gray-600 text-gray-100 rounded px-4 py-2"
        data-te-toggle="modal"
        data-te-target="#addNoteModal"
        > {{__('leads.update')}} </button>                            
    </span>
</div>
<div class="mb-4">
    <p class="text-normal">
        @php 
        print_r(nl2br($lead->note));
        @endphp
    </p>
</div>