<div class="md:flex md:flex-row ">
    <div class="md:basis-1/3 p-4 md:border-r md:border-gray-200">
        <h2 class="font-medium text-lg mb-6">{{__('settings.type')}}</h2>
        @include('settings.salestype.includes.table-type')
    </div>
    <div class="md:basis-1/3 p-4 md:border-r md:border-gray-200">
        <h2 class="font-medium text-lg mb-6">{{__('settings.add_type')}}</h2>
        @include('settings.salestype.includes.create-type')
    </div>
    <div class="md:basis-1/3 p-4 ">
    </div>
</div>            