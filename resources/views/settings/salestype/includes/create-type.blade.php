<form action="{{ route('settings.salestype.store') }}" method="POST">
    @csrf
    <!--Category -->
    <div class="w-full mb-4 ">
        <label for="type" class="">{{__('settings.form_type')}}<span class="text-red-600"> (*)</span></label>
        <input id="type" type="text" 
        class="block mt-2 w-full border-gray-300 rounded-md
        dark:text-black" 
        name="type" value="{{old('type')}}" 
        required autofocus autocomplete="type" />
    </div>   
    <div class="mb-4">
        <label for="order" class="">{{__('settings.form_order')}} <span class="text-red-600"> (*)</span></label>
        <input id="order" type="text" 
        class="block mt-2 w-full border-gray-300 rounded-md
        dark:text-black" 
        name="order" value="{{old('order')}}" 
        required autocomplete="order" />

    </div>                   
    <!--Submit button-->
    <button
    type="submit"
    class="block w-full rounded-md bg-gray-600 py-4 font-medium text-white">
    {{__('settings.add_type')}}
    </button>
</form>