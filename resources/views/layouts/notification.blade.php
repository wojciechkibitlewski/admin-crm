<!-- Sidenav -->
<nav
    id="sidenav-2"
    class="fixed right-0 top-0 z-[1035] flex-none
    h-screen w-60 -translate-x-full overflow-hidden bg-white 
    border-l border-black/10
    dark:bg-black dark:text-white dark:border-white/30
    xl:data-[te-sidenav-hidden='false']:translate-x-0"
    data-te-sidenav-init
    data-te-sidenav-hidden="false"
    data-te-sidenav-mode="side"
    data-te-sidenav-mode-breakpoint-over="0"
    data-te-sidenav-mode-breakpoint-side="xl"
    data-te-sidenav-right="true"
    data-te-sidenav-content="#content"

    data-te-sidenav-accordion="true">
    <div class="flex flex-col gap-9 px-6 py-[22px] h-screen overflow-y-auto overflow-x-hidden h-[2000px]">
        <ul
        class="relative m-0 list-none px-[0.2rem]"
        data-te-sidenav-menu-ref>
            <li>{{__('sidenav.notifications')}}</li>
            @livewire('activity')
        
        </ul>
    </div>
</nav>

<!-- Sidenav -->