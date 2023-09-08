<div class="md:flex md:flex-row ">
    <div class="md:basis-1/3 p-4 md:border-r md:border-gray-200">
        <h2 class="font-medium text-lg mb-6">{{__('settings.source')}}</h2>
        @include('settings.salessource.includes.table-source')
    </div>
    <div class="md:basis-1/3 p-4 md:border-r md:border-gray-200">
        <h2 class="font-medium text-lg mb-6">{{__('settings.add_source')}}</h2>
        @include('settings.salessource.includes.create-source')
    </div>
    <div class="md:basis-1/3 p-4 ">
    </div>
</div>            