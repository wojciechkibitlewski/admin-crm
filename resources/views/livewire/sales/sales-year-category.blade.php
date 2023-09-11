<div>
    <div class="bg-white rounded-xl p-4 dark:bg-gray-800 mb-4">
        <h1 class="text-2xl">{{__('reports.sales_year_category')}}</h1>
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

                
            </div>
        </div>

        <div class="w-full overflow-x-auto mb-[20px]">
            <table class="text-left text-sm font-normal mb-4 w-full">
                <thead class="border-b text-xs text-gray-400 bg-gray-100 
                dark:bg-gray-600 dark:text-gray-100 dark:border-neutral-500">
                    <tr>
                        <th scope="col" class="px-2 py-2 font-light">{{__('reports.category')}}</th>
                        @foreach($month as $m)
                            <th scope="col" class="px-2 py-2 font-light text-right">{{__('calendar.'.$m['name'])}}</th>
                        @endforeach
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $item)
                        <tr
                        class="border-b transition duration-300 ease-in-out 
                        hover:bg-gray-200 dark:border-neutral-500 dark:hover:bg-neutral-600">
                            <td class="whitespace-nowrap px-2 py-2">{{ $item->category }}</td>
                            @foreach($month as $m)
                                <td class="whitespace-nowrap px-2 py-2  text-right">
                                    @php
                                        $value = Helper::getSalesbyCategory($item->category_id, $m['value'], $currentYear);
                                    @endphp
                                    @if($value)
                                        {{$value}} zł
                                    @endif
                                </td>
                            @endforeach
                            </tr>
                    @endforeach 

                    </tbody>
            </table>
        </div>
    </div>

</div>

