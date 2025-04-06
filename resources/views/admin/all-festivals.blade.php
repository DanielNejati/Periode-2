<x-app-layout>

    @livewire('admin-festival-search')
{{--@vite(['resources/js/checkbox.js'])--}}
{{--<x-app-layout>--}}
{{--    <div class="flex justify-center items-center mt-15">--}}
{{--        <div class="flex flex-col min-w-[1000px] max-w-[1000px] lg:max-w-[1400px] lg:min-w-[1400px] bg-gray-400">--}}
{{--            <div class="flex justify-center p-4 text-3xl">Festival Lijst</div>--}}
{{--            <div class="bg-gray-300 p-6 text-2xl">--}}
{{--                <div class="flex justify-center">--}}
{{--                    <p class="bg-gray-400 p-3">Filter op:</p>--}}
{{--                </div>--}}
{{--                 Checkboxes to search by the selected box--}}
{{--                <div class="flex flex-row justify-center gap-15 items-center text-xl mt-5" id="searchby">--}}
{{--                    <div>--}}
{{--                        <input id="busrit_id" name="busrit_id" type="checkbox" onchange="checkOnlyOne(this, searchby)">--}}
{{--                        <label for="busrit_id" class="select-none">Festival-id</label>--}}
{{--                    </div>--}}
{{--                    <div>--}}
{{--                        <input id="festival_name" name="festival_name" type="checkbox"--}}
{{--                               onchange="checkOnlyOne(this, searchby)">--}}
{{--                        <label for="festival_name" class="select-none">Festival naam</label>--}}
{{--                    </div>--}}
{{--                    <div>--}}
{{--                        <input id="locatie" name="locatie" type="checkbox" onchange="checkOnlyOne(this, searchby)">--}}
{{--                        <label for="locatie" class="select-none">Locatie</label>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                 Search bar  + option to search by date--}}
{{--                <div class="flex justify-center flex-row text-xl mt-5 gap-5">--}}
{{--                    <input class="min-w-[500px]" placeholder="Festival zoeken..." type="search">--}}
{{--                    <div class="flex flex-col" id="searchsortby">--}}
{{--                        <div>--}}
{{--                            <input id="date_first" name="date_first" type="checkbox"--}}
{{--                                   onchange="checkOne(this, searchsortby)">--}}
{{--                            <label for="date_first" class="select-none">Meest recente</label>--}}
{{--                        </div>--}}
{{--                        <div>--}}
{{--                            <input id="date_last" name="date_last" type="checkbox"--}}
{{--                                   onchange="checkOne(this, searchsortby)">--}}
{{--                            <label for="date_last" class="select-none">Laatste eerst</label>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div--}}
{{--                    class="flex flex-wrap justify-center min-w-[1000px] max-w-[1000px] lg:min-w-[1400px] lg:max-w-[1400px] gap-15">--}}
{{--                    @foreach ($festivals as $festival)--}}

{{--                        <div class="mt-5 bg-gray-100 p-5 min-w-[600px]">--}}
{{--                            <div class="flex flex-row gap-5">--}}
{{--                                @if($festival->picture == null)--}}
{{--                                    <img src="{{asset('photos/layluna.jpeg')}}" alt=""--}}
{{--                                         class="max-w-[200px] max-h-[200px] p-2">--}}
{{--                                @else--}}
{{--                                    <img src="{{asset('storage/' . $festival->picture)}}" alt=""--}}
{{--                                         class="max-w-[200px] max-h-[200px] p-2">--}}
{{--                                @endif--}}
{{--                                <div class="flex flex-col">--}}
{{--                                    <label for="festival_id" class="text-xl">ID: {{$festival->festival_id}}</label>--}}
{{--                                    <label for="festival_id" class="text-xl">Naam: {{$festival->name}}</label>--}}
{{--                                    <label for="festival_id" class="text-xl">Duur: {{$festival->duration}} uur</label>--}}
{{--                                    <label for="festival_id" class="text-xl">Locatie: {{$festival->location}}</label>--}}
{{--                                    <label for="festival_id" class="text-xl">Soort--}}
{{--                                        festival: {{$festival->festival_type}}</label>--}}
{{--                                    <label for="festival_id" class="text-xl">Prijs: €{{$festival->price}}</label>--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <a href="{{route('festival.edit', ['id' => $festival->festival_id])}}"--}}
{{--                               class="flex justify-center">--}}
{{--                                <div class="bg-gray-500 hover:bg-gray-700 p-2 w-[100px] rounded">--}}
{{--                                    <div class="flex justify-center">--}}
{{--                                        Edit--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </a>--}}
{{--                        </div>--}}
{{--                    @endforeach--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
</x-app-layout>
