
<form action="{{ route('leads.search') }}" method="POST" >
    @csrf
    <div class="md:flex md:flex-row items-center ">
        <div class="md:basis-1/3">
            <p>{{__('leads.search_date')}}</p>
        </div>
        <div class="md:basis-1/3 md:mr-4">
            <input type="date" class="block mt-2 w-full border-gray-300 rounded-md dark:text-black" 
            name="date_start" value="{{$startDate}}" 
            autocomplete="date_start" />
        </div>
        <div class="md:basis-1/3">
            <input type="date" class="block mt-2 w-full border-gray-300 rounded-md dark:text-black" 
            name="date_end" value="{{$endDate}}" 
            autocomplete="date_end" />
        </div>
    </div>

    <div class="md:flex md:flex-row items-center mt-6 ">
        <div class="md:basis-1/3">
            <p>{{__('leads.table_state')}}</p>
        </div>
        <div class="md:basis-1/3 md:mr-4">
            <select
            class="block mt-2 w-full border-gray-300 rounded-md dark:text-black"
            id="type_id" name="type_id" value="old('type_id')">   
                <option value="">{{__('leads.state')}}</option>
                @foreach ($types as $item)
                <option value="{{ $item['id'] }}" {{ $type_id == $item['id'] ? 'selected' : '' }}>{{$item['type']}}</option> 
                @endforeach
            </select>
        </div>
        <div class="md:basis-1/3">
            
        </div>
    </div>
    <div class="md:flex md:flex-row items-center mt-6">
        <div class="md:basis-1/3">
            <p>{{__('leads.table_source')}}</p>
        </div>
        <div class="md:basis-1/3 md:mr-4">
            <select
            class="block mt-2 w-full border-gray-300 rounded-md dark:text-black"
            id="source_id" name="source_id" value="old('source_id')">   
                <option value="">{{__('leads.source')}}</option>
                @foreach ($sources as $item)
                <option value="{{$item['id']}}" {{ $source_id == $item['id'] ? 'selected' : '' }} >{{$item['source']}}</option> 
                @endforeach
            </select>
        </div>
        <div class="md:basis-1/3">
            
        </div>
    </div>
    <div class="md:flex md:flex-row items-center mt-6">
        <div class="md:basis-1/3">
            <p>{{__('leads.table_payment')}}</p>
        </div>
        <div class="md:basis-1/3 md:mr-4">
            <select
            class="block mt-2 w-full border-gray-300 rounded-md dark:text-black"
            id="value" name="value" value="old('value')">   
                <option value="">{{__('leads.select')}}</option>
                <option value="1" {{ $value == 1 ? 'selected' : '' }}>{{__('leads.nopaid')}}</option> 
                <option value="2" {{ $value == 2 ? 'selected' : '' }}>{{__('leads.paid')}}</option> 
            </select>
        </div>
        <div class="md:basis-1/3">
            
        </div>
    </div>
    <div class="md:flex md:flex-row items-center mt-6">
        <div class="md:basis-1/3">
        </div>
        <div class="md:basis-1/3 md:mr-4">
            
        </div>
        <div class="md:basis-1/3">
            <button type="submit" 
            class="block w-full rounded-md bg-gray-600 py-4 font-medium text-white mt-4 dark:border dark:border-gray-200">
            {{ __('leads.search_leads')}}
            </button> 
        </div>
    </div>
</form>