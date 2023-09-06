
<form action="{{ route('leads.store') }}" method="POST" class="p-4">
@csrf
    <div class="md:flex md:flex-row gap-4">
        <div class="md:basis-2/3">
            @include('leads.includes.create-tabs')

            <div class="w-full bg-gray-200 rounded-xl p-4 dark:bg-gray-800 ">
                <div
                    class="hidden opacity-100 transition-opacity duration-150 ease-linear data-[te-tab-active]:block"
                    id="tabs-home"
                    role="tabpanel"
                    aria-labelledby="tabs-home-tab"
                    data-te-tab-active>
                    <h3 class="font-bold mb-4">Nowe zamówienie</h3>

                    @include('leads.includes.create-form-sales')
                
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

            @include('leads.includes.helps')
        </div>
    </div>
</form>