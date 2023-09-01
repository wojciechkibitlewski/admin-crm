<div class="bg-white rounded-xl p-4 dark:bg-gray-800 mb-4 ">
    <p class="text-xs text-gray-400 uppercase">{{__('dashboard.this_month')}}:</p>
    <h3 class="font-medium text-lg ">{{__('dashboard.sales')}}</h3>
    @foreach ($sales as $item)
        <div class="flex flex-row justify-between my-4 border-b border-gray-300">
            <div>{{$item->type}}</div>
            <div>{{$item->count}}</div>
        </div>
    @endforeach
    
</div>