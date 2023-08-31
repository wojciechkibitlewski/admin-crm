<x-app-layout>
    <div class="p-4 sm:p-7">
        <div class="bg-white rounded-xl p-4 dark:bg-gray-800 mb-8 ">
            <div class="w-full overflow-x-auto" >
                @include('clients.search-form')
            </div>
        </div>

        <div class="md:flex md:flex-row-reverse gap-4 items-center justify-between mb-4">
            <a class="p-2 px-4 bg-gray-200 dark:bg-gray-800 rounded-md" href="{{route('clients.create')}}" title="">Dodaj nowego klienta</a>

            <h1 class="font-bold text-lg ">Klienci. Wszyscy</h1>
        </div>
        @if ($message = Session::get('success'))
            <div class="bg-sky-100 rounded-xl p-4 dark:bg-sky-800 mb-4">
                <p>{{ $message }}</p>
            </div>
        @endif

        <div class="bg-white rounded-xl p-4 dark:bg-gray-800 ">
            <div class="w-full overflow-x-auto margin-bottom: 20px;" id="clientTable">
            <div class="w-full overflow-x-auto margin-bottom: 20px;">
                <table class="w-full text-left text-sm font-normal">
                    <thead class="border-b text-xs bg-gray-50 dark:border-neutral-500">
                        <tr>
                            <th scope="col" class="px-4 py-2 font-light text-gray-400">ID</th>
                            <th scope="col" class="px-4 py-2 font-light text-gray-400">Imię i nazwisko</th>
                            <th scope="col" class="px-4 py-2 font-light text-gray-400">Telefon</th>
                            <th scope="col" class="px-4 py-2 font-light text-gray-400">Email</th>
                            <th scope="col" class="px-4 py-2 font-light text-gray-400">Akcja</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($clients as $item)
                        <tr
                        class="border-b transition duration-300 ease-in-out 
                        hover:bg-gray-200 dark:border-neutral-500 dark:hover:bg-neutral-600">
                            <td class="whitespace-nowrap px-4 py-2 ">{{ $item->id }}</td>
                            <td class="whitespace-nowrap px-4 py-2">
                                {{ $item->name }}
                            </td>
                            <td class="whitespace-nowrap px-4 py-2 ">{{ $item->phone }}</td>
                            <td class="whitespace-nowrap px-4 py-2 ">{{ $item->email }}</td>

                            <td class="whitespace-nowrap px-4 py-2">
                                <form action="{{ route('clients.destroy') }}" method="POST">
                                    <a class="bg-sky-200 p-1 px-2 border border-white rounded-md dark:bg-sky-900" href="{{ route('clients.show',$item->id) }}">Show</a>
                                    <a class="bg-purple-200 p-1 px-2 border border-white rounded-md dark:bg-purple-900" href="{{ route('clients.edit',$item->id) }}">Edit</a>
                                
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
                {!! $clients->links() !!}

            </div>
            </div>
        

            
        </div>
    </div>
   
</x-app-layout>