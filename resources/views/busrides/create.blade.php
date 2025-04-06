<x-app-layout>
    <div class="flex justify-center items-center mt-15 mb-15">
        <div class="flex flex-col bg-gray-300 min-w-[1000px] max-w-[1000px] lg:min-w-[1200px] lg:max-w-[1200px]">
            <div class="flex justify-center bg-gray-400 p-4 text-3xl">
                Busritten
            </div>
            <form action="{{ route('busride.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="flex justify-center mt-10 mb-10">
                    <div class="flex flex-col min-w-[1000px]">
                        <div class="mb-4">
                            <label for="festival_id">Festival:</label>
                            <select name="festival_id" id="festival_id" class="flex justify-center w-full p-2 border border-gray-300 rounded" required>
                                @foreach($festivals as $festival)
                                    <option value="{{$festival->festival_id}}">{{$festival->name}}</option>
                                @endforeach
                            </select>

                            @error('festival_id')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="duration" class="block text-lg">Duur:</label>
                            <input type="text" name="duration" id="duration"
                                   class="w-full p-2 border border-gray-300 rounded" required>
                            @error('duration')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label for="departure_time" class="block text-lg">Vertrek tijd:</label>
                            <input type="text" name="departure_time" id="departure_time"
                                   class="w-full p-2 border border-gray-300 rounded" placeholder="12:34" required>
                            @error('departure_time')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label for="location" class="block text-lg">Locatie:</label>
                            <input type="text" name="location" id="location"
                                   class="w-full p-2 border border-gray-300 rounded"
                                   required>
                            @error('location')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="date" class="block text-lg">Datum:</label>
                            <input type="date" name="date" id="date"
                                   class="w-full p-2 border border-gray-300 rounded"
                                   required>

                            @error('date')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="flex justify-center ">
                            <button type="submit" class="bg-gray-500 hover:bg-gray-700 text-white p-2 rounded"> Aanmaken
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>


</x-app-layout>
