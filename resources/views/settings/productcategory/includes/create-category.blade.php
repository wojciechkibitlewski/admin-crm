<form action="{{ route('settings.productcategory.store') }}" method="POST">
    @csrf
    <!--Category -->
    <div class="w-full mb-4 ">
        <label for="category" class="">{{__('settings.form_category')}} <span class="text-red-600"> (*)</span></label>
        <input id="category" type="text" 
        class="block mt-2 w-full border-gray-300 rounded-md
        dark:text-black" 
        name="category" value="{{old('category')}}" 
        required autofocus autocomplete="category" />
    </div>                   
    <!--Submit button-->
    <button
    type="submit"
    class="block w-full rounded-md bg-gray-600 py-4 font-medium text-white">
    {{__('settings.add_category')}}
    </button>
</form>