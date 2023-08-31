<x-guest-layout>
    <x-authentication-card>
        <h1 class="text-3xl font-bold text-center mb-8">Forgot your password?</h1>


        <div class="mb-4 text-sm text-gray-600 dark:text-gray-400">
            {{ __('No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
        </div>

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600 dark:text-green-400">
                {{ session('status') }}
            </div>
        @endif

        <x-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <div class="block">
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            </div>

            
            <x-button class="">
                {{ __('Email Password Reset Link') }}
            </x-button>
            <p class="mt-2 text-center">Not a Member yet? <a href="{{route('register')}}" class="text-gray-400 underline" title="">Sign Up</a></p>

        </form>
    </x-authentication-card>
</x-guest-layout>
