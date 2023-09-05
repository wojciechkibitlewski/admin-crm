<div class="xl:hidden bg-white rounded-xl p-4 dark:bg-gray-800 col-span-3 mb-4 ">
    <p class="text-xs text-gray-400 uppercase">{{__('dashboard.this_month')}}:</p>
    <h3 class="font-medium text-lg ">{{__('dashboard.calendar')}}</h3>
    {{--    
    <div class="flex flex-row justify-between my-2">
        <button type="button" class="p-2 border border-gray-300 rounded-lg">Dzisiaj</button>
        
        <div class="flex flex-row justify-end">
            <button type="button" class="p-2 border border-r-0 border-gray-300 rounded-l-lg">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
                </svg>
            </button>
            <button type="button" class="p-2 border border-l-0 border-gray-300 rounded-r-lg">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                </svg>
            </button>
        </div>  
    </div> --}}

    <div class="grid grid-cols-7 gap-0 mt-4 rounded-xl border border-gray-200" id="leadsCalendar">
        @foreach ($days as $day)
            <div class="p-1 text-center text-gray-800 dark:text-gray-100">
            {{__('calendar-mobile.'.$day.'')}} 
            </div>
        @endforeach
        
        @for ($i = $first_day_of_week; $i > 0; $i--)
            <div class="text-center bg-gray-200  text-gray-400 p-1 min-h-[40px] border-r border-t border-gray-200 dark:bg-gray-500 dark:text-gray-400"> 
                <div class="w-full ">{{ $num_days_last_month-$i+1 }}</div>
            </div>
        @endfor

        @for ($i = 1; $i <= $num_days; $i++)
            <div class="min-h-[40px] p-1 border-r border-t  border-gray-200 text-center bg-white text-gray-500 {{ $i == $currentDay ? 'bg-yellow-200' : '' }} dark:bg-gray-800 dark:text-gray-100">
                <div class="w-full">{{ $i }}</div>
                @foreach ($leads as $lead)
                    @if (date('y-m-d', strtotime($currentYear . '-' . $currentMonth . '-' . $i . '')) == date('y-m-d', strtotime($lead->executionDate)))
                        <button class="rounded-full border border-gray-400 p-1 mb-1 bg-gray-800 dark:bg-gray-200 dark:text-gray-800" 
                            type="button"
                            onclick="Livewire.emit('openModal', 'calendar.show-event', {{ json_encode(['lead_id' => $lead->id]) }})"
                            >
                            <svg xmlns="http://www.w3.org/2000/svg" 
                            fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6"                            
                            >
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6.827 6.175A2.31 2.31 0 015.186 7.23c-.38.054-.757.112-1.134.175C2.999 7.58 2.25 8.507 2.25 9.574V18a2.25 2.25 0 002.25 2.25h15A2.25 2.25 0 0021.75 18V9.574c0-1.067-.75-1.994-1.802-2.169a47.865 47.865 0 00-1.134-.175 2.31 2.31 0 01-1.64-1.055l-.822-1.316a2.192 2.192 0 00-1.736-1.039 48.774 48.774 0 00-5.232 0 2.192 2.192 0 00-1.736 1.039l-.821 1.316z" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 12.75a4.5 4.5 0 11-9 0 4.5 4.5 0 019 0zM18.75 10.5h.008v.008h-.008V10.5z" />
                              </svg>
                        </button>
                    @endif
                @endforeach
            </div>
        @endfor

        @for ($i = 1; $i <= (42-$num_days-max($first_day_of_week, 0)); $i++)
            <div class="text-center bg-gray-200  text-gray-400 p-1 min-h-[40px] border-r border-t border-gray-200 dark:bg-gray-500 dark:text-gray-400">
                {{$i}}
            </div>
        @endfor

        @foreach ($days as $day)
            <div class="p-1 text-center text-gray-800">
            {{__('calendar-mobile.'.$day.'')}} 
            </div>
        @endforeach

        
    </div>

</div>
