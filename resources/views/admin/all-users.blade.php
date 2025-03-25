@vite(['resources/js/checkbox.js'])
<x-app-layout>
    <div class="flex justify-center items-center mt-15">
        <div class="flex flex-col min-w-[1200px] max-w-[1200px] lg:max-w-[1400px] lg:min-w-[1400px] bg-gray-400">
            <div class="flex justify-center p-4 text-3xl">Gebruikers Lijst</div>
            <div class="bg-gray-300 p-6 text-2xl">
                <div class="flex justify-center">
                    <p class="bg-gray-400 p-3">Zoeken op:</p>
                </div>
                {{-- Checkboxes to search by the selected box--}}
                <div class="flex flex-row justify-center gap-15 items-center text-xl mt-5" id="searchby">
                    <div>
                        <input id="busrit_id" name="busrit_id" type="checkbox" onchange="checkOnlyOne(this, searchby)">
                        <label for="busrit_id" class="select-none">ID</label>
                    </div>
                    <div>
                        <input id="festival_name" name="festival_name" type="checkbox"
                               onchange="checkOnlyOne(this, searchby)">
                        <label for="festival_name" class="select-none">Naam</label>
                    </div>
                    <div>
                        <input id="locatie" name="locatie" type="checkbox" onchange="checkOnlyOne(this, searchby)">
                        <label for="locatie" class="select-none">Email adress</label>
                    </div>
                </div>
                {{-- Search bar  + option to search by date--}}
                <div class="flex justify-center flex-row text-xl mt-5 gap-5">
                    <input class="min-w-[500px]" placeholder="Gebruiker zoeken..." type="search">
                    <div class="flex flex-col" id="searchsortby">
                        <div>
                            <input id="date_first" name="date_first" type="checkbox"
                                   onchange="checkOne(this, searchsortby)">
                            <label for="date_first" class="select-none">Meest recente</label>
                        </div>
                        <div>
                            <input id="date_last" name="date_last" type="checkbox"
                                   onchange="checkOne(this, searchsortby)">
                            <label for="date_last" class="select-none">Laatste eerst</label>
                        </div>
                    </div>
                </div>

                <div>
                    @foreach($users as $user)
                        <div class="flex justify-center">
                            <div class="flex flex-wrap mt-10 min-w-[1200px] max-w-[1200px] bg-gray-400 p-3 rounded-xl">
                                <div class="flex flex-row">
                                    <div class="flex justify-center items-center">
                                        <label for="busride_id"
                                               class="flex justify-center text-xl min-w-[40px] max-w-[40px]">{{$user->user_id}}</label>
                                        <div class="scale-280 mb-2.5 text-white"> |</div>
                                        <label for="busride_id"
                                               class="flex justify-center min-w-[300px] max-w-[300px]">{{$user->name}}</label>
                                        <div class="scale-280 mb-2.5 text-white"> |</div>
                                        <label for="busride_id"
                                               class="flex justify-center text-xl min-w-[450px] max-w-[450px]">{{$user->email}}</label>
                                        <div class="scale-280 mb-2.5 text-white"> |</div>
                                        <label for="busride_id"
                                               class="flex justify-center text-xl min-w-[200px] max-w-[200px]">{{$user->tel}}</label>
                                        <div class="scale-280 mb-2.5 text-white"> |</div>
                                        <label for="busride_id"
                                               class="flex justify-center text-xl min-w-[100px] max-w-[100px]">€{{$user->saldo}}</label>
                                        <div class="scale-280 mb-2.5 text-white"> |</div>
                                        <a href="" class="flex justify-center min-w-[70px] max-w-[70px]">
                                            <img src="{{asset('photos/accounthistory.png')}}" class="max-w-[40px] ">
                                        </a>
                                        <a href="" class="flex justify-center min-w-[70px] max-w-[70px]">
                                            <img src="{{asset('photos/pencil.png')}}" class="max-w-[40px] ">
                                        </a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
