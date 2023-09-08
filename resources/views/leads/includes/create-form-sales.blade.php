<div>
    <div class="w-full mb-4 ">
            <label for="title" class="">{{__('leads.title')}}<span class="text-red-600"> (*)</span></label>
            <input id="title" type="text" 
            class="block mt-2 w-full border-gray-300 rounded-md
            dark:text-black" 
            name="title" value="{{old('title')}}" 
            required autofocus autocomplete="title" />
            @error('title')
                <div class="mt-2 p-2 rounded bg-red-400">{{ $message }}</div>
            @enderror
    </div>
    <div class="w-full mb-4 ">
            <label for="note" class="">{{__('leads.note')}}</label>
            <textarea id="note" 
            class="block mt-2 w-full border-gray-300 rounded-md dark:text-black" 
            name="note">{{ old('note') }}</textarea>
            @error('note')
                <div class="mt-2 p-2 rounded bg-red-400">{{ $message }}</div>
            @enderror
    </div>
    <div class="w-full mb-4 ">
            <label for="source_id" class="block mb-2 w-full">{{__('leads.source')}}</label>
            <select
            id="source_id" name="source_id" 
            class="w-full border-gray-300 rounded-md" 
            required 
            >
            <option value="0">{{__('leads.source')}}</option> 

            @foreach($sources as $item)
                <option value="{{$item->id}}" {{ old('source_id') == $item->id ? 'selected' : ''}}>{{$item->source}}</option> 
            @endforeach   
            </select>
            @error('source_id')
                <div class="mt-2 p-2 rounded bg-red-400">{{ $message }}</div>
            @enderror
    </div>
    <div class="w-full mb-4 ">
            <label for="type_id" class="block mb-2 w-full">{{__('leads.state')}}<span class="text-red-600"> (*)</span></label>
            <select
            id="type_id" name="type_id" value="old('type_id')"
            class="w-full border-gray-300 rounded-md" 
            required 
            >   
            <option value="0">{{__('leads.state')}}</option> 

            @foreach($types as $item)
                <option value="{{$item->id}}" {{ old('type_id') == $item->id ? 'selected' : ''}}>{{$item->type}}</option> 
            @endforeach
            </select>
            @error('type_id')
                <div class="mt-2 p-2 rounded bg-red-400">{{ $message }}</div>
            @enderror
    </div>
    <div class="flex flex-row mb-4">
        <div class="w-[50%] mr-4">
            <label for="executionDate" class="block mb-2 w-full">{{__('leads.date')}}<span class="text-red-600"> (*)</span></label>
            <input id="title" type="date" 
            class="block mt-2 w-full border-gray-300 rounded-md dark:text-black" 
            name="executionDate" value="{{old('executionDate')}}" 
            autocomplete="executionDate" /> 
            @error('executionDate')
                <div class="mt-2 p-2 rounded bg-red-400">{{ $message }}</div>
            @enderror               
        </div>
        <div class="relative w-[50%] mr-4" 
        id="time"
        data-te-format24="true"
        >
            <label for="executionTime" class="block mb-2 w-full">{{__('leads.time')}}</label>
            <input type="text"
            class="peer block mt-1 w-full rounded-md bg-transparent 
            pt-2 bg-white border-gray-300
            outline-none transition-all duration-200 ease-linear 
            focus:placeholder:opacity-100 peer-focus:text-primary 
            data-[te-input-state-active]:placeholder:opacity-100 
            motion-reduce:transition-none 
            dark:text-black dark:placeholder:text-black dark:peer-focus:text-black [&:not([data-te-input-placeholder-active])]:placeholder:opacity-100"
            id="executionTime" 
            name="executionTime" 
            value="{{old('executionTime')}}" 
            data-te-toggle="timepicker"/>
            @error('executionTime')
                <div class="mt-2 p-2 rounded bg-red-400">{{ $message }}</div>
            @enderror  
        </div>
        

    </div>    
</div>
