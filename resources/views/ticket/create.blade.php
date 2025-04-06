<x-app-layout>

    {{--    <form action="{{route('ticket.store')}}" method="POST">--}}
    {{--        @csrf--}}
    {{--        <label for="bus_ride_id">Naar welk festival:</label>--}}
    {{--        <select name="bus_ride_id" id="bus_ride_id">--}}
    {{--            @foreach($busrides as $busride)--}}
    {{--                <option value="{{$busride->bus_ride_id}}">{{$busride->festival->name}}</option>--}}
    {{--            @endforeach--}}
    {{--        </select>--}}
    {{--        @error('bus_ride_id')--}}
    {{--        <span class="text-red-500 text-sm">{{ $message }}</span>--}}
    {{--        @enderror--}}

    {{--        <label for="price">Prijs: </label>--}}
    {{--        <input type="number" id="price" name="price">--}}
    {{--        @error('price')--}}
    {{--        <span class="text-red-500 text-sm">{{ $message }}</span>--}}
    {{--        @enderror--}}

    {{--        <button type="submit"> Versturen </button>--}}
    {{--    </form>--}}


    <div class="flex justify-center items-center mt-15 mb-15">
        <div class="flex flex-col bg-gray-300 min-w-[1000px] max-w-[1000px] lg:min-w-[1200px] lg:max-w-[1200px]">
            <div class="flex justify-center bg-gray-400 p-4 text-3xl">
                Create Tickets
            </div>
            <div id="form-container">
                <form action="{{ route('ticket.storeMultiple') }}" method="POST" enctype="multipart/form-data" class="ticket-form">
                    @csrf
                    <div class="ticket-group">
                        <div class="flex justify-center mt-10 mb-10">
                            <div class="flex flex-col min-w-[1000px]">
                                <div class="mb-4">
                                    <label for="bus_ride_id">Bus Ride ID:</label>
                                    <select name="bus_ride_id[]" class="flex justify-center w-full p-2 border border-gray-300 rounded">
                                        @foreach($busrides as $busride)
                                            <option value="{{ $busride->bus_ride_id }}">{{ $busride->bus_ride_id }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="mb-4">
                                    <label for="price">Price:</label>
                                    <input type="number" name="price[]" class="flex justify-center w-full p-2 border border-gray-300 rounded">
                                </div>
                                <div class="mb-4">
                                    <label for="quantity">Quantity:</label>
                                    <input type="number" name="quantity[]" class="flex justify-center w-full p-2 border border-gray-300 rounded">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex justify-center mb-10">
                        <button type="submit" class="bg-green-500 text-white p-2 rounded">Submit All Tickets</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
