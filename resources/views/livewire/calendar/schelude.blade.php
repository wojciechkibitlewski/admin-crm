<div>
    <x-a-header style="z-index:1;">
        <div>
            <select 
            wire:model.live="currentMonth" 
            id="current_month" name="current_month" 
            class="border-gray-300 rounded-md dark:bg-gray-300 dark:text-black p-1 px-6" 
            >
                <option value="01">{{__('calendar.January')}}</option>
                <option value="02">{{__('calendar.February')}}</option>
                <option value="03">{{__('calendar.March')}}</option>
                <option value="04">{{__('calendar.April')}}</option>
                <option value="05">{{__('calendar.May')}}</option>
                <option value="06">{{__('calendar.June')}}</option>
                <option value="07">{{__('calendar.July')}}</option>
                <option value="08">{{__('calendar.August')}}</option>
                <option value="09">{{__('calendar.September')}}</option>
                <option value="10">{{__('calendar.October')}}</option>
                <option value="11">{{__('calendar.November')}}</option>
                <option value="12">{{__('calendar.December')}}</option>
            </select>
        </div>
        <div class="flex items-center">
            <x-a-title-header title="{{__('calendar.calendar_schelude')}}" />
        </div>
    </x-a-header> 

    <div class="relative mx-2 pb-10">
        @include('includes.message')
        <div class="p-4">
            <ul>
                @foreach ($days as $day)
                    @if ( date('d', strtotime($day)) == '01' )
                        <!-- <li wire:key="{{$day}}_month" id="{{$day}}_month" 
                        class="flex justify-center items-center w-full my-2 h-28 rounded-xl text-2xl bg-pink-50 text-black dark:bg-pink-800 dark:text-white"
                        >
                        <div>{{__('calendar.wow_that')}} <span class="text-bold">{{__('calendar.'.date('F', strtotime($day)))}}</span> </div>
                        </li> -->
                    @endif

                    @if ( date('l', strtotime($day)) == 'Monday' )
                        <li wire:key="{{$day}}_week" id="{{$day}}_week" 
                        class="p-2 my-2 rounded-md text-xs bg-gray-900 text-gray-100 dark:bg-gray-400 dark:text-gray-900"
                        >{{$day}} - {{ date('Y-m-d', strtotime($day.' + 7 day' )) }} </li>
                    @endif

                    <li wire:key="{{$day}}" id="{{ date('Y-m-d', strtotime($day.' + 2 day' )) }}" 
                    class="flex flex-row justify-between p-2 border-b border-gray-300 {{ $day == Date('Y-m-d') ? 'bg-slate-100 dark:bg-slate-500 ' : ''}}"
                    >
                        <div class="w-20 p-2 mr-2 rounded-md text-xs text-center {{ date('l', strtotime($day)) == 'Sunday' ? 'bg-red-600 text-white ' : '' }}">
                            <div class="w-full">{{__('calendar.'.date('l', strtotime($day))) }}</div>
                            <div class="w-full text-4xl">{{ date('d', strtotime($day)) }}</div>
                            <div class="w-full">{{__('calendar.'.date('F', strtotime($day))) }}</div>
                        </div>
                        @php
                            $leads = Helper::getLeadByDate($day);
                            $todos = Helper::getTodoByDate($day)
                        @endphp
                        <div class="md:flex w-full">
                            @if($leads)
                                @foreach($leads as $l)
                                
                                    <div 
                                    class="w-full md:w-80 p-2 rounded-xl min-h-20 bg-gray-300 mb-2 md:mr-2
                                    dark:bg-gray-700" 
                                    >
                                        <div class="text-xs">{{__('calendar.time')}} {{ date("H:i", strtotime($l->executionTime)) }}</div>
                                        <div class="text-xl">{{$l->title}}</div>
                                        <div class="text-xs">{{ Helper::getClientName($l->client_id) }}</div>
                                    </div>
                                
                                @endforeach
                            @endif
                            @if($todos)
                                @foreach($todos as $todo)
                                    <div class="w-full md:w-80 p-2 rounded-xl h-20 bg-emerald-200 mb-2 md:mr-2 dark:bg-emerald-800">
                                        {{$todo->name}}
                                    </div>
                                @endforeach
                            @endif
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
        <!-- add button  -->
        <div 
        class="relative z-[11] sticky bottom-[50px] ml-[70%] md:ml-[80%] lg:ml-[86%] xl:ml-[92%] "
        data-te-dropdown-position="dropstart"
        >
            <button
            type="button"
            id="dropdownMenuButton1s"
            data-te-dropdown-toggle-ref
            aria-expanded="false"
            data-te-ripple-init
            data-te-ripple-color="light"
            class="w-20 h-20 p-2 rounded-full bg-amber-500 text-center text-white font-black">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-18 h-18">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                </svg>
            </button>       

            <ul
            class="absolute z-[1000] float-left m-0 hidden min-w-max list-none overflow-hidden rounded-lg border-none bg-white bg-clip-padding text-left text-base shadow-lg dark:bg-neutral-700 [&[data-te-dropdown-show]]:block"
            aria-labelledby="dropdownMenuButton1s"
            data-te-dropdown-menu-ref>
                <li>
                <a
                    class="block w-full whitespace-nowrap bg-transparent px-4 py-2 text-sm font-normal text-neutral-700 hover:bg-neutral-100 active:text-neutral-800 active:no-underline disabled:pointer-events-none disabled:bg-transparent disabled:text-neutral-400 dark:text-neutral-200 dark:hover:bg-neutral-600"
                    href="{{route('leads.create')}}"
                    data-te-dropdown-item-ref
                    >{{__('calendar.add_leads')}}</a
                >
                </li>
                <li>
                <a
                    class="block w-full whitespace-nowrap bg-transparent px-4 py-2 text-sm font-normal text-neutral-700 hover:bg-neutral-100 active:text-neutral-800 active:no-underline disabled:pointer-events-none disabled:bg-transparent disabled:text-neutral-400 dark:text-neutral-200 dark:hover:bg-neutral-600"
                    href="{{route('todo')}}"
                    data-te-dropdown-item-ref
                    >{{__('calendar.add_todo')}}</a
                >
                </li>
                
            </ul>
        </div>    
    </div>
</div>


