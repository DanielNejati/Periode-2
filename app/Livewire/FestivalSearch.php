<?php

namespace App\Livewire;

use App\Models\Festival;
use Livewire\Component;

class FestivalSearch extends Component
{
    public $search ='';
    public $availableFestivals = '';
    public function render()
    {
        $results = [];

        if (strlen($this->search >= 3)){

            $results = Festival::where('name', 'like','%' . $this->search . '%')->get();
            if ($results->count() >= 0){
                $this->availableFestivals = 'Er zijn geen resultaten gevonden.';
            } else{
                $this->availableFestivals = '';
            }
        }else{
            $results = Festival::all();
            $this->availableFestivals = '';
        }

        return view('livewire.festival-search', compact('results'));
    }
}
