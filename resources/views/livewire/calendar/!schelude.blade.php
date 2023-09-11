<div>
    <div class="flex justify-center w-full mx-auto my-6"> 
        <div
            x-data="{ loading: false }" 
            x-show="loading"
            @loading.window="loading = $event.detail.loading"
            class="inline-block h-8 w-8 animate-spin rounded-full border-4 border-solid border-current border-r-transparent align-[-0.125em] motion-reduce:animate-[spin_1.5s_linear_infinite]"
            role="status">
            <span
            class="!absolute !-m-px !h-px !w-px !overflow-hidden !whitespace-nowrap !border-0 !p-0 ![clip:rect(0,0,0,0)]"
        >Loading...</span
            >
        </div>
    </div>

    <ul>
        @foreach ($days as $day)
            @if ( date('d', strtotime($day)) == '01' )
                <li wire:key="{{$day}}_month" id="{{$day}}_month" 
                class="flex justify-center items-center w-full my-2 h-28 rounded-xl text-2xl bg-pink-50 text-black dark:bg-pink-800 dark:text-white"
                >
                <div>{{__('calendar.wow_that')}} <span class="text-bold">{{__('calendar.'.date('F', strtotime($day)))}}</span> </div>
                </li>
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
    
    <script>
        window.onload = function() {
            Livewire.hook('message.sent', () => {
                window.dispatchEvent(
                    new CustomEvent('loading', { detail: { loading: true }})
                );
            })
            Livewire.hook('message.processed', (message, component) => {
                window.dispatchEvent(
                    new CustomEvent('loading', { detail: { loading: false }})
                );
            })
        }
    </script>
    <div class="flex justify-center w-full mx-auto my-6"> 
        <div
            x-data="{ loading: false }" 
            x-show="loading"
            @loading.window="loading = $event.detail.loading"
            class="inline-block h-8 w-8 animate-spin rounded-full border-4 border-solid border-current border-r-transparent align-[-0.125em] motion-reduce:animate-[spin_1.5s_linear_infinite]"
    role="status">
            <span
            class="!absolute !-m-px !h-px !w-px !overflow-hidden !whitespace-nowrap !border-0 !p-0 ![clip:rect(0,0,0,0)]"
        >Loading...</span
            >
        </div>
    </div>
    

</div>


