<!-- Sidenav -->
<nav
  id="sidenav-2"
  class="hidden md:block fixed left-0 z-[1035] h-screen w-96 -translate-x-full overflow-hidden bg-white 
  shadow-[0_4px_12px_0_rgba(0,0,0,0.07),_0_2px_4px_rgba(0,0,0,0.05)] 
  data-[te-sidenav-hidden='false']:translate-x-0 
  dark:bg-gray-900 dark:text-gray-200"
  data-te-sidenav-init
  data-te-sidenav-hidden="true"
  data-te-sidenav-mode="side"
  data-te-sidenav-content="#content">

    <div class="h-full pt-6">
        <ul class="relative overflow-y-auto overflow-x-hidden p-4 py-0 z-[9]" data-te-sidenav-menu-ref>
            <li class="relative mb-2" >
                @include('layouts.nav.link-dashboard')         
            </li>
            <li class="relative mb-2">
                @include('layouts.nav.link-sales')  
                <ul class="!visible relative m-0 hidden list-none p-0 data-[te-collapse-show]:block "
                data-te-sidenav-collapse-ref>
                    <li class="relative">
                        @include('layouts.nav.link-sales-index')
                    </li>
                    <li class="relative">
                        @include('layouts.nav.link-sales-currentMonth')
                    </li>
                    <li class="relative">
                        @include('layouts.nav.link-sales-create')
                    </li>
                </ul>
            </li>

            <li class="relative mb-2">
                 @include('layouts.nav.link-clients')
                <ul class="!visible relative m-0 hidden list-none p-0 data-[te-collapse-show]:block "
                data-te-sidenav-collapse-ref>
                    <li class="relative">
                        @include('layouts.nav.link-clients-index')
                    </li>
                    
                    <li class="relative">
                        @include('layouts.nav.link-clients-create')
                    </li>
                </ul>
            </li>
            <li class="relative mb-2">
                @include('layouts.nav.link-products')
                <ul class="!visible relative m-0 hidden list-none p-0 data-[te-collapse-show]:block "
                data-te-sidenav-collapse-ref>
                    <li class="relative">
                        @include('layouts.nav.link-products-index')
                    </li>
                    <li class="relative">
                        @include('layouts.nav.link-products-create')
                    </li>
                </ul>
            </li>
            
            <li class="relative mb-2" >
                @include('layouts.nav.link-todo')         
            </li>
            <li class="relative mb-2">
                @include('layouts.nav.link-calendar')
                <ul class="!visible relative m-0 hidden list-none p-0 data-[te-collapse-show]:block "
                data-te-sidenav-collapse-ref>
                    
                    <li class="relative">
                        @include('layouts.nav.link-calendar-timetable')
                    </li>
                   
                </ul>
            </li>
            <li class="relative mb-2" >
                @include('layouts.nav.link-reports')         
            </li>
            <li class="relative mb-2">
                @include('layouts.nav.link-settings')
                <ul class="!visible relative m-0 hidden list-none p-0 data-[te-collapse-show]:block "
                data-te-sidenav-collapse-ref>
                    
                    <li class="relative">
                        @include('layouts.nav.link-settings-sources')
                    </li>
                    <li class="relative">
                        @include('layouts.nav.link-settings-types')
                    </li>
                    <li class="relative">
                        @include('layouts.nav.link-settings-categories')
                    </li>
                </ul>
            </li>
        </ul>



    </div>
    
</nav>
<!-- Sidenav -->