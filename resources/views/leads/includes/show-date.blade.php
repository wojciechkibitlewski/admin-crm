<p class="uppercase text-xs text-gray-400">{{__('leads.date')}}</p>
<div class="flex flex-row w-full justify-between items-center">
    <p class="text-lg md:text-2xl">{{$lead->executionDate}}, godz: {{ date("H:i", strtotime($lead->executionTime)) }}</p>
    <span>
        <button 
        type="button" 
        class="text-sm bg-gray-600 text-gray-100 rounded px-4 py-2 "
        data-te-toggle="modal"
        data-te-target="#addDateModal"
        > 
        {{__('leads.update')}}
        </button> 
    </span>
</div>