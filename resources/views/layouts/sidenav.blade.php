<!-- Sidenav -->
<nav
id="sidenav-1"
class="fixed left-0 top-0 z-[2035] flex-none
h-screen w-60 -translate-x-full overflow-x-hidden bg-white 
border-r border-black/10
dark:bg-black dark:text-white dark:border-white/30
md:data-[te-sidenav-hidden='false']:translate-x-0"
data-te-sidenav-init
data-te-sidenav-hidden="false"
data-te-sidenav-mode="side"
data-te-sidenav-content="#content"
>

    <div class="bg-white dark:bg-black h-full">
        <div class="sticky top-0 flex p-4 bg-white dark:bg-black pb-[58px] z-[10]">
            <a href="{{route('dashboard')}}" class="flex-1 w-full">
            <img src="{{asset('images/logo.png')}}" alt="PhotoCRM" class="block dark:hidden h-6">
            <img src="{{asset('images/dark-logo.png')}}" alt="PhotoCRM" class="hidden dark:block h-6">
            </a>
        </div>
        <ul class="relative overflow-y-auto overflow-x-hidden p-4 py-0 z-[9]" data-te-sidenav-menu-ref>
            <li class="relative mb-2" >
                <a href="{{route('dashboard')}}" class="
                flex flex-nowrap items-center gap-1 p-2 rounded-md text-black dark:text-white   
                hover:bg-gray-100
                dark:hover:bg-gray-800
                " 
                data-te-sidenav-link-ref >
                    <div class="flex items-center">
                        <svg class="w-5 h-5" width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4.20007 18.2C4.06372 17.4747 3.9967 16.738 4.00012 16C3.99854 13.5182 4.76721 11.0972 6.2002 9.07092C7.63318 7.04456 9.65967 5.51306 12.0001 4.6875V13.6875L4.20007 18.2Z" fill="black" fill-opacity="0.1"></path>
                            <path d="M17 16V4C17 3.44772 16.5523 3 16 3C15.4477 3 15 3.44772 15 4V16C15 16.5523 15.4477 17 16 17C16.5523 17 17 16.5523 17 16Z" fill="currentcolor"></path>
                            <path d="M5.11288 21.1336L5.11213 21.1341C4.88247 21.2667 4.71492 21.4852 4.64633 21.7414C4.62374 21.8257 4.6123 21.9127 4.6123 22C4.6123 22.0106 4.61247 22.0212 4.61281 22.0317C4.61804 22.1965 4.66392 22.3574 4.74638 22.5002C4.92504 22.8095 5.25511 23 5.6123 23C5.62784 23 5.64337 22.9996 5.65889 22.9989C5.81854 22.9915 5.97408 22.9459 6.11248 22.8659L6.11323 22.8655L26.8875 10.8659C27.1968 10.6873 27.3873 10.3572 27.3873 10C27.3873 9.98447 27.3869 9.96894 27.3862 9.95342C27.3788 9.79377 27.3332 9.63822 27.2532 9.49983C27.1206 9.27017 26.9021 9.10261 26.6459 9.03402C26.5616 9.01144 26.4746 9 26.3873 9C26.3767 9 26.3662 9.00017 26.3556 9.0005C26.1908 9.00573 26.0299 9.05162 25.8871 9.13407L5.11288 21.1336Z" fill="currentcolor"></path>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M12.5009 14.5531L4.70089 19.0656C4.47132 19.1984 4.1984 19.2346 3.94216 19.1662C3.68592 19.0977 3.46735 18.9303 3.33454 18.7008C3.27789 18.6028 3.23827 18.496 3.21736 18.3849C3.21736 18.3849 2.99459 17.2005 3.00013 15.9954C3.00013 15.9954 2.99749 11.8678 5.38375 8.4935C5.38375 8.4935 7.77001 5.11918 11.6675 3.74445C11.9176 3.65622 12.1925 3.67097 12.4318 3.78545C12.671 3.89992 12.855 4.10475 12.9432 4.35486C12.9809 4.46172 13.0001 4.5742 13.0001 4.6875V13.6875C13.0001 14.0445 12.8099 14.3743 12.5009 14.5531ZM5.01273 16.5746L11.0001 13.1107V6.19572C11.0001 6.19572 8.61014 7.39503 7.01668 9.64828C7.01668 9.64828 4.9979 12.503 5.00011 16.0046C5.00011 16.0046 4.9988 16.2903 5.01273 16.5746Z" fill="currentcolor"></path>
                            <path d="M10.5588 25.5608C8.00169 24.1059 6.51229 21.5688 6.51229 21.5688C6.37802 21.34 6.1584 21.174 5.90173 21.1072C5.8195 21.0858 5.73487 21.075 5.64991 21.075C5.63698 21.075 5.62406 21.0753 5.61115 21.0758C5.44642 21.0821 5.28582 21.1292 5.14365 21.2126C4.83778 21.3922 4.6499 21.7203 4.6499 22.075L4.64991 22.0779C4.65042 22.2549 4.6979 22.4286 4.78752 22.5813C6.54772 25.5797 9.56976 27.2991 9.56976 27.2991C12.5918 29.0186 16.0687 28.9998 16.0687 28.9998C19.5456 28.981 22.5489 27.2291 22.5489 27.2291C25.5522 25.4772 27.2799 22.4599 27.2799 22.4599C29.0077 19.4426 28.9985 15.9657 28.9985 15.9657C28.9893 12.4887 27.2457 9.48061 27.2457 9.48061C25.502 6.47249 22.4895 4.73644 22.4895 4.73644C19.477 3.00039 16 3 16 3C15.9389 3 15.878 3.00558 15.8181 3.01667C15.344 3.10435 15 3.51778 14.9999 3.99989C14.9999 4.01594 15.0003 4.03196 15.0011 4.04792C15.013 4.29624 15.1169 4.53122 15.2927 4.70702C15.4802 4.89458 15.7346 4.99997 15.9998 5H16.0002C18.942 5.00045 21.4909 6.4693 21.4909 6.4693C24.0399 7.93826 25.5153 10.4836 25.5153 10.4836C26.9907 13.0289 26.9985 15.9709 26.9985 15.9709C27.0063 18.913 25.5443 21.4661 25.5443 21.4661C24.0824 24.0191 21.5411 25.5016 21.5411 25.5016C18.9999 26.984 16.0579 26.9998 16.0579 26.9998C13.1159 27.0157 10.5588 25.5608 10.5588 25.5608Z" fill="currentcolor"></path>
                        </svg>
                        <span class="pl-1">Dashboard</span>
                    </div>
                </a>            
            </li>

            <li class="relative mb-2">
                <a class="
                flex flex-nowrap items-center gap-1 p-2 rounded-md text-black 
                hover:bg-gray-100
                dark:text-white dark:hover:bg-gray-800"
                data-te-sidenav-link-ref>
                <span class="">
                    <svg xmlns="http://www.w3.org/2000/svg" 
                    fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 3c2.755 0 5.455.232 8.083.678.533.09.917.556.917 1.096v1.044a2.25 2.25 0 01-.659 1.591l-5.432 5.432a2.25 2.25 0 00-.659 1.591v2.927a2.25 2.25 0 01-1.244 2.013L9.75 21v-6.568a2.25 2.25 0 00-.659-1.591L3.659 7.409A2.25 2.25 0 013 5.818V4.774c0-.54.384-1.006.917-1.096A48.32 48.32 0 0112 3z" />
                    </svg>
                </span>
                <span class="">Zamówienia</span>
                <span class="absolute right-0 ml-auto mr-[0.8rem] transition-transform duration-300 ease-linear motion-reduce:transition-none [&>svg]:text-gray-600 dark:[&>svg]:text-gray-300"
                data-te-sidenav-rotate-icon-ref>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="h-5 w-5">
                    <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                    clip-rule="evenodd" />
                    </svg>
                </span>
                </a>
                <ul class="!visible relative m-0 hidden list-none p-0 data-[te-collapse-show]:block "
                data-te-sidenav-collapse-ref>
                <li class="relative">
                    <a class="flex h-6 cursor-pointer items-center truncate rounded-[5px] py-4 pl-[2rem] pr-6 text-[0.78rem] text-gray-600 outline-none transition duration-300 ease-linear 
                    hover:bg-gray-100 hover:outline-none 
                    focus:bg-gray-100 focus:outline-none
                    {{ request()->is('leads') ? 'bg-gray-100 dark:bg-gray-600':'' }} 
                    active:bg-gray-100 active:outline-none 
                    data-[te-sidenav-state-focus]:outline-none 
                    motion-reduce:transition-none
                    dark:text-white dark:hover:bg-gray-700
                    "
                    href="{{route('leads.index')}}"
                    data-te-sidenav-link-ref>
                    Wszystkie
                    </a>
                </li>
                <li class="relative">
                    <a class="flex h-6 cursor-pointer items-center truncate rounded-[5px] py-4 pl-[2rem] pr-6 text-[0.78rem] text-gray-600 outline-none transition duration-300 ease-linear 
                    hover:bg-gray-100 hover:outline-none 
                    {{ request()->is('leads/currentMonth*') ? 'bg-gray-100 dark:bg-gray-600':'' }} 

                    focus:bg-white/10 focus:outline-none 
                    active:bg-white/10 active:outline-none 
                    data-[te-sidenav-state-focus]:outline-none 
                    motion-reduce:transition-none
                    dark:text-white dark:hover:bg-gray-700
                    "
                    data-te-sidenav-link-ref
                    href="{{route('leads.currentMonth')}}"
                    >
                    Z bieżącego miesiąca
                    </a>
                </li>
                <li class="relative">
                    <a class="flex h-6 cursor-pointer items-center truncate rounded-[5px] py-4 pl-[2rem] pr-6 text-[0.78rem] text-gray-600 outline-none transition duration-300 ease-linear 
                    hover:bg-gray-100 hover:outline-none 
                    {{ request()->is('leads/create*') ? 'bg-gray-100 dark:bg-gray-600':'' }} 

                    focus:bg-white/10 focus:outline-none 
                    active:bg-white/10 active:outline-none 
                    data-[te-sidenav-state-focus]:outline-none 
                    motion-reduce:transition-none
                    dark:text-white dark:hover:bg-gray-700
                    "
                    data-te-sidenav-link-ref
                    href="{{route('leads.create')}}"
                    >
                    Dodaj zamówienie
                    </a>
                </li>
                
                </ul>
            </li>

            <li class="relative mb-2">
                <a class="
                flex flex-nowrap items-center gap-1 p-2 rounded-md text-black 
                hover:bg-gray-100
                dark:text-white dark:hover:bg-gray-800"
                data-te-sidenav-link-ref>
                <span class="">
                    <svg xmlns="http://www.w3.org/2000/svg" 
                    fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z" />
                    </svg>
                </span>
                <span class="">Klienci</span>
                <span class="absolute right-0 ml-auto mr-[0.8rem] transition-transform duration-300 ease-linear motion-reduce:transition-none [&>svg]:text-gray-600 dark:[&>svg]:text-gray-300"
                data-te-sidenav-rotate-icon-ref>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="h-5 w-5">
                    <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                    clip-rule="evenodd" />
                    </svg>
                </span>
                </a>
                <ul class="!visible relative m-0 hidden list-none p-0 data-[te-collapse-show]:block "
                data-te-sidenav-collapse-ref>
                <li class="relative">
                    <a class="flex h-6 cursor-pointer items-center truncate rounded-[5px] py-4 pl-[2rem] pr-6 text-[0.78rem] text-gray-600 outline-none transition duration-300 ease-linear 
                    hover:bg-gray-100 hover:outline-none 
                    focus:bg-white/10 focus:outline-none 
                    active:bg-white/10 active:outline-none 
                    data-[te-sidenav-state-focus]:outline-none 
                    motion-reduce:transition-none
                    dark:text-white dark:hover:bg-gray-700
                    "
                    href="{{route('clients.index')}}" title="Lista klientów"
                    data-te-sidenav-link-ref>
                    Wszyscy
                    </a>
                </li>
                <li class="relative">
                    <a class="flex h-6 cursor-pointer items-center truncate rounded-[5px] py-4 pl-[2rem] pr-6 text-[0.78rem] text-gray-600 outline-none transition duration-300 ease-linear 
                    hover:bg-gray-100 hover:outline-none 
                    focus:bg-white/10 focus:outline-none 
                    active:bg-white/10 active:outline-none 
                    data-[te-sidenav-state-focus]:outline-none 
                    motion-reduce:transition-none
                    dark:text-white dark:hover:bg-gray-700
                    "
                    href="{{route('clients.currentMonth')}}" title="Klienci z bieżącego miesiąca"
                    data-te-sidenav-link-ref>
                    Z bieżącego miesiąca
                    </a>
                </li>
                <li class="relative">
                    <a class="flex h-6 cursor-pointer items-center truncate rounded-[5px] py-4 pl-[2rem] pr-6 text-[0.78rem] text-gray-600 outline-none transition duration-300 ease-linear 
                    hover:bg-gray-100 hover:outline-none 
                    focus:bg-white/10 focus:outline-none 
                    active:bg-white/10 active:outline-none 
                    data-[te-sidenav-state-focus]:outline-none 
                    motion-reduce:transition-none
                    dark:text-white dark:hover:bg-gray-700
                    "
                    href="{{route('clients.create')}}" title="Dodaj Klienta"
                    data-te-sidenav-link-ref>
                    Dodaj Klienta
                    </a>
                </li>
                </ul>
            </li>
            <li class="relative mb-2">
                <a class="
                flex flex-nowrap items-center gap-1 p-2 rounded-md text-black 
                hover:bg-gray-100
                dark:text-white dark:hover:bg-gray-800"
                data-te-sidenav-link-ref>
                <span class="">
                    <svg xmlns="http://www.w3.org/2000/svg" 
                    fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 12a2.25 2.25 0 00-2.25-2.25H15a3 3 0 11-6 0H5.25A2.25 2.25 0 003 12m18 0v6a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 18v-6m18 0V9M3 12V9m18 0a2.25 2.25 0 00-2.25-2.25H5.25A2.25 2.25 0 003 9m18 0V6a2.25 2.25 0 00-2.25-2.25H5.25A2.25 2.25 0 003 6v3" />
                    </svg>
                </span>
                <span class="">Usługi / Produkty</span>
                <span class="absolute right-0 ml-auto mr-[0.8rem] transition-transform duration-300 ease-linear motion-reduce:transition-none [&>svg]:text-gray-600 dark:[&>svg]:text-gray-300"
                data-te-sidenav-rotate-icon-ref>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="h-5 w-5">
                    <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                    clip-rule="evenodd" />
                    </svg>
                </span>
                </a>
                <ul class="!visible relative m-0 hidden list-none p-0 data-[te-collapse-show]:block "
                data-te-sidenav-collapse-ref>
                <li class="relative">
                    <a class="flex h-6 cursor-pointer items-center truncate rounded-[5px] py-4 pl-[2rem] pr-6 text-[0.78rem] text-gray-600 outline-none transition duration-300 ease-linear 
                    hover:bg-gray-100 hover:outline-none 
                    focus:bg-white/10 focus:outline-none 
                    active:bg-white/10 active:outline-none 
                    data-[te-sidenav-state-focus]:outline-none 
                    motion-reduce:transition-none
                    dark:text-white dark:hover:bg-gray-700
                    "
                    href="{{route('products.index')}}" title="Usługi / produkty"
                    data-te-sidenav-link-ref>
                    Wszystkie
                    </a>
                </li>
                
                <li class="relative">
                    <a class="flex h-6 cursor-pointer items-center truncate rounded-[5px] py-4 pl-[2rem] pr-6 text-[0.78rem] text-gray-600 outline-none transition duration-300 ease-linear 
                    hover:bg-gray-100 hover:outline-none 
                    focus:bg-white/10 focus:outline-none 
                    active:bg-white/10 active:outline-none 
                    data-[te-sidenav-state-focus]:outline-none 
                    motion-reduce:transition-none
                    dark:text-white dark:hover:bg-gray-700
                    "
                    href="{{route('products.create')}}" title=""
                    data-te-sidenav-link-ref>
                    Dodaj usługę / produkt
                    </a>
                </li>
                </ul>
            </li>
<!-- 
            <li class="relative mb-2">
                <a class="
                flex flex-nowrap items-center gap-1 p-2 rounded-md text-black 
                hover:bg-gray-100
                dark:text-white dark:hover:bg-gray-800"
                data-te-sidenav-link-ref>
                <span class="">
                <svg xmlns="http://www.w3.org/2000/svg" 
                    fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
                    </svg>
                </span>
                <span class="">Wiadomości</span>
                <span class="absolute right-0 ml-auto mr-[0.8rem] transition-transform duration-300 ease-linear motion-reduce:transition-none [&>svg]:text-gray-600 dark:[&>svg]:text-gray-300"
                data-te-sidenav-rotate-icon-ref>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="h-5 w-5">
                    <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                    clip-rule="evenodd" />
                    </svg>
                </span>
                </a>
                <ul class="!visible relative m-0 hidden list-none p-0 data-[te-collapse-show]:block "
                data-te-sidenav-collapse-ref>
                <li class="relative">
                    <a class="flex h-6 cursor-pointer items-center truncate rounded-[5px] py-4 pl-[2rem] pr-6 text-[0.78rem] text-gray-600 outline-none transition duration-300 ease-linear 
                    hover:bg-gray-100 hover:outline-none 
                    focus:bg-white/10 focus:outline-none 
                    active:bg-white/10 active:outline-none 
                    data-[te-sidenav-state-focus]:outline-none 
                    motion-reduce:transition-none
                    dark:text-white dark:hover:bg-gray-700
                    "
                    data-te-sidenav-link-ref>
                    Wyślij wiadomość
                    </a>
                </li>
                
                <li class="relative">
                    <a class="flex h-6 cursor-pointer items-center truncate rounded-[5px] py-4 pl-[2rem] pr-6 text-[0.78rem] text-gray-600 outline-none transition duration-300 ease-linear 
                    hover:bg-gray-100 hover:outline-none 
                    focus:bg-white/10 focus:outline-none 
                    active:bg-white/10 active:outline-none 
                    data-[te-sidenav-state-focus]:outline-none 
                    motion-reduce:transition-none
                    dark:text-white dark:hover:bg-gray-700
                    "
                    data-te-sidenav-link-ref>
                    Otrzymane
                    </a>
                </li>
                <li class="relative">
                    <a class="flex h-6 cursor-pointer items-center truncate rounded-[5px] py-4 pl-[2rem] pr-6 text-[0.78rem] text-gray-600 outline-none transition duration-300 ease-linear 
                    hover:bg-gray-100 hover:outline-none 
                    focus:bg-white/10 focus:outline-none 
                    active:bg-white/10 active:outline-none 
                    data-[te-sidenav-state-focus]:outline-none 
                    motion-reduce:transition-none
                    dark:text-white dark:hover:bg-gray-700
                    "
                    data-te-sidenav-link-ref>
                    Wysłane
                    </a>
                </li>
                </ul>
            </li>
             -->
            <li class="relative mb-2">
                <a class="
                flex flex-nowrap items-center gap-1 p-2 rounded-md text-black 
                hover:bg-gray-100
                dark:text-white dark:hover:bg-gray-800"
                data-te-sidenav-link-ref>
                <span class="">
                    <svg xmlns="http://www.w3.org/2000/svg" 
                    fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9.594 3.94c.09-.542.56-.94 1.11-.94h2.593c.55 0 1.02.398 1.11.94l.213 1.281c.063.374.313.686.645.87.074.04.147.083.22.127.324.196.72.257 1.075.124l1.217-.456a1.125 1.125 0 011.37.49l1.296 2.247a1.125 1.125 0 01-.26 1.431l-1.003.827c-.293.24-.438.613-.431.992a6.759 6.759 0 010 .255c-.007.378.138.75.43.99l1.005.828c.424.35.534.954.26 1.43l-1.298 2.247a1.125 1.125 0 01-1.369.491l-1.217-.456c-.355-.133-.75-.072-1.076.124a6.57 6.57 0 01-.22.128c-.331.183-.581.495-.644.869l-.213 1.28c-.09.543-.56.941-1.11.941h-2.594c-.55 0-1.02-.398-1.11-.94l-.213-1.281c-.062-.374-.312-.686-.644-.87a6.52 6.52 0 01-.22-.127c-.325-.196-.72-.257-1.076-.124l-1.217.456a1.125 1.125 0 01-1.369-.49l-1.297-2.247a1.125 1.125 0 01.26-1.431l1.004-.827c.292-.24.437-.613.43-.992a6.932 6.932 0 010-.255c.007-.378-.138-.75-.43-.99l-1.004-.828a1.125 1.125 0 01-.26-1.43l1.297-2.247a1.125 1.125 0 011.37-.491l1.216.456c.356.133.751.072 1.076-.124.072-.044.146-.087.22-.128.332-.183.582-.495.644-.869l.214-1.281z" />
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
                </span>
                <span class="">Ustawienia</span>
                <span class="absolute right-0 ml-auto mr-[0.8rem] transition-transform duration-300 ease-linear motion-reduce:transition-none [&>svg]:text-gray-600 dark:[&>svg]:text-gray-300"
                data-te-sidenav-rotate-icon-ref>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="h-5 w-5">
                    <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                    clip-rule="evenodd" />
                    </svg>
                </span>
                </a>
                <ul class="!visible relative m-0 hidden list-none p-0 data-[te-collapse-show]:block "
                data-te-sidenav-collapse-ref>
                <li class="relative">
                    <a class="flex h-6 cursor-pointer items-center truncate rounded-[5px] py-4 pl-[2rem] pr-6 text-[0.78rem] text-gray-600 outline-none transition duration-300 ease-linear 
                    hover:bg-gray-100 hover:outline-none 
                    focus:bg-white/10 focus:outline-none 
                    active:bg-white/10 active:outline-none 
                    data-[te-sidenav-state-focus]:outline-none 
                    motion-reduce:transition-none
                    dark:text-white dark:hover:bg-gray-700
                    "
                    href="{{route('settings')}}" title="{{__('Wszystkie')}}"
                    data-te-sidenav-link-ref>
                    {{__('Wszystkie')}}
                    </a>
                </li>
                <li class="relative">
                    <a class="flex h-6 cursor-pointer items-center truncate rounded-[5px] py-4 pl-[2rem] pr-6 text-[0.78rem] text-gray-600 outline-none transition duration-300 ease-linear 
                    hover:bg-gray-100 hover:outline-none 
                    focus:bg-white/10 focus:outline-none 
                    active:bg-white/10 active:outline-none 
                    data-[te-sidenav-state-focus]:outline-none 
                    motion-reduce:transition-none
                    dark:text-white dark:hover:bg-gray-700
                    "
                    href="{{route('settings.salessource.index')}}" title="Źródła klientów"
                    data-te-sidenav-link-ref>
                    Źródła klientów
                    </a>
                </li>
                
                <li class="relative">
                    <a class="flex h-6 cursor-pointer items-center truncate rounded-[5px] py-4 pl-[2rem] pr-6 text-[0.78rem] text-gray-600 outline-none transition duration-300 ease-linear 
                    hover:bg-gray-100 hover:outline-none 
                    focus:bg-white/10 focus:outline-none 
                    active:bg-white/10 active:outline-none 
                    data-[te-sidenav-state-focus]:outline-none 
                    motion-reduce:transition-none
                    dark:text-white dark:hover:bg-gray-700
                    "
                    href="{{route('settings.salestype.index')}}" title="Stany realizacji zamowienia"
                    data-te-sidenav-link-ref>
                    Stany realizacji zamowienia
                    </a>
                </li>
                <li class="relative">
                    <a class="flex h-6 cursor-pointer items-center truncate rounded-[5px] py-4 pl-[2rem] pr-6 text-[0.78rem] text-gray-600 outline-none transition duration-300 ease-linear 
                    hover:bg-gray-100 hover:outline-none 
                    focus:bg-white/10 focus:outline-none 
                    active:bg-white/10 active:outline-none 
                    data-[te-sidenav-state-focus]:outline-none 
                    motion-reduce:transition-none
                    dark:text-white dark:hover:bg-gray-700
                    "
                    href="{{route('settings.productcategory.index')}}" title="Kategorie usług / produktów"
                    data-te-sidenav-link-ref>
                    Kategorie usług / produktów
                    </a>
                </li>
<!--                 
                <li class="relative">
                    <a class="flex h-6 cursor-pointer items-center truncate rounded-[5px] py-4 pl-[2rem] pr-6 text-[0.78rem] text-gray-600 outline-none transition duration-300 ease-linear 
                    hover:bg-gray-100 hover:outline-none 
                    focus:bg-white/10 focus:outline-none 
                    active:bg-white/10 active:outline-none 
                    data-[te-sidenav-state-focus]:outline-none 
                    motion-reduce:transition-none
                    dark:text-white dark:hover:bg-gray-700
                    "
                    data-te-sidenav-link-ref>
                    Szablony wiadomości
                    </a>
                </li>
                 -->
                </ul>
            </li>
        </ul>



    </div>
    

</nav>
<!-- Sidenav -->