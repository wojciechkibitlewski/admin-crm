@if ($message = Session::get('success'))
    <div class="bg-sky-100 rounded-xl p-4 dark:bg-sky-800 mb-4">
        <p>{{ $message }}</p>
    </div>
@endif

@if ($errors->any())
    <div class="bg-red-100 rounded-xl p-4 dark:bg-red-800 mb-4">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif