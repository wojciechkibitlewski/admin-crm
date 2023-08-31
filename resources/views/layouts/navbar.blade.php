<div class="sticky top-0
bg-white text-black w-full 
border-b border-black/10 p-4 py-6
dark:bg-black dark:text-white dark:border-white/30
"
id="navbar-center"
data-state-left = "1"
data-state-right = "1"
>
<div class="flex flex-nowrap items-center justify-between">
    <div class="flex flex-nowrap items-center justify-start">
        <button
        type="button"
        id="sidebar-left"
        data-te-sidenav-toggle-ref
        data-te-target="#sidenav-1"
        class="block-inline border-0 bg-transparent px-2.5 text-gray-500 
        hover:no-underline hover:shadow-none focus:no-underline focus:shadow-none focus:outline-none focus:ring-0 
        "
        aria-controls="#sidenav-1"
        aria-haspopup="true">
            <span class="block [&>svg]:h-5 [&>svg]:w-5 [&>svg]:text-black/4 dark:text-white dark:border-white">
                <svg
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 24 24"
                fill="currentColor"
                class="h-5 w-5">
                <path
                    fill-rule="evenodd"
                    d="M3 6.75A.75.75 0 013.75 6h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 6.75zM3 12a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 12zm0 5.25a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75a.75.75 0 01-.75-.75z"
                    clip-rule="evenodd" />
                </svg>
            </span>
        </button>
        <!--breadcrumb-->
        
        

    </div>
    <div class="flex flex-wrap items-center">
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
                class="inline-block h-6 w-6">
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
                class="inline-block h-6 w-6">
                <path fill-rule="evenodd" d="M9.528 1.718a.75.75 0 01.162.819A8.97 8.97 0 009 6a9 9 0 009 9 8.97 8.97 0 003.463-.69.75.75 0 01.981.98 10.503 10.503 0 01-9.694 6.46c-5.799 0-10.5-4.701-10.5-10.5 0-4.368 2.667-8.112 6.46-9.694a.75.75 0 01.818.162z" clip-rule="evenodd" />
                </svg>
            </div>
            </div>
        </a>

        <button 
            type="button"
            id="sidebar-right"
            class="text-gray-400 px-2 dark:text-white"
            data-te-sidenav-toggle-ref
            data-te-target="#sidenav-2"
            aria-controls="#sidenav-2"
            aria-haspopup="true"
            >
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" 
            class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0M3.124 7.5A8.969 8.969 0 015.292 3m13.416 0a8.969 8.969 0 012.168 4.5" />
            </svg>
        </button>
        <div class="relative" data-te-dropdown-ref>
            <a class="text-gray-400 px-2"
                href="#"
                id="dropdownMenuButton2"
                role="button"
                data-te-dropdown-toggle-ref
                aria-expanded="false"
                data-te-ripple-init
                data-te-ripple-color="light">
                    <img class="inline-block h-7 w-7 rounded-full ring-1 ring-white" 
                    src="{{ Auth::user()->profile_photo_url }}" 
                    alt="{{ Auth::user()->name }}"
                    loading="lazy"/>
                <span class="hidden md:inline-block ml-2 ">Witaj {{ Auth::user()->name }} </span>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" 
                class="w-4 h-4 inline ml-2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                </svg>

            </a> 
            <ul
                class="relative z-[10] !top-[2.75rem] w-[10rem] min-w-[250px] !right-0 m-0 mt-2 hidden list-none 
                overflow-hidden p-2 
                rounded-md border-none bg-white bg-clip-padding text-left text-base shadow-md 
                dark:bg-neutral-700 [&[data-te-dropdown-show]]:block"
                aria-labelledby="dropdownMenuButton2"
                data-te-dropdown-menu-ref>
                <!-- Second dropdown menu items -->
                <li>
                    <div class="flex flex-row p-4">
                        <div class=" mr-2">
                            <img class="inline-block h-7 w-7 rounded-full ring-1 ring-white" 
                            src="{{ Auth::user()->profile_photo_url }}" 
                            alt="{{ Auth::user()->name }}"
                            loading="lazy"/>
                        </div>
                        <div class="overflow-hidden">
                            <p>{{ Auth::user()->name }}</p>
                            <p class="text-xs text-gray-400">{{ Auth::user()->email }}</p>
                        </div>
                    </div>
                </li>
                <li><hr class="my-2" /></li>

                <li>
                    <a
                    class="block w-full whitespace-nowrap bg-transparent px-4 py-2 text-sm font-normal text-neutral-700 hover:bg-neutral-100 active:text-neutral-800 active:no-underline disabled:pointer-events-none disabled:bg-transparent disabled:text-neutral-400 dark:text-neutral-200 dark:hover:bg-white/30"
                    href="{{route('profile.show')}}"
                    data-te-dropdown-item-ref
                    >
                        <svg xmlns="http://www.w3.org/2000/svg" 
                        fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6  inline mr-2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                        Profile  
                    </a>
                </li>
                <li>
                    <a
                    class="block w-full whitespace-nowrap bg-transparent px-4 py-2 text-sm font-normal text-neutral-700 hover:bg-neutral-100 active:text-neutral-800 active:no-underline disabled:pointer-events-none disabled:bg-transparent disabled:text-neutral-400 dark:text-neutral-200 dark:hover:bg-white/30"
                    href="#"
                    data-te-dropdown-item-ref
                    >
                        <svg xmlns="http://www.w3.org/2000/svg" 
                        fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 inline mr-2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M7.5 8.25h9m-9 3H12m-9.75 1.51c0 1.6 1.123 2.994 2.707 3.227 1.129.166 2.27.293 3.423.379.35.026.67.21.865.501L12 21l2.755-4.133a1.14 1.14 0 01.865-.501 48.172 48.172 0 003.423-.379c1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0012 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018z" />
                        </svg>
                        Message
                    </a>
                </li>
                <li><hr class="my-2" /></li>
                <li>
                    
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                    <a
                    class="block w-full whitespace-nowrap bg-transparent px-4 py-2 text-sm font-normal text-black hover:bg-neutral-100 active:text-neutral-800 active:no-underline disabled:pointer-events-none disabled:bg-transparent disabled:text-neutral-400 dark:text-neutral-200 dark:hover:bg-white/30"
                    href="{{route('logout')}}"
                    data-te-dropdown-item-ref
                    onclick="event.preventDefault();
                                            this.closest('form').submit();"
                    >
                        <svg xmlns="http://www.w3.org/2000/svg" 
                        fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 inline mr-2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15m3 0l3-3m0 0l-3-3m3 3H9" />
                        </svg>
                        {{ __('Log Out') }}
                    </a>
                    </form>
                </li>
            </ul>
        </div>
        

        
    </div>
</div>
  

    
</div>