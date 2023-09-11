<x-app-layout>
    <x-a-header style="z-index:1;">
        <div></div>
        <div class="flex items-center">
            <x-a-title-header title="{{__('calendar.calendar_schelude')}}" />
        </div>
    </x-a-header>    

    <div class="relative mx-2 pb-10">
    @include('includes.message')
    <div class="p-4">
        @livewire('calendar.schelude') 
    </div>

    <!-- add button  -->
    <div 
    class="relative z-[11] sticky bottom-[50px] ml-[70%] md:ml-[80%] lg:ml-[86%] xl:ml-[92%] "
    data-te-dropdown-position="dropstart"
    >
        <button
        type="button"
        id="dropdownMenuButton1s"
        data-te-dropdown-toggle-ref
        aria-expanded="false"
        data-te-ripple-init
        data-te-ripple-color="light"
        class="w-20 h-20 p-2 rounded-full bg-amber-500 text-center text-white font-black">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-18 h-18">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
            </svg>
        </button>       

        <ul
        class="absolute z-[1000] float-left m-0 hidden min-w-max list-none overflow-hidden rounded-lg border-none bg-white bg-clip-padding text-left text-base shadow-lg dark:bg-neutral-700 [&[data-te-dropdown-show]]:block"
        aria-labelledby="dropdownMenuButton1s"
        data-te-dropdown-menu-ref>
        <li>
        <a
            class="block w-full whitespace-nowrap bg-transparent px-4 py-2 text-sm font-normal text-neutral-700 hover:bg-neutral-100 active:text-neutral-800 active:no-underline disabled:pointer-events-none disabled:bg-transparent disabled:text-neutral-400 dark:text-neutral-200 dark:hover:bg-neutral-600"
            href="{{route('leads.create')}}"
            data-te-dropdown-item-ref
            >{{__('calendar.add_leads')}}</a
        >
        </li>
        <li>
        <a
            class="block w-full whitespace-nowrap bg-transparent px-4 py-2 text-sm font-normal text-neutral-700 hover:bg-neutral-100 active:text-neutral-800 active:no-underline disabled:pointer-events-none disabled:bg-transparent disabled:text-neutral-400 dark:text-neutral-200 dark:hover:bg-neutral-600"
            href="{{route('todo')}}"
            data-te-dropdown-item-ref
            >{{__('calendar.add_todo')}}</a
        >
        </li>
        
    </ul>
    </div>

</x-app-layout>

<script>
   window.onscroll = function(ev) {
        console.log((window.innerHeight + window.scrollY)+':::'+document.body.offsetHeight)
        if ((window.innerHeight + window.scrollY) >= document.body.offsetHeight - 50) {
            //console.log('true')
            window.livewire.emit('nextMonth');
        }
        if ((window.innerHeight + window.scrollY) <= 850) {
            //console.log('true')
            window.livewire.emit('prevMonth');
        }
        
    };
</script>