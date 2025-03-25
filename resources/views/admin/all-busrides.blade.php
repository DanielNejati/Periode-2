@vite(['resources/js/checkbox.js'])
<x-app-layout>
    <div class="flex justify-center items-center mt-15 mb-15">
        <div class="flex flex-col min-w-[1000px] max-w-[1000px] lg:max-w-[1400px] lg:min-w-[1400px] bg-gray-400">
            <div class="flex justify-center p-4 text-3xl">Busritten Lijst</div>
            <div class="bg-gray-300 p-6 text-2xl pb-20">
                <div class="flex justify-center">
                    <p class="bg-gray-400 p-3">Filteren op:</p>
                </div>
                {{-- Checkboxes to search by the selected box--}}
                <div class="flex flex-row justify-center gap-15 items-center text-xl mt-5" id="searchby">
                    <div>
                        <input id="busrit_id" name="busrit_id" type="checkbox" onchange="checkOnlyOne(this, searchby)">
                        <label for="busrit_id" class="select-none">Busrit-id</label>
                    </div>
                    <div>
                        <input id="festival_name" name="festival_name" type="checkbox"
                               onchange="checkOnlyOne(this, searchby)">
                        <label for="festival_name" class="select-none">Festival naam</label>
                    </div>
                    <div>
                        <input id="locatie" name="locatie" type="checkbox" onchange="checkOnlyOne(this, searchby)">
                        <label for="locatie" class="select-none">Locatie</label>
                    </div>
                </div>
                {{-- Search bar  + option to search by date--}}
                <div class="flex justify-center flex-row text-xl mt-5 gap-5">
                    <input class="min-w-[500px]" placeholder="Busrit zoeken..." type="search">
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
                @foreach($busrides as $busride)
                    <div class="flex justify-center">
                        <div
                            class="flex justify-center flex-wrap mt-10 min-w-[900px] max-w-[900px] bg-gray-400 p-3 rounded-xl">

                            <div class="flex flex-row">
                                <div class="flex justify-center items-center flex-col gap-5 min-w-[300px]">
                                    <label for="busride_id" class="text-xl">Busrit ID: {{$busride->bus_ride_id}}</label>
                                    <label for="busride_id" class="text-xl">{{$busride->festival->name}} </label>
                                </div>
                                <div class="flex flex-col text-gray-200">
                                    <div class="scale-250">|</div>
                                    <div class="scale-250">|</div>
                                    <div class="scale-250">|</div>
                                    <div class="scale-260">|</div>
                                </div>
                                <div class="flex flex-col justify-center items-center min-w-[300px]">
                                    <label for="busride_id" class="text-xl">{{$busride->departure}}</label>
                                    <img src="{{asset('photos/pijltje.png')}}" alt="pijltje"
                                         class="rotate-90 max-w-[40px]">
                                    <label for="busride_id" class="text-xl">{{$busride->festival->location}}</label>
                                </div>
                                <div class="flex flex-col text-gray-200">
                                    <div class="scale-250">|</div>
                                    <div class="scale-250">|</div>
                                    <div class="scale-250">|</div>
                                    <div class="scale-260">|</div>
                                </div>
                                <div class="flex flex-col items-center min-w-[300px]">
                                    <label for="busride_id" class="text-xl mb-5">{{$busride->date}}</label>
                                    <label for="busride_id" class="text-xl">{{$busride->departure_time}}</label>
                                    -
                                    <label for="busride_id" class="text-xl"> {{ $busride->arrival_time }} </label>
                                </div>
                            </div>
                        </div>
                        <a href="{{ route('busride.edit', ['id' => $busride->bus_ride_id]) }}">
                            <img src="{{asset('photos/pencil.png')}}" class="ml-5 mt-25 max-w-[50px] max-h-[50px]">
                        </a>
                    </div>
                @endforeach
            </div>

        </div>
    </div>
</x-app-layout>
