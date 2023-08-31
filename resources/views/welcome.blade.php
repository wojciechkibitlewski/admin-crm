<x-guest-layout>
    <div class="w-full flex flex-nowrap items-center justify-between">
        <div class="p-4 dark:bg-black">
            <a href="{{route('welcome')}}" class="flex-1 w-full">
            <img src="{{asset('images/logo.png')}}" alt="PhotoCRM" class="block dark:hidden h-5">
            <img src="{{asset('images/dark-logo.png')}}" alt="PhotoCRM" class="hidden dark:block h-5">
            </a>
        </div>

        <div class="flex flex-wrap items-center pr-6">
            <!-- dark / ligrt mode  -->
        
            <a id="theme-switcher"
                class="px-2 py-2 text-sm font-normal text-gray-700 
                invisible
                disabled:pointer-events-none disabled:bg-transparent disabled:text-gray-400 
                dark:text-gray-100 dark:visible" 
                href="#"
                data-theme="light">
                <div class="pointer-events-none">
                <div class="inline-block w-[24px] text-center"
                    data-theme-icon="light">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                    fill="currentColor"
                    class="inline-block h-5 w-5">
                    <path d="M12 2.25a.75.75 0 01.75.75v2.25a.75.75 0 01-1.5 0V3a.75.75 0 01.75-.75zM7.5 12a4.5 4.5 0 119 0 4.5 4.5 0 01-9 0zM18.894 6.166a.75.75 0 00-1.06-1.06l-1.591 1.59a.75.75 0 101.06 1.061l1.591-1.59zM21.75 12a.75.75 0 01-.75.75h-2.25a.75.75 0 010-1.5H21a.75.75 0 01.75.75zM17.834 18.894a.75.75 0 001.06-1.06l-1.59-1.591a.75.75 0 10-1.061 1.06l1.59 1.591zM12 18a.75.75 0 01.75.75V21a.75.75 0 01-1.5 0v-2.25A.75.75 0 0112 18zM7.758 17.303a.75.75 0 00-1.061-1.06l-1.591 1.59a.75.75 0 001.06 1.061l1.591-1.59zM6 12a.75.75 0 01-.75.75H3a.75.75 0 010-1.5h2.25A.75.75 0 016 12zM6.697 7.757a.75.75 0 001.06-1.06l-1.59-1.591a.75.75 0 00-1.061 1.06l1.59 1.591z" />
                    </svg>
                </div>
                </div>
            </a>
            <a id="theme-switcher"
                class="px-2 py-2 text-sm font-normal text-gray-700 
                disabled:pointer-events-none disabled:bg-transparent disabled:text-gray-400 
                dark:text-gray-100 dark:hidden "
                href="#"
                data-theme="dark"
                data-te-dropdown-item-ref>
                <div class="pointer-events-none">
                <div class="inline-block w-[24px] text-center"
                    data-theme-icon="dark">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                    class="inline-block h-5 w-5">
                    <path fill-rule="evenodd" d="M9.528 1.718a.75.75 0 01.162.819A8.97 8.97 0 009 6a9 9 0 009 9 8.97 8.97 0 003.463-.69.75.75 0 01.981.98 10.503 10.503 0 01-9.694 6.46c-5.799 0-10.5-4.701-10.5-10.5 0-4.368 2.667-8.112 6.46-9.694a.75.75 0 01.818.162z" clip-rule="evenodd" />
                    </svg>
                </div>
                </div>
            </a>

            <a href="" title="" class="p-1 px-3">Sign in</a>
            <a href="" title="" class="p-1 px-3 border border-gray-300 rounded">Login</a>

        </div>

    </div>      
    
    
    <h1 class="font-bold text-lg">Dashboard</h1>

</x-guest-layout>