<x-app-layout>
    <div class="flex justify-center items-center mt-15 mb-15">
        <div class="flex flex-col bg-gray-300 min-w-[1000px] max-w-[1000px] lg:min-w-[1200px] lg:max-w-[1200px]">
            <div class="flex justify-center bg-gray-400 p-4 text-3xl">
                Opwaarderen
            </div>
            <div class="p-6">
                @if ($errors->has('error'))
                    <div class="bg-red-500 text-white p-2 rounded mb-4">
                        {{ $errors->first('error') }}
                    </div>
                @endif
                <form action="{{ route('profile.deposit') }}" method="POST">
                    @csrf
                    <div class="flex flex-col align-middle justify-center">
                        <div class="mb-4">
                            <label for="amount">Bedrag:</label>
                            <input type="number" name="amount" id="amount"
                                   class="w-full p-2 border border-gray-300 rounded" value="1" min="1" required>
                        </div>
                    </div>

                    <div class="flex justify-center">
                        <button type="submit" class="bg-green-500 text-white p-2 rounded">Opwaarderen</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
