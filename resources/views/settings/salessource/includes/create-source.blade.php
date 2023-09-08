<div>
    <form action="{{ route('settings.salessource.store') }}" method="POST">
    @csrf
    <!--Category -->
    <div class="w-full mb-4 ">
        <label for="source" class="">{{__('settings.form_source')}}<span class="text-red-600"> (*)</span></label>
        <input id="source" type="text" 
        class="block mt-2 w-full border-gray-300 rounded-md
        dark:text-black" 
        name="source" value="{{old('source')}}" 
        required autofocus autocomplete="source" />
    </div>                   
    <!--Submit button-->
    <button
    type="submit"
    class="block w-full rounded-md bg-gray-600 py-4 font-medium text-white">
    {{__('settings.add_source')}}
    </button>
</form>
</div>

