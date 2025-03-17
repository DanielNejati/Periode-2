<style>
    #usernamePopup {
        display: none; /* Verborgen standaard */
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background: white;
        padding: 20px;
        border: 1px solid #ccc;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        z-index: 1000;
    }
</style>

<x-app-layout>

    <div class="flex justify-center items-center min-h-[70vh]">
        <div class="flex flex-col min-w-[800px] bg-gray-400">
            <div class="flex justify-center p-4 text-3xl">Accountgegevens</div>
            <div class="bg-gray-300 p-6 text-2xl">
                <div class="flex flex-row mb-5">
                    <div class="flex justify-center min-w-[350px] bg-blue-500 p-2">Gebruikersnaam</div>
                    <div class="flex justify-center min-w-[350px] bg-white p-2"> {{ Auth::user()->name }}</div>
                    <button id="openUserNamePopup">
                        <img src="{{asset('photos/pencil.png')}}" alt="" width="50" class="p-2 bg-blue-500">
                    </button>
                </div>
                <div class="flex flex-row mb-5">
                    <div class="flex justify-center min-w-[200px] bg-blue-500 p-2">Emailadress</div>
                    <div class="flex justify-center min-w-[500px] bg-white p-2"> {{ Auth::user()->email }}</div>
                    <a href="">
                        <img src="{{asset('photos/pencil.png')}}" alt="" width="50" class="p-2 bg-blue-500">
                    </a>
                </div>

                <div class="flex flex-row mb-5">
                    <div class="bg-red-500 flex justify-center min-w-[700px] p-2">Wachtwoord</div>
                    <button id="openPopup">
                        <img src="{{asset('photos/pencil.png')}}" alt="" width="50" class="p-2 bg-blue-500">
                    </button>

                </div>
                <div class="flex flex-row justify-center items-center">
                    <img src="{{asset('photos/accounthistory.png')}}" alt="" width="100">
                    <div class="flex flex-col items-center p-5">
                        <div>Account saldo: $40</div>
                        <div class="flex flex-row gap-10 mt-3">
                            <a href=""
                               class="bg-blue-500 hover:bg-blue-700 text-white text-xl font-bold py-2 px-4 rounded-lg">Reisgeschiedenis</a>
                            <a href=""
                               class="bg-blue-500 hover:bg-blue-700 text-white text-xl font-bold py-2 px-4 rounded-lg">Opwaarderen</a>
                        </div>
                    </div>
                </div>

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
    {{--            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">--}}
    {{--                <div class="max-w-xl">--}}
    {{--                    @include('profile.partials.update-profile-information-form')--}}
    {{--                </div>--}}
    {{--            </div>--}}

    {{--            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">--}}
    {{--                <div class="max-w-xl">--}}
    {{--                    @include('profile.partials.update-password-form')--}}
    {{--                </div>--}}
    {{--            </div>--}}

    {{--            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">--}}
    {{--                <div class="max-w-xl">--}}
    {{--                    @include('profile.partials.delete-user-form')--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </div>--}}
</x-app-layout>
