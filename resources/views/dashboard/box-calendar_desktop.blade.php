<div class="hidden xl:inline bg-white rounded-xl p-4 dark:bg-gray-800 col-span-3 mb-4 ">
    <p class="text-xs text-gray-400 uppercase">{{__('dashboard.this_month')}}:</p>
    <h3 class="font-medium text-lg ">{{__('dashboard.calendar')}}</h3>
    
    <div class="grid grid-cols-7 gap-0 mt-4">
        @foreach ($days as $day)
            <div class="p-2 border border-gray-200 text-center bg-gray-800 text-gray-100">
            {{__('dashboard.'.$day.'')}} 
            </div>
        @endforeach
        @for ($i = $first_day_of_week; $i > 0; $i--)
            <div class="border border-gray-100 text-center bg-gray-200 text-gray-400"> 
                <div class="w-full mb-2">{{ $num_days_last_month-$i+1 }}</div>
                 
            </div>
        @endfor
        @for ($i = 1; $i <= $num_days; $i++)
            <div class="min-h-[100px] p-2 border border-gray-200 text-center bg-white text-gray-500 {{ $i == $currentDay ? 'bg-yellow-200' : '' }}">
                <div class="w-full mb-2">{{ $i }}</div>
                @foreach ($leads as $lead)
                    @if (date('y-m-d', strtotime($currentYear . '-' . $currentMonth . '-' . $i . '')) == date('y-m-d', strtotime($lead->executionDate)))
                        <div class="bg-gray-200 p-2 mb-2 rounded">
                            <p class="block font-medium">{{$lead->title}}</p>
                            <p class="block">{{__('dashboard.time')}} {{ date('H:i', strtotime($lead->executionTime)) }}</p>
                            <a href="{{route('leads.show',$lead->id)}}" title="" class="block bg-gray-600 text-white p-1 px-2 mt-2 rounded">{{__('dashboard.seemore')}}</a>
                        </div>
                    @endif
                @endforeach

            </div>
        @endfor
        @for ($i = 1; $i <= (42-$num_days-max($first_day_of_week, 0)); $i++)
            <div class="border border-gray-100 text-center bg-gray-200 text-gray-400">{{$i}}</div>
        @endfor
        @foreach ($days as $day)
            <div class="p-2 border border-gray-200 text-center bg-gray-800 text-gray-100">{{__('dashboard.'.$day.'')}} </div>
        @endforeach
    </div>
</div>