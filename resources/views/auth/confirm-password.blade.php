<x-guest-layout>
    <x-authentication-card>
        <h1 class="text-3xl font-bold text-center mb-8">Confirm password</h1>


        <div class="mb-4 text-sm text-gray-600 dark:text-gray-400">
            {{ __('This is a secure area of the application. Please confirm your password before continuing.') }}
        </div>

        <x-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('password.confirm') }}">
            @csrf

            <div>
                <x-label for="password" value="{{ __('Password') }}" />
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" autofocus />
            </div>

            
            <x-button class="">
                    {{ __('Confirm') }}
            </x-button>
        </form>
    </x-authentication-card>
</x-guest-layout>
