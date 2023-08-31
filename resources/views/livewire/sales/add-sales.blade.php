<div>
    <div class="w-full mb-4 ">
            <label for="title" class="">{{__('Tytuł*')}}</label>
            <input id="title" type="text" 
            class="block mt-2 w-full border-gray-300 rounded-md
            dark:text-black" 
            name="title" value="{{old('title')}}" 
            required autofocus autocomplete="title" />
    </div>
    <div class="w-full mb-4 ">
            <label for="note" class="">{{__('Notatka*')}}</label>
            <textarea id="note" 
            class="block mt-2 w-full border-gray-300 rounded-md dark:text-black" 
            name="note">{{ old('note') }}</textarea>
    </div>
    <div class="w-full mb-4 ">
            <label for="source_id" class="block mb-2 w-full">{{__('Wybierz źródło*')}}</label>
            <select
            id="source_id" name="source_id" value="old('source_id')"
            data-te-select-init
            data-te-select-placeholder="Wybierz źródło"
            >   
                <option value="1">Google</option> 
            </select>
    </div>
    <div class="w-full mb-4 ">
            <label for="source_id" class="block mb-2 w-full">{{__('Stan zamówienia*')}}</label>
            <select
            id="source_id" name="source_id" value="old('source_id')"
            data-te-select-init
            data-te-select-placeholder="Wybierz stan zamówienia"
            >   
                <option value="1">Nowe zamówienie</option> 
            </select>
    </div>
    <div class="flex flex-row mb-4">
        <div class="w-[50%] mr-4">
            <label for="executionDate" class="block mb-2 w-full">{{__('Data sesji*')}}</label>
            <input id="title" type="date" 
            class="block mt-2 w-full border-gray-300 rounded-md dark:text-black" 
            name="executionDate" value="{{old('executionDate')}}" 
            autocomplete="executionDate" />                    
        </div>
        <div class="relative w-[50%] mr-4" id="time" data-te-timepicker-init >
            <label for="executionTime" class="block mb-2 w-full">Wybierz godzinę</label>
            <input type="text"
            class="peer block mt-1 w-full rounded-md bg-transparent 
            pt-2 bg-white border-gray-300
            outline-none transition-all duration-200 ease-linear 
            focus:placeholder:opacity-100 peer-focus:text-primary 
            data-[te-input-state-active]:placeholder:opacity-100 
            motion-reduce:transition-none 
            dark:text-black dark:placeholder:text-black dark:peer-focus:text-black [&:not([data-te-input-placeholder-active])]:placeholder:opacity-100"
            id="executionTime" name="executionTime" value="{{old('executionTime')}}"  />
        </div>
        

    </div>    
</div>
