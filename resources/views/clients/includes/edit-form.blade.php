<div class="md:flex md:flex-row gap-4 mt-4">
            
    <div class="md:basis-2/3 p-4 mb-6">
        
        <div>
        <form action="{{ route('clients.update') }}" method="POST" >
            @csrf
            <input type="hidden" name="id" value="{{ $client->id }}" />
            <input type="hidden" name="_method" value="PATCH">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">

                
            <div class="w-full mb-4 ">
                <label for="name" class="">{{__('clients.name')}}<span class="text-red-600"> (*)</span></label>
                <input id="name" type="text" 
                class="block mt-2 w-full border-gray-300 rounded-md
                dark:text-black" 
                name="name" value="{{$client->name}}" 
                required autofocus autocomplete="name" />
            </div> 
            <div class="w-full mb-4 ">
                <label for="email" class="">{{__('clients.mail')}}</label>
                <input id="email" type="email" 
                class="block mt-2 w-full border-gray-300 rounded-md
                dark:text-black" 
                name="email" value="{{$client->email}}" 
                autocomplete="email" />
            </div> 
            <div class="w-full mb-4 ">
                <label for="phone" class="">{{__('clients.phone')}}</label>
                <input id="phone" type="text" 
                class="block mt-2 w-full border-gray-300 rounded-md
                dark:text-black" 
                name="phone" value="{{$client->phone}}" 
                autocomplete="phone" />
            </div> 
            <div class="w-full mb-4 ">
                <label for="social" class="">{{__('clients.social')}}</label>
                <input id="social" type="text" 
                class="block mt-2 w-full border-gray-300 rounded-md
                dark:text-black" 
                name="social" value="{{$client->social}}" 
                autocomplete="social" />
            </div> 
            <div class="w-full mb-4 ">
                <label for="firm" class="">{{__('clients.firm')}}</label>
                <input id="firm" type="text" 
                class="block mt-2 w-full border-gray-300 rounded-md
                dark:text-black" 
                name="firm" value="{{$client->firm}}" 
                autocomplete="firm" />
            </div> 

            <div class="mb-4">
                <label for="note" class="">{{__('clients.note')}}</label>
                <textarea id="note" class="block mt-1 rounded-md w-full border-gray-300" rows="13"
                name="note">{{$client->note}}</textarea>
            </div>
            
            <!--Submit button-->
            <button
            type="submit"
            class="block w-full rounded-md bg-gray-600 py-4 font-medium text-white">
            {{__('clients.edit')}}
            </button>
        </form>
        </div>
    </div>

    <div class="md:basis-1/3 bg-gray-100 rounded-xl p-4 dark:bg-gray-800 ">
        
    </div>
</div>