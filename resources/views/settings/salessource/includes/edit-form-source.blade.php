<div class="md:flex md:flex-row gap-4 mt-4">
            
    <div class="md:basis-2/3 p-4 mb-6">
        
        <div>
            <form action="{{ route('settings.salessource.update') }}" method="POST">
                    @csrf
                    <input type="hidden" name="id" value="{{ $source->id }}" />
                    <input type="hidden" name="_method" value="PATCH">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <!--Category -->
                    <div class="w-full mb-4 ">
                        <label for="source" class="">{{__('settings.form_source')}}<span class="text-red-600"> (*)</span></label>
                        <input id="source" type="text" 
                        class="block mt-2 w-full border-gray-300 rounded-md
                        dark:text-black" 
                        name="source" value="{{ $source->source }}" 
                        required autofocus autocomplete="source" />
                    </div>                   
                    <!--Submit button-->
                    <button
                    type="submit"
                    class="block w-full rounded-md bg-gray-600 py-4 font-medium text-white">
                    {{__('settings.edit_source')}}
                    </button>
                </form>
        </div>
    </div>

    <div class="md:basis-1/3 bg-gray-100 rounded-xl p-4 dark:bg-gray-800 ">
        
    </div>
</div>