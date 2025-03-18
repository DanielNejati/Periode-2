<x-app-layout>
    <div class="flex justify-center items-center min-h-[70vh]">
        <div class="flex flex-col min-w-[400px] lg:min-w-[800px] bg-gray-400">
            <div class="flex justify-center p-4 text-3xl"> Login</div>
            <div class="bg-gray-300">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="flex flex-col p-8 text-2xl gap-3">
                        <label for="name">Gebruikersnaam</label>
                        <input class="rounded-lg text-xl" type="text" id="name" name="name">
                        <label for="email">Email</label>
                        <input class="rounded-lg text-xl" type="text" id="email" name="email">
                        <label for="password">Wachtwoord</label>
                        <input class="rounded-lg text-xl" type="text" id="password" name="password">
                    </div>
                    <div class="flex justify-center gap-20 pb-10">
                        <button class="bg-blue-500 hover:bg-blue-700 text-white text-xl font-bold py-2 px-4 rounded-lg">Login</button>
                        <a class="bg-blue-500 hover:bg-blue-700 text-white text-xl font-bold py-2 px-4 rounded-lg" href="{{ route('register') }}">Nog geen account?</a>
                    </div>
                </form>
            </div>
        </div>

    </div>
</x-app-layout>


{{--<x-guest-layout>--}}
{{--    <!-- Session Status -->--}}
{{--    <x-auth-session-status class="mb-4" :status="session('status')" />--}}

{{--    <form method="POST" action="{{ route('login') }}">--}}
{{--        @csrf--}}

{{--        <!-- Email Address -->--}}
{{--        <div>--}}
{{--            <x-input-label for="email" :value="__('Email')" />--}}
{{--            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />--}}
{{--            <x-input-error :messages="$errors->get('email')" class="mt-2" />--}}
{{--        </div>--}}

{{--        <!-- Password -->--}}
{{--        <div class="mt-4">--}}
{{--            <x-input-label for="password" :value="__('Password')" />--}}

{{--            <x-text-input id="password" class="block mt-1 w-full"--}}
{{--                            type="password"--}}
{{--                            name="password"--}}
{{--                            required autocomplete="current-password" />--}}

{{--            <x-input-error :messages="$errors->get('password')" class="mt-2" />--}}
{{--        </div>--}}

{{--        <!-- Remember Me -->--}}
{{--        <div class="block mt-4">--}}
{{--            <label for="remember_me" class="inline-flex items-center">--}}
{{--                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">--}}
{{--                <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>--}}
{{--            </label>--}}
{{--        </div>--}}

{{--        <div class="flex items-center justify-end mt-4">--}}
{{--            @if (Route::has('password.request'))--}}
{{--                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">--}}
{{--                    {{ __('Forgot your password?') }}--}}
{{--                </a>--}}
{{--            @endif--}}

{{--            <x-primary-button class="ms-3">--}}
{{--                {{ __('Log in') }}--}}
{{--            </x-primary-button>--}}
{{--        </div>--}}
{{--    </form>--}}
{{--</x-guest-layout>--}}
