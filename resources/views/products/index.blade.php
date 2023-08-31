<x-app-layout>
    <div class="p-4 sm:p-7">
        <x-a-header>
            <x-a-link-add href="{{route('products.create')}}" title="{{__('Dodaj nowy produkt')}}">
                {{__('Dodaj nowy produkt')}}    
            </x-a-link-add>
            <x-a-title-header title="{{__('Produkty/usługi. Wszystkie')}}" />
        </x-a-header>

        @if ($message = Session::get('success'))
            <div class="bg-sky-100 rounded-xl p-4 dark:bg-sky-800 mb-4">
                <p>{{ $message }}</p>
            </div>
        @endif

        <div class="bg-white rounded-xl dark:bg-gray-800 ">
            <div class="w-full overflow-x-auto">
                <table class="w-full text-left text-sm font-normal">
                    <thead class="border-b text-xs bg-gray-50 dark:border-neutral-500">
                        <tr>
                            <th scope="col" class="px-4 py-2 font-light text-gray-400">Nazwa</th>
                            <th scope="col" class="px-4 py-2 font-light text-gray-400">Cena</th>
                            <th scope="col" class="px-4 py-2 font-light text-gray-400">Kategoria</th>
                            <th scope="col" class="px-4 py-2 font-light text-gray-400">Akcja</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($products as $item)
                        <tr
                        class="border-b transition duration-300 ease-in-out 
                        hover:bg-gray-200 dark:border-neutral-500 dark:hover:bg-neutral-600">
                            <td class="whitespace-nowrap px-4 py-2">
                                {{ $item->name }}
                            </td>
                            <td class="whitespace-nowrap px-4 py-2 ">{{ $item->price }} zł</td>
                            <td class="whitespace-nowrap px-4 py-2 ">{{ Helper::getCategoryName($item->category_id) }}</td>

                            <td class="whitespace-nowrap px-4 py-2">
                                <form action="{{ route('products.destroy') }}" method="POST">
                                    <a class="bg-sky-200 p-1 px-2 border border-white rounded-md dark:bg-sky-900" href="{{ route('products.show',$item->id) }}">Show</a>
                                    <a class="bg-purple-200 p-1 px-2 border border-white rounded-md dark:bg-purple-900" href="{{ route('products.edit',$item->id) }}">Edit</a>
                                
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
                {!! $products->links() !!}

            </div>
        </div>
    </div>
   
</x-app-layout>