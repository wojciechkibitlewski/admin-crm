<x-app-layout>
    <div class="p-4 sm:p-7">
        <h1 class="font-bold text-lg ">Nowe zamówienie</h1>
        
        @if ($message = Session::get('success'))
            <div class="bg-sky-100 rounded-xl p-4 dark:bg-sky-800 mb-4">
                <p>{{ $message }}</p>
            </div>
        @endif

        @if ($errors->any())
            <div class="bg-red-100 rounded-xl p-4 dark:bg-red-800 mb-4">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('leads.store') }}" method="POST">
        @csrf
            <div class="md:flex md:flex-row gap-4 mt-4">
                <div class="md:basis-2/3">
                <ul
                    class="mb-5 flex list-none flex-row flex-wrap border-b-0 pl-0"
                    role="tablist"
                    data-te-nav-ref>
                        <li role="presentation">
                            <a
                            href="#tabs-home"
                            class="my-2 block border-x-0 border-b-2 border-t-0 border-transparent px-2 pb-3.5 pt-4 text-xs font-medium uppercase leading-tight text-neutral-500 hover:isolate hover:border-transparent hover:bg-neutral-100 focus:isolate focus:border-transparent data-[te-nav-active]:border-primary data-[te-nav-active]:text-primary dark:text-neutral-400 dark:hover:bg-transparent dark:data-[te-nav-active]:border-primary-400 dark:data-[te-nav-active]:text-primary-400"
                            data-te-toggle="pill"
                            data-te-target="#tabs-home"
                            data-te-nav-active
                            role="tab"
                            aria-controls="tabs-home"
                            aria-selected="true"
                            >Zamówienie</a
                            >
                        </li>
                        <li role="presentation">
                            <a
                            href="#tabs-profile"
                            class="my-2 block border-x-0 border-b-2 border-t-0 border-transparent px-2 pb-3.5 pt-4 text-xs font-medium uppercase leading-tight text-neutral-500 hover:isolate hover:border-transparent hover:bg-neutral-100 focus:isolate focus:border-transparent data-[te-nav-active]:border-primary data-[te-nav-active]:text-primary dark:text-neutral-400 dark:hover:bg-transparent dark:data-[te-nav-active]:border-primary-400 dark:data-[te-nav-active]:text-primary-400"
                            data-te-toggle="pill"
                            data-te-target="#tabs-profile"
                            role="tab"
                            aria-controls="tabs-profile"
                            aria-selected="false"
                            >Wybierz klienta</a
                            >
                        </li>
                        <li role="presentation">
                            <a
                            href="#tabs-messages"
                            class="my-2 block border-x-0 border-b-2 border-t-0 border-transparent px-2 pb-3.5 pt-4 text-xs font-medium uppercase leading-tight text-neutral-500 hover:isolate hover:border-transparent hover:bg-neutral-100 focus:isolate focus:border-transparent data-[te-nav-active]:border-primary data-[te-nav-active]:text-primary dark:text-neutral-400 dark:hover:bg-transparent dark:data-[te-nav-active]:border-primary-400 dark:data-[te-nav-active]:text-primary-400"
                            data-te-toggle="pill"
                            data-te-target="#tabs-messages"
                            role="tab"
                            aria-controls="tabs-messages"
                            aria-selected="false"
                            >Dodaj produkty</a
                            >
                        </li>
                    
                    </ul>        

                    <div class="w-full bg-white rounded-xl p-4 dark:bg-gray-800 ">
                        <div
                            class="hidden opacity-100 transition-opacity duration-150 ease-linear data-[te-tab-active]:block"
                            id="tabs-home"
                            role="tabpanel"
                            aria-labelledby="tabs-home-tab"
                            data-te-tab-active>
                            <h3 class="font-bold mb-4">Nowe zamówienie</h3>
                            @include('leads.tab-add-sales')
                        
                        </div>
                        <div
                            class="hidden opacity-0 transition-opacity duration-150 ease-linear data-[te-tab-active]:block"
                            id="tabs-profile"
                            role="tabpanel"
                            aria-labelledby="tabs-profile-tab">
                            <h3 class="font-bold mb-4">Wybierz klienta</h3>
                            
                            <livewire:search-client />
                            
                        </div>
                        <div
                            class="hidden opacity-0 transition-opacity duration-150 ease-linear data-[te-tab-active]:block"
                            id="tabs-messages"
                            role="tabpanel"
                            aria-labelledby="tabs-profile-tab">
                            <h3 class="font-bold mb-4">Wybierz usługi/produkty</h3>
                            <livewire:search-product />
                        </div>
                    </div>
                </div>
                <div class="md:basis-1/3 pt-[82px]">
                    <!--Submit button-->
                    <button type="submit"
                    class="block w-full rounded-md bg-gray-600 py-4 font-medium text-white">
                        {{ __('Dodaj zamówienie ')}}
                    </button> 

                    @include('leads.helps')
                </div>
            </div>
        </form>
    </div>
</x-app-layout>