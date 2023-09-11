<div>
<div class="bg-white rounded-xl p-4 dark:bg-gray-800 mb-4">
    <h1 class="text-2xl">{{__('reports.sales_in_month')}}</h1>
    <div class="flex flex-row justify-between mb-4">
        <div class="flex flex-row items-center  mr-2 ">
            
        </div>
        <div class="flex flex-row items-center">
            <div class="hidden md:inline-block mr-2 mt-2 ">{{__('reports.select_year')}}</div> 
            <select
            wire:model.live="currentYear" 
            id="currentYear" name="currentYear" 
            class="border-gray-300 rounded-md mt-2 ml-2 dark:bg-gray-300 dark:text-black" 
            >
            @foreach ($year as $y)
                <option value="{{$y['value']}}">{{ $y['name']}}</option>
            @endforeach   
            </select>

            <div class="hidden md:inline-block ml-2 mt-2 ">{{__('reports.select_month')}}</div> 
            <select
            wire:model.live="currentMonth" 
            id="currentMonth" name="currentMonth" 
            class="border-gray-300 rounded-md mt-2 ml-2 dark:bg-gray-300 dark:text-black" 
            >
            @foreach ($month as $m)
                <option value="{{$m['value']}}">{{__('calendar.'.$m['name'])}}</option>
            @endforeach                
            </select>
        </div>
    </div>


    <div class="w-full overflow-x-auto mb-[20px]">
    <table class="text-left text-sm font-normal mb-4 w-full">
        <thead class="border-b text-xs text-gray-400 bg-gray-100 
        dark:bg-gray-600 dark:text-gray-100 dark:border-neutral-500">
            <tr>
                <th scope="col" class="px-2 py-2 font-light">{{__('reports.data')}}</th>
                <th scope="col" class="px-2 py-2 font-light">{{__('reports.client')}}</th>
                <th scope="col" class="px-2 py-2 font-light">{{__('reports.title')}}</th>
                <th scope="col" class="px-2 py-2 font-light text-right">{{__('reports.value')}}</th>
                <th scope="col" class="px-2 py-2 font-light text-right">{{__('reports.payment')}}</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($leads as $item)
                <tr
                class="border-b transition duration-300 ease-in-out 
                hover:bg-gray-200 dark:border-neutral-500 dark:hover:bg-neutral-600">
                    <td class="whitespace-nowrap px-2 py-2">{{ $item->executionDate }}</td>
                    <td class="whitespace-nowrap px-2 py-2">{{ Helper::getClientName($item->client_id) }}</td>
                    <td class="whitespace-nowrap px-2 py-2">{{ $item->title }}</td>
                    <td class="whitespace-nowrap px-2 py-2 text-right">{{ $item->leadValue }} zł</td>
                    <td class="whitespace-nowrap px-2 py-2 text-right">{{ $item->advanceValue }} zł</td>
                </tr>
            @endforeach 
            
            <tr
                class="border-b text-gray-400 bg-gray-100 font-bold
                    dark:bg-gray-600 dark:text-gray-100 dark:border-neutral-500">
                    <td class="whitespace-nowrap px-2 py-2"></td>
                    <td class="whitespace-nowrap px-2 py-2"></td>
                    <td class="whitespace-nowrap px-2 py-2">{{__('reports.sum')}}</td>
                    <td class="whitespace-nowrap px-2 py-2 text-right">{{ $data->sumLeadValue }} zł</td>
                    <td class="whitespace-nowrap px-2 py-2 text-right">{{ $data->sumAdvanceValue }} zł</td>
                </tr>
            
            </tbody>
    </table>

    </div>
</div>
</div>
