<x-app-layout>
    <div class="container mx-auto">
        <div class="mb-4">
            <h2 class="flex justify-center text-3xl font-semibold p-8">Your Tickets</h2>
            <div class="flex flex-wrap gap-20 justify-center max-w-[1500px] mx-auto p-6">
                @foreach($tickets as $ticket)
                    <div  class="flex flex-col min-w-[200px] max-w-[200px] lg:max-w-[300px] lg:min-w-[300px] bg-gray-300">

                        <div class="flex justify-center p-2 bg-gray-50">Ticket ID: {{ $ticket->ticket_id }}</div>
                        <div class="flex justify-center p-2">
                            <div class="flex flex-col mb-5">
                                <div class="mb-2">Bus Ride ID: {{ $ticket->bus_ride_id }}</div>
                                <div class="">Price: €{{ number_format($ticket->price, 2) }}</div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <!-- Other profile information -->
    </div>
</x-app-layout>
