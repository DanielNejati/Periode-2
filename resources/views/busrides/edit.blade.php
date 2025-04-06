<x-app-layout>
    <div class="flex justify-center items-center mt-15 mb-15">
        <div class="flex flex-col bg-gray-300 min-w-[1000px] max-w-[1000px] lg:min-w-[1200px] lg:max-w-[1200px]">
            <div class="flex justify-center bg-gray-400 p-4 text-3xl">
                Busrit veranderen
            </div>

            <form action="{{ route('busride.update', $busride->bus_ride_id)}}" method="POST"
                  enctype="multipart/form-data">
                @csrf
                <div class="flex justify-center mt-10 mb-10">
                    <div class="flex flex-col min-w-[1000px]">
                        <div class="mb-4">
                            <label for="name" class="block text-lg">Festival naam:</label>
                            <input type="text" name="name" id="name"
                                   class="flex justify-center w-full p-2 border border-gray-300 rounded"
                                   required value="{{$busride->festival->name}}" readonly>
                            @error('name')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label for="duration" class="block text-lg">Duur in uren:</label>
                            <input type="text" name="duration" id="duration"
                                   class="flex justify-center w-full p-2 border border-gray-300 rounded"
                                   required value="{{$busride->duration}}">
                            @error('duration')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label for="departure_time" class="block text-lg">Vertrek tijd:</label>
                            <input type="text" name="departure_time" id="departure_time"
                                   class="flex justify-center w-full p-2 border border-gray-300 rounded"
                                   required value="{{$busride->departure_time}}">
                            @error('duration')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label for="arrival_time" class="block text-lg">Aankomst tijd:</label>
                            <input type="text" name="arrival_time" id="arrival_time"
                                   class="flex justify-center w-full p-2 border border-gray-300 rounded"
                                   required value="{{$busride->arrival_time}}">
                            @error('arrival_time')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label for="location" class="block text-lg">Locatie:</label>
                            <input type="text" name="location" id="location"
                                   class="flex justify-center w-full p-2 border border-gray-300 rounded"
                                   required value="{{$busride->location}}">
                            @error('arrival_time')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="">
                            <label for="date" class="block text-lg">Datum:</label>
                            <input type="date" name="date" id="date"
                                   class="flex  w-full p-2 border border-gray-300 rounded"
                                   required value="{{$busride->date}}" readonly>
                            @error('arrival_time')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>


                    </div>
                </div>

                <div class="flex justify-center mb-5">
                    <button type="submit" class="p-5">Veranderen</button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
