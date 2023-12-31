<div
  data-te-modal-init
  class="fixed left-0 top-0 z-[1055] hidden h-full w-full overflow-y-auto overflow-x-hidden outline-none"
  id="addDateModal"
  tabindex="-1"
  aria-labelledby="addDateModalLabel"
  aria-hidden="true">
  <form method="POST" action="{{ route('leads.update') }}">
    <input type="hidden" name="lead_id" value="{{$lead->id}}" />
    <input type="hidden" name="_method" value="PATCH">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
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
          {{__('leads.add_date')}}
        </h5>
        <!--Close button-->
        <button
          type="button"
          class="box-content rounded-none border-none hover:no-underline hover:opacity-75 focus:opacity-100 focus:shadow-none focus:outline-none"
          data-te-modal-dismiss
          aria-label="Close">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            fill="none"
            viewBox="0 0 24 24"
            stroke-width="1.5"
            stroke="currentColor"
            class="h-6 w-6">
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              d="M6 18L18 6M6 6l12 12" />
          </svg>
        </button>
      </div>

      <!--Modal body-->
      <div class="relative flex-auto p-4" data-te-modal-body-ref>
        <!-- -->
        <div class="flex flex-row mb-4">
            <div class="w-[50%] mr-4">
                <label for="executionDate" class="block mb-2 w-full">{{__('leads.date')}}<span class="text-red-600"> (*)</span></label>
                <input id="title" type="date" 
                class="block mt-2 w-full border-gray-300 rounded-md dark:text-black" 
                name="executionDate" value="{{$lead->executionDate}}" 
                autocomplete="executionDate" /> 
                @error('executionDate')
                    <div class="mt-2 p-2 rounded bg-red-400">{{ $message }}</div>
                @enderror               
            </div>
            <div class="relative w-[50%] mr-4" 
            id="time"
            data-te-format24="true"
            >
                <label for="executionTime" class="block mb-2 w-full">{{__('leads.time')}}</label>
                <input type="text"
                class="peer block mt-1 w-full rounded-md bg-transparent 
                pt-2 bg-white border-gray-300
                outline-none transition-all duration-200 ease-linear 
                focus:placeholder:opacity-100 peer-focus:text-primary 
                data-[te-input-state-active]:placeholder:opacity-100 
                motion-reduce:transition-none 
                dark:text-black dark:placeholder:text-black dark:peer-focus:text-black [&:not([data-te-input-placeholder-active])]:placeholder:opacity-100"
                id="executionTime" 
                name="executionTime" 
                value="{{$lead->executionTime}}" 
                data-te-toggle="timepicker"/>
                @error('executionTime')
                    <div class="mt-2 p-2 rounded bg-red-400">{{ $message }}</div>
                @enderror  
            </div>
            
            

        </div> 

      </div>

      <!--Modal footer-->
      <div
        class="flex flex-shrink-0 flex-wrap items-center justify-end rounded-b-md border-t-2 border-neutral-100 border-opacity-100 p-4 dark:border-opacity-50">
        <button
          type="submit"
          class="inline-block rounded bg-blue-600 px-6 pb-2 pt-2.5 mr-4 text-xs font-medium uppercase leading-normal text-white transition duration-150 ease-in-out hover:bg-primary-accent-100 focus:bg-primary-accent-100 focus:outline-none focus:ring-0 active:bg-primary-accent-200"
          data-te-modal-dismiss
          data-te-ripple-init
          data-te-ripple-color="light">
          {{__('leads.save')}}
        </button>
        <button
          type="button"
          class="inline-block rounded bg-gray-50 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-primary-700 transition duration-150 ease-in-out hover:bg-primary-accent-100 focus:bg-primary-accent-100 focus:outline-none focus:ring-0 active:bg-primary-accent-200"
          data-te-modal-dismiss
          data-te-ripple-init
          data-te-ripple-color="light">
          {{__('leads.cancel')}}
        </button>
        
      </div>
    </div>
  </div>
    </form>
</div>