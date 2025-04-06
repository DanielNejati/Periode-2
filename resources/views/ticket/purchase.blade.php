<x-app-layout>
    <div class="flex justify-center items-center mt-15 mb-15">
        <div class="flex flex-col bg-gray-300 min-w-[1000px] max-w-[1000px] lg:min-w-[1200px] lg:max-w-[1200px]">
            <div class="flex justify-center bg-gray-400 p-4 text-3xl">
                Purchase Tickets for Bus Ride {{ $busride->bus_ride_id }}
            </div>
            <div class="p-6">
                <form action="{{ route('ticket.purchase') }}" method="POST">
                    @csrf
                    <input type="hidden" name="bus_ride_id" value="{{ $busride->bus_ride_id }}">
                    <input type="hidden" name="price" id="price" value="{{ $price }}">
                    <div class="mb-4">
                        <label for="quantity">Quantity:</label>
                        <input type="number" name="quantity" id="quantity" class="w-full p-2 border border-gray-300 rounded" value="1" min="1" required>
                    </div>
                    <div class="mb-4">
                        <label>Total Price:</label>
                        <span id="total-price">{{ $price }}</span>
                    </div>
                    <div class="flex justify-center">
                        <button type="submit" class="bg-green-500 text-white p-2 rounded">Purchase Tickets</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('quantity').addEventListener('input', function() {
            var price = parseFloat(document.getElementById('price').value);
            var quantity = parseInt(this.value);
            var totalPrice = price * quantity;
            document.getElementById('total-price').textContent = totalPrice.toFixed(2);
        });
    </script>
</x-app-layout>
