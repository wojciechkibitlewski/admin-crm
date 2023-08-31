<div class="w-full overflow-x-auto">
    <table class="w-full text-left text-sm font-normal">
        <thead class="border-b text-xs  bg-gray-50 dark:border-neutral-500">
            <tr>
                <th scope="col" class="px-4 py-2 font-light text-gray-400">ID</th>
                <th scope="col" class="px-4 py-2 font-light text-gray-400">Źródło</th>
                <th scope="col" class="px-4 py-2 font-light text-gray-400">Akcja</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($sources as $item)
                <tr
                class="border-b transition duration-300 ease-in-out 
                hover:bg-gray-200 dark:border-neutral-500 dark:hover:bg-neutral-600">
                    <td class="whitespace-nowrap px-4 py-2 ">{{ $item->id }}</td>
                    <td class="whitespace-nowrap px-4 py-2">{{ $item->source }}</td>
                    <td class="whitespace-nowrap px-4 py-2">
                        <form action="{{ route('settings.salessource.destroy') }}" method="POST">
                            <a class="bg-purple-200 p-1 px-2 border border-white rounded-md dark:bg-purple-900" href="{{ route('settings.salessource.edit',$item->id) }}">Edit</a>
                        
                            <input type="hidden" name="id" value="{{ $item->id }}" />
                            <input type="hidden" name="_method" value="DELETE">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <button type="submit" class="bg-red-200 p-1 px-2 border border-white rounded-md dark:bg-red-900">Delete</button>
                        </form>
                    </td>

                </tr>
                @endforeach
            </tbody>
    </table>
    <div class="mt-6">
    {!! $sources->links() !!}
    </div>
    </div>