<?php

namespace App\Http\Controllers;

use App\Models\Busride;
use App\Models\Ticket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TicketController extends Controller
{

    public function showPurchaseForm()
    {
        $busrides = Busride::all();
        return view('ticket.purchase', compact('busrides'));
    }
    public function showPurchaseFormForBusRide($bus_ride_id)
    {
        $busride = Busride::findOrFail($bus_ride_id);
        $price = $busride->price;
        return view('ticket.purchase', compact('busride', 'price'));
    }
    public function purchase(Request $request)
    {
        $validated = $request->validate([
            'bus_ride_id' => 'required|exists:busrides,bus_ride_id',
            'price' => 'required|numeric|min:0',
            'quantity' => 'required|integer|min:1',
        ]);

        $user_id = Auth::id();
        $bus_ride_id = $validated['bus_ride_id'];
        $price = $validated['price'];
        $quantity = $validated['quantity'];

        for ($i = 0; $i < $quantity; $i++) {
            Ticket::create([
                'bus_ride_id' => $bus_ride_id,
                'price' => $price,
                'user_id' => $user_id,
            ]);
        }

        return redirect()->route('dashboard')->with('success', 'Tickets purchased successfully.');
    }
    // Show the available tickets to the admin
    public function index()
    {
        // get all tickets from the database
        $tickets = Ticket::all();
        return view('ticket.index', compact('tickets'));
    }

    // create function to make tickets, use admin view
    public function create()
    {
        $busrides = Busride::all();
        return view('ticket.create', compact('busrides'));
    }

    public function storeMultiple(Request $request)
    {
        $request->validate([
            'bus_ride_id' => 'required|array',
            'bus_ride_id.*' => 'required|exists:busrides,bus_ride_id',
            'price' => 'required|array',
            'price.*' => 'required|numeric|min:0',
            'quantity' => 'required|array',
            'quantity.*' => 'required|integer|min:1',
        ]);
        $quantity = $request->input('quantity');
        $busRideIds = $request->input('bus_ride_id');
        $prices = $request->input('price');

        foreach ($busRideIds as $index => $busRideId) {
            for ($i = 0; $i < $quantity[$index]; $i++) {
                Ticket::create([
                    'bus_ride_id' => $busRideId,
                    'price' => $prices[$index],
                    'user_id' => null,
                ]);
            }

            return redirect()->route('ticket.index')->with('success', 'Tickets created successfully.');
        }
    }

// store function to validate the tickets before sending them to the database
    public function store(Request $request)
    {
        // validate the request
        $validated = $request->validate([
            'user_id' => 'nullable',
            'bus_ride_id' => 'required|exists:busrides,bus_ride_id',
            'price' => 'required|numeric|min:0'
        ]);

        // create a new ticket
        Ticket::create($validated);
        // redirect to the index page with a success message
        return redirect()->route('ticket.index');

    }
}
