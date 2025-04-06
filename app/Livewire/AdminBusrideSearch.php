<?php

namespace App\Livewire;

use App\Models\Busride;
use Livewire\Component;
use Livewire\WithPagination;

class AdminBusrideSearch extends Component
{
    use WithPagination;

    public $search = '';
    public $sortBy = 'departure';
    public $sortDirection = 'asc';
    public $searchBy = 'departure'; // Default search by departure
    public $searchByBusrideId = false;
    public $searchByDeparture = false;
    public $searchByLocation = false;

    protected $queryString = [
        'search' => ['except' => ''],
        'sortBy' => ['except' => 'name'],
        'sortDirection' => ['except' => 'asc'],
        'searchBy' => ['except' => 'name'],
    ];

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function sortBy($field)
    {
        if ($this->sortBy === $field) {
            $this->sortDirection = $this->sortDirection === 'asc' ? 'desc' : 'asc';
        } else {
            $this->sortDirection = 'asc';
        }

        $this->sortBy = $field;
    }

    public function setSearchBy($field)
    {
        $this->searchByBusrideId = $field === 'bus_ride_id';
        $this->searchByDeparture = $field === 'departure';
        $this->searchByLocation = $field === 'location';
    }

    public function render()
    {
        $busrides = Busride::query()
            ->when($this->searchByBusrideId, function ($query) {
                $query->where('bus_ride_id', 'like', '%' . $this->search . '%');
            })
            ->when($this->searchByDeparture, function ($query) {
                $query->where('departure', 'like', '%' . $this->search . '%');
            })
            ->when($this->searchByLocation, function ($query) {
                $query->where('location', 'like', '%' . $this->search . '%');
            })
            ->orderBy($this->sortBy, $this->sortDirection)
            ->paginate(10);

        return view('livewire.admin-busride-search', ['busrides' => $busrides]);
    }
}
