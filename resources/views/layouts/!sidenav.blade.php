<!-- Sidenav -->
<x-a-sidenav 
id="sidenav-1"
data-te-sidenav-init
data-te-sidenav-hidden="false"
data-te-sidenav-mode="side"
data-te-sidenav-content="#content"
>
    <div class="bg-white dark:bg-black h-full">
        @include('layouts.logo')
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
                        @include('layouts.nav.link-clients-currentMonth')
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

            <li class="relative mb-2">
                @include('layouts.nav.link-settings')
                <ul class="!visible relative m-0 hidden list-none p-0 data-[te-collapse-show]:block "
                data-te-sidenav-collapse-ref>
                    <li class="relative">
                        @include('layouts.nav.link-settings-index')
                    </li>
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
            <li class="relative mb-2" >
                @include('layouts.nav.link-reports')         
            </li>
        </ul>



    </div>
    
</x-a-sidenav >
<!-- Sidenav -->