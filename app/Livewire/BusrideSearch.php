<?php

namespace App\Livewire;

use App\Models\Busride;
use App\Models\Festival;
use Livewire\Component;

class BusrideSearch extends Component
{
    public $search = '';
    public $availableBusrides = '';

    public function render()
    {
        // define the result
        $results = [];
        // Check if the string length is bigger than or equal to 3 characters
        if (strlen($this->search) >= 3) {
            $results = Busride::whereHas('festival', function ($query) {
                $query->where('name', 'like', '%' . $this->search . '%');
            })->get();
            if ($results->count() >= 0) {
                $this->availableBusrides = 'Er zijn geen resultaten gevonden.';
            } else {
                $this->availableBusrides = '';
            }
        } else {
            $results = Busride::all();
        }

        return view('livewire.busride-search', compact('results'));
    }
}
