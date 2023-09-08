<div class="bg-white rounded-xl p-4 dark:bg-gray-800 ">
    
    <div class="w-full overflow-x-auto mb-[20px]" id="leadsTable">
    <table class="text-left text-sm font-normal mb-4 w-full">
        <thead class="border-b text-xs text-gray-400 bg-gray-100 
        dark:bg-gray-600 dark:text-gray-100 dark:border-neutral-500">
            <tr>
                <th scope="col" class="px-2 py-2 font-light">{{__('leads.table_date')}}</th>
                <th scope="col" class="px-2 py-2 font-light">{{__('leads.table_title')}}</th>
                <th scope="col" class="px-2 py-2 font-light">{{__('leads.table_client')}}</th>
                <th scope="col" class="px-2 py-2 font-light">{{__('leads.table_price')}}</th>
                <th scope="col" class="px-2 py-2 font-light ">{{__('leads.table_adv')}}</th>
                <th scope="col" class="px-2 py-2 font-light ">{{__('leads.table_state')}}</th>
                <th scope="col" class="px-2 py-2 font-light">{{__('leads.table_action')}}</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($leads as $item)
                <tr
                class="border-b transition duration-300 ease-in-out 
                hover:bg-gray-200 dark:border-neutral-500 dark:hover:bg-neutral-600">
                    <td class="whitespace-nowrap px-2 py-2">{{ $item->executionDate }}</td>
                    <td class="whitespace-nowrap px-2 py-2">{{ $item->title }}</td>
                    <td class="whitespace-nowrap px-2 py-2"><a href="{{route('clients.show',$item->client_id)}}" class="underline" title="">{{ Helper::getClientName($item->client_id) }}</a></td>
                    <td class="whitespace-nowrap px-2 py-2">{{ $item->leadValue }} zł</td>
                    <td class="whitespace-nowrap px-2 py-2">{{ $item->advanceValue }} zł</td>
                    <td class="whitespace-nowrap px-2 py-2">{{ Helper::getStateName($item->type_id) }}</td>
                    <td class="whitespace-nowrap px-2 py-2 flex flex-row">
                        <div class="p-1">
                            <a 
                            class="bg-purple-200 p-1 px-2 border border-white rounded-md dark:bg-purple-900" 
                            href="{{ route('leads.show',$item->prefix) }}">{{__('leads.show')}}</a>
                        </div>
                        
                        </div>
                    </td>

                </tr>
            @endforeach

                
            </tbody>
    </table>

    </div>
    {!! $leads->links() !!}
</div>