<div class="bg-slate-100 p-6 rounded-md border-gray-400 mt-8 dark:bg-white/5 dark:text-white">
    <div class="overflow-x-auto margin-bottom: 20px;">
    <table class="text-left text-sm font-normal">
        <thead class="border-b text-xs dark:border-neutral-500">
            <tr>
                <th scope="col" class="px-4 py-2 font-light text-gray-400">ID</th>
                <th scope="col" class="px-4 py-2 font-light text-gray-400">Data</th>
                <th scope="col" class="px-4 py-2 font-light text-gray-400">Co?</th>
                <th scope="col" class="px-4 py-2 font-light text-gray-400">Zamawiający</th>
                <th scope="col" class="px-4 py-2 font-light text-gray-400">Cena</th>
                <th scope="col" class="px-4 py-2 font-light text-gray-400">Zaliczka</th>
                <th scope="col" class="px-4 py-2 font-light text-gray-400">Stan realizacji</th>
                <th scope="col" class="px-4 py-2 font-light text-gray-400">Akcja</th>
            </tr>
        </thead>
        <tbody>
                <tr
                class="border-b transition duration-300 ease-in-out 
                hover:bg-gray-200 dark:border-neutral-500 dark:hover:bg-neutral-600">
                    <td class="whitespace-nowrap px-4 py-2 ">1</td>
                    <td class="whitespace-nowrap px-4 py-2">27.08.2023</td>
                    <td class="whitespace-nowrap px-4 py-2">Sesja rodzinna w plenerze</td>
                    <td class="whitespace-nowrap px-4 py-2">Anna Karenina</td>
                    <td class="whitespace-nowrap px-4 py-2">800 zł</td>
                    <td class="whitespace-nowrap px-4 py-2">0 zł</td>
                    <td class="whitespace-nowrap px-4 py-2">wybrane </td>
                    <td class="whitespace-nowrap px-4 py-2">
                        <form action="" method="POST">
                            <a class="bg-purple-200 p-1 px-2 border border-white rounded-md dark:bg-purple-900" href="">Show</a>
                        
                            <input type="hidden" name="id" value="" />
                            <input type="hidden" name="_method" value="DELETE">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <button type="submit" class="bg-red-200 p-1 px-2 border border-white rounded-md dark:bg-red-900">Delete</button>
                        </form>
                    </td>

                </tr>
                <tr
                class="border-b transition duration-300 ease-in-out 
                hover:bg-gray-200 dark:border-neutral-500 dark:hover:bg-neutral-600">
                    <td class="whitespace-nowrap px-4 py-2 ">1</td>
                    <td class="whitespace-nowrap px-4 py-2">27.08.2023</td>
                    <td class="whitespace-nowrap px-4 py-2">Sesja noworodkowa lifestyle</td>
                    <td class="whitespace-nowrap px-4 py-2">Anna Karenina</td>
                    <td class="whitespace-nowrap px-4 py-2">9500 zł</td>
                    <td class="whitespace-nowrap px-4 py-2 bg-yellow-200">0 zł</td>
                    <td class="whitespace-nowrap px-4 py-2">nowe zamówienie</td>
                    <td class="whitespace-nowrap px-4 py-2">
                        <form action="" method="POST">
                            <a class="bg-purple-200 p-1 px-2 border border-white rounded-md dark:bg-purple-900" href="{{route('sales.show',1)}}">Show</a>
                        
                            <input type="hidden" name="id" value="" />
                            <input type="hidden" name="_method" value="DELETE">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <button type="submit" class="bg-red-200 p-1 px-2 border border-white rounded-md dark:bg-red-900">Delete</button>
                        </form>
                    </td>

                </tr>
                <tr
                class="border-b transition duration-300 ease-in-out 
                hover:bg-gray-200 dark:border-neutral-500 dark:hover:bg-neutral-600">
                    <td class="whitespace-nowrap px-4 py-2 ">1</td>
                    <td class="whitespace-nowrap px-4 py-2">27.08.2023</td>
                    <td class="whitespace-nowrap px-4 py-2">Anna Karenina</td>
                    <td class="whitespace-nowrap px-4 py-2">Sesja rodzinna u klienta</td>
                    <td class="whitespace-nowrap px-4 py-2">800 zł</td>
                    <td class="whitespace-nowrap px-4 py-2">800 zł</td>
                    <td class="whitespace-nowrap px-4 py-2">zrealizowane</td>
                    <td class="whitespace-nowrap px-4 py-2">
                        <form action="" method="POST">
                            <a class="bg-purple-200 p-1 px-2 border border-white rounded-md dark:bg-purple-900" href="">Show</a>
                        
                            <input type="hidden" name="id" value="" />
                            <input type="hidden" name="_method" value="DELETE">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <button type="submit" class="bg-red-200 p-1 px-2 border border-white rounded-md dark:bg-red-900">Delete</button>
                        </form>
                    </td>

                </tr>
            </tbody>
    </table>
    </div>
</div>
