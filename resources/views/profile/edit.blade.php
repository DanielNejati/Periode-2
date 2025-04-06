<x-app-layout>
    {{--    Profiel pagina--}}
    <div class="flex justify-center items-center min-h-[70vh]">
        <div class="flex flex-col max-w-[600px] lg:max-w-[800px] bg-gray-400">
            <div class="flex justify-center p-4 text-3xl">Accountgegevens</div>
            <div class="bg-gray-300 p-6 text-2xl">
                <div class="flex flex-row mb-5">
                    {{--  Gebruikersnaam--}}
                    <div class="flex justify-center min-w-[260px] lg:min-w-[350px] bg-gray-500 text-white p-2">Gebruikersnaam</div>
                    <div
                        class="flex justify-center min-w-[260px] lg:min-w-[350px] bg-white p-2"> {{ Auth::user()->name }}</div>
                </div>
                {{--   Emailadres--}}
                <div class="flex flex-row mb-5">
                    <div class="flex justify-center min-w-[160px] lg:min-w-[200px] bg-gray-500 text-white p-2">Emailadress</div>
                    <div
                        class="flex justify-center min-w-[360px] lg:min-w-[500px] bg-white p-2"> {{ Auth::user()->email }}</div>
                </div>
                {{--                Telefoonnummer--}}
                <div class="flex flex-row mb-5">
                    <div class="flex justify-center min-w-[160px] lg:min-w-[200px] bg-gray-500 text-white p-2">Tel</div>
                    <div
                        class="flex justify-center min-w-[360px] lg:min-w-[500px] bg-white p-2">
                        +{{Auth::user()->tel }}</div>
                </div>
                <div class="flex flex-row justify-center items-center">
                    <img src="{{asset('photos/accounthistory.png')}}" alt="" width="100">
                    <div class="flex flex-col items-center p-5">
                        <div>Account saldo: €{{Auth::user()->saldo}}</div>
                        <div>Account Vip-punten: {{Auth::user()->vip_punten}}</div>
                        <div class="flex flex-row gap-10 mt-3">
                            <a href="{{route('profile.transactions')}}"
                               class="bg-gray-500 text-white hover:bg-gray-700 text-white text-xl font-bold py-2 px-4 rounded-lg">Reisgeschiedenis</a>
                            <a href="{{route('profile.deposit')}}"
                               class="bg-gray-500 text-white hover:bg-gray-700 text-white text-xl font-bold py-2 px-4 rounded-lg">Opwaarderen</a>
                        </div>
                    </div>
                </div>
                {{-- Uitloggen--}}
                <div class="flex justify-center">
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="bg-red-500 py-2 px-4 rounded-lg">Uitloggen</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    {{--    <div class="py-12">--}}
    {{--        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">--}}
    {{--            <div class="p-4 sm:p-8 bg-white shadow-sm sm:rounded-lg">--}}
    {{--                <div class="max-w-xl">--}}
    {{--                    @include('profile.partials.update-profile-information-form')--}}
    {{--                </div>--}}
    {{--            </div>--}}

    {{--            <div class="p-4 sm:p-8 bg-white shadow-sm sm:rounded-lg">--}}
    {{--                <div class="max-w-xl">--}}
    {{--                    @include('profile.partials.update-password-form')--}}
    {{--                </div>--}}
    {{--            </div>--}}

    {{--            <div class="p-4 sm:p-8 bg-white shadow-sm sm:rounded-lg">--}}
    {{--                <div class="max-w-xl">--}}
    {{--                    @include('profile.partials.delete-user-form')--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </div>--}}
</x-app-layout>
