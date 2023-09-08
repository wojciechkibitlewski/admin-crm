<p class="uppercase text-xs text-gray-400">{{__('leads.date')}}</p>
<div class="flex flex-row w-full justify-between items-center">
    <p class="text-lg md:text-2xl">{{$lead->executionDate}}, godz: {{ date("H:i", strtotime($lead->executionTime)) }}</p>
</div>