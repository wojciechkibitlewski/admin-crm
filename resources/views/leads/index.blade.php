<x-app-layout>
    <div class="p-4 sm:p-7">
        
        <div class="bg-white rounded-xl p-4 dark:bg-gray-800 mb-8 ">
            <div class="w-full overflow-x-auto" >
                @include('leads.search-form')
            </div>
        </div>
    
        <div class="md:flex md:flex-row-reverse gap-4 items-center justify-between mb-4">
            <a class="p-2 px-4 bg-gray-200 dark:bg-gray-800 rounded-md" href="{{route('leads.create')}}" title="">Dodaj nowe zamówienie</a>

            <h1 class="font-bold text-lg ">Zamówienia</h1>
        </div>
        @if ($message = Session::get('success'))
            <div class="bg-sky-100 rounded-xl p-4 dark:bg-sky-800 mb-4">
                <p>{{ $message }}</p>
            </div>
        @endif

        <div class="bg-white rounded-xl p-4 dark:bg-gray-800 ">
            <div class="w-full overflow-x-auto mb-[20px]" id="leadsTable">
            <table class="text-left text-sm font-normal mb-4 w-full">
                <thead class="border-b text-xs bg-gray-50 dark:border-neutral-500">
                    <tr>
                        <th scope="col" class="px-2 py-2 font-light text-gray-400">Data</th>
                        <th scope="col" class="px-2 py-2 font-light text-gray-400">Co?</th>
                        <th scope="col" class="px-2 py-2 font-light text-gray-400">Zamawiający</th>
                        <th scope="col" class="px-2 py-2 font-light text-gray-400">Cena</th>
                        <th scope="col" class="px-2 py-2 font-light text-gray-400">Zaliczka</th>
                        <th scope="col" class="px-2 py-2 font-light text-gray-400">Stan realizacji</th>
                        <th scope="col" class="px-2 py-2 font-light text-gray-400">Akcja</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($leads as $item)
                        <tr
                        class="border-b transition duration-300 ease-in-out 
                        hover:bg-gray-200 dark:border-neutral-500 dark:hover:bg-neutral-600">
                            <td class="whitespace-nowrap px-2 py-2">{{ $item->executionDate }}</td>
                            <td class="whitespace-nowrap px-2 py-2">{{ $item->title }}</td>
                            <td class="whitespace-nowrap px-2 py-2"><a href="{{route('clients.show',$item->client_id)}}" class="underline" title="">{{ Helper::getClientName($item->client_id) }}</a></td>
                            <td class="whitespace-nowrap px-2 py-2">{{ $item->leadValue }} zł</td>
                            <td class="whitespace-nowrap px-2 py-2">{{ $item->advanceValue }} zł</td>
                            <td class="whitespace-nowrap px-2 py-2">{{ Helper::getStateName($item->type_id) }}</td>
                            <td class="whitespace-nowrap px-2 py-2 flex flex-row">
                                <div class="p-1">
                                    <a 
                                    class="bg-purple-200 p-1 px-2 border border-white rounded-md dark:bg-purple-900" 
                                    href="{{ route('leads.show',$item->id) }}">Show</a>
                                </div>
                                <div class="">
                                    <button
                                        type="button"
                                        class="bg-red-200 p-1 px-2 border border-white rounded-md dark:bg-red-900"  
                                        id="deleteRowButton_{{ $item->id }}"
                                        data-te-toggle="modal"
                                        data-te-target="#deleteRowModal"
                                        data-element="{{ $item->id }}" 
                                        data-te-ripple-init
                                        data-te-ripple-color="light">
                                        Delete
                                    </button>
                                    
                                </div>
                            </td>

                        </tr>
                    @endforeach

                        
                    </tbody>
            </table>
            {!! $leads->links() !!}

            </div>
        </div>
    </div>
   

<!-- Modal. Delete row -->
<div
  data-te-modal-init
  class="fixed left-0 top-0 z-[1055] hidden h-full w-full overflow-y-auto overflow-x-hidden outline-none"
  id="deleteRowModal"
  tabindex="-1"
  aria-labelledby="deleteRowModalLabel"
  aria-hidden="true">
  <div
    data-te-modal-dialog-ref
    class="pointer-events-none relative w-auto translate-y-[-50px] opacity-0 transition-all duration-300 ease-in-out min-[576px]:mx-auto min-[576px]:mt-7 min-[576px]:max-w-[500px]">
    <div
      class="min-[576px]:shadow-[0_0.5rem_1rem_rgba(#000, 0.15)] pointer-events-auto relative flex w-full flex-col rounded-md border-none bg-white bg-clip-padding text-current shadow-lg outline-none dark:bg-neutral-600">
      <div
        class="flex flex-shrink-0 items-center justify-between rounded-t-md border-b-2 border-neutral-100 border-opacity-100 p-4 dark:border-opacity-50">
        <!--Modal title-->
        <h5
          class="text-xl font-medium leading-normal text-neutral-800 dark:text-neutral-200"
          id="exampleModalLabel">
          Usuwanie zamówienia
        </h5>
        
      </div>

      <!--Modal body-->
      <div class="relative flex-auto p-4" data-te-modal-body-ref>
        Czy na pewno usunąć to zamówienie?
      </div>

      <!--Modal footer-->
      <div
        class="flex flex-shrink-0 flex-wrap items-center justify-end rounded-b-md border-t-2 border-neutral-100 border-opacity-100 p-4 dark:border-opacity-50">
        <button
          type="button"
          class="inline-block rounded bg-primary-100 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-primary-700 transition duration-150 ease-in-out hover:bg-primary-accent-100 focus:bg-primary-accent-100 focus:outline-none focus:ring-0 active:bg-primary-accent-200"
          data-te-modal-dismiss
          data-te-ripple-init
          data-te-ripple-color="light">
          Cancel
        </button>
        <form action="{{ route('leads.destroy') }}" method="POST">
            <input type="hidden" id="deleteRowModalId" name="id" value="" />
            <input type="hidden" name="_method" value="DELETE">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <button 
            type="submit" 
            class="ml-1 inline-block rounded-md bg-red-600 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal 
            text-white dark:bg-red-900" 
            data-te-ripple-init
            data-te-ripple-color="light"
            >Delete</button>
        </form>
        
        
      </div>
    </div>
  </div>
</div>

</x-app-layout>
<script>
    /// delete row
    const leadsTable = document.getElementById("leadsTable");
    let deleteRowButton = leadsTable.getElementsByTagName("button");
    const inputID = document.getElementById("deleteRowModalId");

    const buttonPressed = e => {
    //console.log(e.target.getAttribute('data-element'));
    inputID.setAttribute("value", e.target.getAttribute('data-element'));
    }

    for (let button of deleteRowButton) {
    button.addEventListener("click", buttonPressed);
    }
</script>