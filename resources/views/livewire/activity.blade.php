<div>
    @foreach ($records as $item)
    <div class="flex flex-row py-2 border-b border-gray-100">
        <div class="mr-1 h-5 w-5">
            <img class="inline-block h-5 w-5 rounded-full ring-1 ring-white" 
            src="{{ Helper::userPhoto($item->user_id) }}" 
            alt="{{ Helper::userName($item->user_id) }}"
            loading="lazy"/>
        </div>
        <div class="w-[80%]">
            <p class="text-xs italic bg-gray-100 dark:bg-gray-800 p-1 rounded">{{$item->created_at}}</p>
            <p class="text-xs">{{ Helper::userName($item->user_id) }} <b>{{$item->action}}</b>  {{$item->what}}</p>         
<!--             
            
             -->

        </div>

    </div>
    @endforeach
</div>
