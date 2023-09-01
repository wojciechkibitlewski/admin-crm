<x-guest-layout>
    <x-authentication-card>
        <h1 class="text-3xl font-bold text-center mb-8">{{__('auth.confirm_pass_h1')}}</h1>


        <div class="mb-4 text-sm text-gray-600 dark:text-gray-400">
            {{ __('auth.confirm_pass_p1') }}
        </div>

        <x-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('password.confirm') }}">
            @csrf

            <div>
                <x-label for="password" value="{{ __('auth.password') }}" />
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" autofocus />
            </div>

            
            <x-button class="">
                    {{ __('auth.confirm') }}
            </x-button>
        </form>
    </x-authentication-card>
</x-guest-layout>
