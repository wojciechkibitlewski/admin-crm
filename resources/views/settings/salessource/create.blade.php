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

    <form action="{{ route('settings.salessource.store') }}" method="POST">
    @csrf
    <!--Category -->
    <div class="w-full mb-4 ">
        <label for="source" class="">{{__('Źródło*')}}</label>
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
    Dodaj źródło
    </button>
</form>
</div>
