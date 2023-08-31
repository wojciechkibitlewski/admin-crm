<div>
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Error!</strong> <br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('settings.salestype.store') }}" method="POST">
    @csrf
    <!--Category -->
    <div class="w-full mb-4 ">
        <label for="type" class="">{{__('Stan realizacji zamówienia*')}}</label>
        <input id="type" type="text" 
        class="block mt-2 w-full border-gray-300 rounded-md
        dark:text-black" 
        name="type" value="{{old('type')}}" 
        required autofocus autocomplete="type" />
    </div>   
    <div class="mb-4">
        <label for="order" class="">{{__('Kolejność*')}}</label>
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
    Dodaj stan
    </button>
</form>
</div>
