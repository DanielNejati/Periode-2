<x-app-layout>
    d
    <div class="justify-center">
        {{--        @foreach ($tickets->Busride->bus_ride_id as $ticket)--}}
        {{--            {{ $ticket->ticket_id }}--}}
        {{--        @endforeach--}}
    </div>

    <div class="flex flex-wrap gap-20 justify-center max-w-[1500px] mx-auto p-6">
        @foreach ($tickets->groupBy('bus_ride_id') as $busRideId => $groupedTickets)
            <div class="flex flex-col min-w-[200px] max-w-[200px] lg:max-w-[300px] lg:min-w-[300px] bg-gray-300">
                <div class="flex justify-center p-4 text-xl bg-gray-400">Busride ID: {{$busRideId}}</div>
                <div class="bg-gray-300 p-6">
                    <div class="flex flex-col mb-5">
                        <div class="mb-2 mt-2"> {{ $groupedTickets->count() }} tickets</div>
                        <div class="mb-2">Price: ${{ number_format($groupedTickets->first()->price, 2) }}</div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</x-app-layout>
