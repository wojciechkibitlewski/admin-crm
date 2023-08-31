<form action="{{ route('clients.destroy') }}" method="POST" id="destroyTable_{{$row->id}}">
    <a class="bg-sky-200 p-1 px-2 border border-white rounded-md dark:bg-sky-900" href="{{ route('clients.show',$row->id) }}">Show</a>
    <a class="bg-purple-200 p-1 px-2 border border-white rounded-md dark:bg-purple-900" href="{{ route('clients.edit',$row->id) }}">Edit</a>

    <input type="hidden" name="id" value="{{$row->id}}" />
    <input type="hidden" name="_method" value="DELETE">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <button type="submit" class="bg-red-200 p-1 px-2 border border-white rounded-md dark:bg-red-900">Delete</button>
</form>