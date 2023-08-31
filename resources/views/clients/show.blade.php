<x-app-layout>
    <div class="p-4 sm:p-7">
        <div class="md:flex md:flex-row-reverse gap-4 items-center justify-between mb-4">
            <div class="md:flex md:flex-row gap-2 items-center justify-between mb-4">
                <a class="p-2 px-4 bg-purple-200 dark:bg-purple-800 rounded-md" href="{{ route('clients.edit',$client->id) }}" title="">Edytuj dane klienta</a>
                <button type="button" 
                class="p-2 px-4 bg-red-200 dark:bg-red-900 rounded-md"
                data-te-toggle="modal"
                data-te-target="#deleteClientModal"
                data-te-ripple-init
                data-te-ripple-color="light"
                >
                Usuń klienta</button>
                
            </div>
            <h1 class="font-bold text-lg">Klient. Szczegółowe dane</h1>
        </div>
            

        @if ($message = Session::get('success'))
            <div class="bg-sky-100 rounded-xl p-4 dark:bg-sky-800 mb-4">
                <p>{{ $message }}</p>
            </div>
        @endif

        <div class="md:flex md:flex-row gap-4 mt-4">
            
            <div class="md:basis-2/3 bg-white rounded-xl p-4 dark:bg-gray-800 mb-6">
                <h2 class="font-medium text-lg mb-6">{{$client->name}}</h2>
                @if($client->email)
                <div class="mt-4">
                    <p class="text-gray-400 uppercase text-xs">Adres email</p>
                    <a href="mailto:{{$client->email}}" title="" class="block text-xl font-medium underline">{{$client->email}}</a>
                    
                </div>
                @endif
                @if($client->phone)
                <div class="mt-4">
                    <p class="text-gray-400 uppercase text-xs">Telefon</p>
                        <a href="tel:{{$client->phone}}" class="block text-xl font-medium">{{$client->phone}}</a>
                </div>
                @endif
                @if($client->social)
                <div class="mt-4">
                    <p class="text-gray-400 uppercase text-xs">Social media</p>
                    <a target="_blank" href="{{$client->social}}" title="" class="block text-xl font-medium underline">{{$client->social}}</a>
                    </p>
                </div>
                @endif
                @if($client->firm)
                <div class="mt-4">
                    <p class="text-gray-400 uppercase text-xs">Firma</p>
                        <p class="block text-xl font-medium">{{$client->firm}}
                    </p>
                </div>
                @endif
                <div class="mt-4">
                    <p class="text-gray-400 uppercase text-xs" >Notatki</p>
                    
                        <p class="block font-normal mt-4">
                            @php 
                            print_r(nl2br($client->note));
                            @endphp
                    </p>
                </div>
            </div>

            <div class="md:basis-1/3 bg-gray-100 rounded-xl p-4 dark:bg-gray-800 ">
                
            </div>
        </div>


    </div>
   
</x-app-layout>

<!-- Modal. Delete -->
<div
  data-te-modal-init
  class="fixed left-0 top-0 z-[1055] hidden h-full w-full overflow-y-auto overflow-x-hidden outline-none"
  id="deleteClientModal"
  tabindex="-1"
  aria-labelledby="deleteClientModalLabel"
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
          Usuwanie klienta
        </h5>
        
      </div>

      <!--Modal body-->
      <div class="relative flex-auto p-4" data-te-modal-body-ref>
        Czy na pewno usunąć dane klienta?
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
        <form action="{{ route('clients.destroy') }}" method="POST">
            <input type="hidden" id="deleteRowModalId" name="id" value="{{$client->id}}" />
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
