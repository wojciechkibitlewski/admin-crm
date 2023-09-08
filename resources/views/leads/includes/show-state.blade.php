<p class="uppercase text-xs text-gray-400">{{__('leads.table_state')}}</p>
<div class="flex flex-row w-full justify-between items-center	">
    <p class="text-2xl">{{ Helper::getStateName($lead->type_id) }}</p>
    <span>
        <button 
        type="button" 
        class="text-sm bg-gray-600 text-gray-100 rounded px-4 py-2"
        data-te-toggle="modal"
        data-te-target="#addStateModal"
        > {{__('leads.update')}} </button>  
    </span>
</div> 