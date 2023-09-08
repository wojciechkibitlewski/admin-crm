<div>
    <div class="mb-4">
        <label for="name" class="">{{__('leads.client_name')}}<span class="text-red-600"> (*)</label>
        <input id="name" type="text" 
        class="block mt-2 w-full border-gray-300 rounded-md
        dark:text-black" 
        name="client_name" value="{{ !empty($clientDetails) ? $clientDetails->name : old('client_name') }}"  
        wire:model="search" wire:keyup="searchResult"
        required />

        @if($showresult)
        <ul class="w-full bg-white border rounded" >
            @if(!empty($records))
                @foreach($records as $record)
                <li class="p-4 cursor-pointer" wire:click="fetchClientDetail({{ $record->id }})">{{ $record->name}}</li>
                @endforeach
            @endif
        </ul>
        @endif
        <div class="clear"></div>
        @error('client_name')
            <div class="mt-2 p-2 rounded bg-red-400">{{ $message }}</div>
        @enderror   
    </div>
    <!--mail -->   
    <div class="mb-4">
        <label for="email" class="">{{__('leads.client_email')}}</label>
        <input type="hidden" name="client_id" value="{{ !empty($clientDetails) ? $clientDetails->id : old('client_id') }}" />

        <input id="email" type="email" 
        class="block mt-2 w-full border-gray-300 rounded-md dark:text-black" 
        name="client_email" value="{{ !empty($clientDetails) ? $clientDetails->email : old('client_email') }}" 
        autocomplete="email" />
        @error('client_name')
            <div class="mt-2 p-2 rounded bg-red-400">{{ $message }}</div>
        @enderror  
    </div>

    <!--phone -->
    <div class="mb-4">
        <label for="phone" class="">{{__('leads.client_phone')}}</label>
        <input id="phone" type="text" 
        class="block mt-2 w-full border-gray-300 rounded-md dark:text-black" 
        name="client_phone" value="{{ !empty($clientDetails) ? $clientDetails->phone : old('client_phone') }}" 
        autocomplete="phone" />
        @error('client_phone')
            <div class="mt-2 p-2 rounded bg-red-400">{{ $message }}</div>
        @enderror  
    </div>
    <!--social -->
    <div class="mb-4">
        <label for="social" class="">{{__('leads.client_social')}}</label>
        <input id="social" type="text" 
        class="block mt-2 w-full border-gray-300 rounded-md dark:text-black" 
        name="client_social" value="{{ !empty($clientDetails) ? $clientDetails->social : old('client_social') }}" 
        autocomplete="social" />
        @error('client_social')
            <div class="mt-2 p-2 rounded bg-red-400">{{ $message }}</div>
        @enderror  
    </div>
    <!--firm -->
    <div class="mb-4">
        <label for="firm" class="">{{__('leads.client_firm')}}</label>
        <input id="firm" type="text" 
        class="block mt-2 w-full border-gray-300 rounded-md dark:text-black" 
        name="client_firm" value="{{ !empty($clientDetails) ? $clientDetails->firm : old('client_firm') }}" 
        autocomplete="firm" />
        @error('client_firm')
            <div class="mt-2 p-2 rounded bg-red-400">{{ $message }}</div>
        @enderror 
    </div>
    <!--note -->
    <div class="mb-4">
        <label for="note" class="">{{__('leads.client_note')}}</label>
        <textarea id="note" class="block mt-1 rounded-md w-full border-gray-300" rows="13"
        name="client_note">{{ !empty($clientDetails) ? $clientDetails->note : old('client_note') }}</textarea>
        @error('client_note')
            <div class="mt-2 p-2 rounded bg-red-400">{{ $message }}</div>
        @enderror 
    </div>
    
    
</div>