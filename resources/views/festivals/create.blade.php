<x-app-layout>
    <div class="flex justify-center items-center mt-15 mb-15">
        <div class="flex flex-col bg-gray-300 min-w-[1000px] max-w-[1000px] lg:min-w-[1200px] lg:max-w-[1200px]">
            <div class="flex justify-center bg-gray-400 p-4 text-3xl">
                Festivals
            </div>
            <form action="{{ route('festival.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="flex justify-center mt-10 mb-10">
                    <div class="flex flex-col min-w-[1000px]">
                        <div class="mb-4">
                            <label for="name" class="block text-lg">Festival naam:</label>
                            <input type="text" name="name" id="name"
                                   class="flex justify-center w-full p-2 border border-gray-300 rounded"
                                   required>
                            @error('name')
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
                            <label for="location" class="block text-lg">Locatie:</label>
                            <input type="text" name="location" id="location"
                                   class="w-full p-2 border border-gray-300 rounded" required>
                            @error('location')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label for="price" class="block text-lg">Prijs:</label>
                            <input type="number" name="price" id="price"
                                   class="w-full p-2 border border-gray-300 rounded"
                                   required>
                            @error('price')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="festival_type" class="block text-lg">Festival Type</label>
                            <select name="festival_type" id="festival_type" class="w-full p-2 border border-gray-300 rounded" required>
                                <option value="Hiphop">Hiphop</option>
                                <option value="Pop/Rock">Pop/Rock</option>
                                <option value="EDM">EDM</option>
                                <option value="Hardcore">Hardcore</option>
                                <option value="HeavyMetal">HeavyMetal</option>
                            </select>
                            @error('festival_type')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="picture" class="block text-lg">Afbeelding:</label>
                            <input type="file" name="picture" id="picture"
                                   class="w-3/8 p-2 border border-gray-400 rounded"
                                   accept="image/*">
                            @error('picture')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="flex justify-center ">
                            <button type="submit" class="bg-gray-500 hover:bg-gray-700 text-white p-2 rounded">Create</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
