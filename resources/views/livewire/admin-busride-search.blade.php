<div>
    <div class="flex justify-center items-center mt-15">
        <div class="flex flex-col min-w-[1000px] max-w-[1000px] lg:max-w-[1400px] lg:min-w-[1400px] bg-gray-400">
            <div class="flex justify-center p-4 text-3xl">Busride List</div>
            <div class="bg-gray-300 p-6 text-2xl">
                <div class="flex justify-center">
                    <p class="bg-gray-400 p-3">Filter by:</p>
                </div>
                <div class="flex flex-row justify-center gap-15 items-center text-xl mt-5" id="searchby">
                    <div>
                        <input id="bus_ride_id" name="bus_ride_id" type="checkbox" wire:click="setSearchBy('busride_id')" {{ $searchByBusrideId ? 'checked' : '' }}>
                        <label for="bus_ride_id" class="select-none">Busride ID</label>
                    </div>
                    <div>
                        <input id="busride_name" name="busride_name" type="checkbox" wire:click="setSearchBy('departure')" {{ $searchByDeparture ? 'checked' : '' }}>
                        <label for="busride_name" class="select-none">Busride Name</label>
                    </div>
                    <div>
                        <input id="location" name="location" type="checkbox" wire:click="setSearchBy('location')" {{ $searchByLocation ? 'checked' : '' }}>
                        <label for="location" class="select-none">Location</label>
                    </div>
                </div>
                <div class="flex justify-center flex-row text-xl mt-5 gap-5">
                    <input class="min-w-[500px]" wire:model.live="search" placeholder="Search busride..." type="search">
                    <div class="flex flex-col" id="searchsortby">
                        <div>
                            <input id="date_first" name="date_first" type="checkbox" wire:click="sortBy('created_at')">
                            <label for="date_first" class="select-none">Most Recent</label>
                        </div>
                        <div>
                            <input id="date_last" name="date_last" type="checkbox" wire:click="sortBy('created_at')">
                            <label for="date_last" class="select-none">Last First</label>
                        </div>
                    </div>
                </div>

                <div class="flex flex-wrap justify-center min-w-[1000px] max-w-[1000px] lg:min-w-[1400px] lg:max-w-[1400px] gap-15">
                    @foreach ($busrides as $busride)
                        <div class="mt-5 bg-gray-100 p-5 min-w-[600px]">
                            <div class="flex flex-row gap-5">
                                @if($busride->picture == null)
                                    <img src="{{asset('photos/default.jpeg')}}" alt="" class="max-w-[200px] max-h-[200px] p-2">
                                @else
                                    <img src="{{asset('storage/' . $busride->picture)}}" alt="" class="max-w-[200px] max-h-[200px] p-2">
                                @endif
                                <div class="flex flex-col">
                                    <label for="ID" class="text-xl">ID: {{$busride->bus_ride_id}}</label>
                                    <label for="Name" class="text-xl">Name: {{$busride->festival->name}}</label>
                                    <label for="Departure" class="text-xl">Departure: {{$busride->departure_time}}</label>
                                    <label for="Arrival" class="text-xl">Arrival: {{$busride->arrival_time}}</label>
                                    <label for="Duration" class="text-xl">Duration: {{$busride->duration}} hours</label>
                                    <label for="Price" class="text-xl">Price: €{{$busride->price}}</label>
                                </div>
                            </div>

                            <a href="{{route('busride.edit', ['id' => $busride->bus_ride_id])}}" class="flex justify-center">
                                <div class="bg-gray-500 hover:bg-gray-700 p-2 w-[100px] rounded">
                                    <div class="flex justify-center">Edit</div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
