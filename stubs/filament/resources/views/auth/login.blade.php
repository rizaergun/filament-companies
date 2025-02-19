<x-guest-layout>

        <h2 class="text-2xl font-bold tracking-tight text-center">
            {{ __('filament-companies::default.headings.auth.login') }}
        </h2>

        <div class="mt-4 text-sm text-center font-medium">
            {{__('filament-companies::default.subheadings.auth.login') }}
            <a class="text-sm text-primary-600" href="{{ route('register') }}">
                {{ __('filament-companies::default.headings.auth.register')}}
            </a>
        </div>


        <x-filament-companies::validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600 dark:text-green-400">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" class="space-y-8" action="{{ route('login') }}">
            @csrf

            <div>
                <x-filament-companies::label for="email" value="{{ __('filament-companies::default.fields.email') }}" />
                <x-filament-companies::input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="mt-4">
                <x-filament-companies::label for="password" value="{{ __('filament-companies::default.fields.password') }}" />
                <x-filament-companies::input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-filament-companies::checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm font-medium text-gray-600 dark:text-gray-400">{{ __('filament-companies::default.buttons.remember_me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="text-sm text-primary-600 dark:text-primary-400 font-medium" href="{{ route('password.request') }}">
                        {{ __('filament-companies::default.links.forgot_your_password') }}
                    </a>
                @endif

                <x-filament::button type="submit" class="ml-4">
                    {{ __('filament-companies::default.buttons.login') }}
                </x-filament::button>
            </div>
        </form>
</x-guest-layout>
