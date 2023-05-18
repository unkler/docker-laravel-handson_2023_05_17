<x-guest-layout>
    <x-auth-card>
        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                {{-- <x-label for="name" :value="__('Name')" /> --}}

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" placeholder="{{ __('Name') }}" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                {{-- <x-label for="email" :value="__('Email')" /> --}}

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" placeholder="{{ __('Email') }}" required />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                placeholder="{{ __('Password') }}"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                placeholder="{{ __('Confirm Password') }}"
                                name="password_confirmation" required />
            </div>

            <div class="mt-4">
                <x-button>
                    {{ __('Register') }}
                </x-button>
            </div>

            <div class="mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
