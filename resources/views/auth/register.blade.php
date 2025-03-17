<x-app-layout>
    <div class="flex justify-center items-center min-h-[70vh]">
        <div class="flex flex-col min-w-[800px] bg-gray-400">
            <div class="flex justify-center p-4 text-3xl"> Registreer hier</div>
            <div class="bg-gray-300">
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="flex flex-col p-8 text-2xl gap-3">
                        <label for="name">Gebruikersnaam</label>
                        <input class="rounded-lg text-xl" type="text" id="name" name="name">
                        @error('name')
                            <div class="text-red-500 text-lg">{{ $message }}</div>
                        @enderror

                        <label for="email">Email</label>
                        <input class="rounded-lg text-xl" type="email" id="email" name="email">
                        @error('email')
                        <div class="text-red-500 text-lg">{{ $message }}</div>
                        @enderror
                        <label for="password">Wachtwoord</label>
                        <input class="rounded-lg text-xl" type="password" id="password" name="password">
                        @error('password')
                        <div class="text-red-500 text-lg">{{ $message }}</div>
                        @enderror
                        <label for="password_confirmation">Herhaal wachtwoord</label>
                        <input class="rounded-lg text-xl" type="text" id="password_confirmation" name="password_confirmation">
                        @error('password_confirmation')
                        <div class="text-red-500 text-lg">{{ $message }}</div>
                        @enderror

                    </div>
                    <div class="flex justify-center gap-10 pb-10">
                        <button class="bg-blue-500 hover:bg-blue-700 text-white text-xl font-bold py-2 px-4 rounded-lg">{{ __('Register') }}</button>
                        <a class="bg-blue-500 hover:bg-blue-700 text-white text-xl font-bold py-2 px-4 rounded-lg" href="{{ route('register') }}">Heb je al een account? Log hier in</a>
                    </div>
                </form>
            </div>
        </div>

    </div>
</x-app-layout>

{{--<x-guest-layout>--}}
{{--    <form method="POST" action="{{ route('register') }}">--}}
{{--        @csrf--}}

{{--        <!-- Name -->--}}
{{--        <div>--}}
{{--            <x-input-label for="name" :value="__('Name')" />--}}
{{--            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />--}}
{{--            <x-input-error :messages="$errors->get('name')" class="mt-2" />--}}
{{--        </div>--}}

{{--        <!-- Email Address -->--}}
{{--        <div class="mt-4">--}}
{{--            <x-input-label for="email" :value="__('Email')" />--}}
{{--            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />--}}
{{--            <x-input-error :messages="$errors->get('email')" class="mt-2" />--}}
{{--        </div>--}}

{{--        <!-- Password -->--}}
{{--        <div class="mt-4">--}}
{{--            <x-input-label for="password" :value="__('Password')" />--}}

{{--            <x-text-input id="password" class="block mt-1 w-full"--}}
{{--                            type="password"--}}
{{--                            name="password"--}}
{{--                            required autocomplete="new-password" />--}}

{{--            <x-input-error :messages="$errors->get('password')" class="mt-2" />--}}
{{--        </div>--}}

{{--        <!-- Confirm Password -->--}}
{{--        <div class="mt-4">--}}
{{--            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />--}}

{{--            <x-text-input id="password_confirmation" class="block mt-1 w-full"--}}
{{--                            type="password"--}}
{{--                            name="password_confirmation" required autocomplete="new-password" />--}}

{{--            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />--}}
{{--        </div>--}}

{{--        <div class="flex items-center justify-end mt-4">--}}
{{--            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">--}}
{{--                {{ __('Already registered?') }}--}}
{{--            </a>--}}

{{--            <x-primary-button class="ms-4">--}}
{{--                {{ __('Register') }}--}}
{{--            </x-primary-button>--}}
{{--        </div>--}}
{{--    </form>--}}
{{--</x-guest-layout>--}}
