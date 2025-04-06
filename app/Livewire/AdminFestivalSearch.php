<?php

namespace App\Livewire;

use App\Models\Festival;
use Livewire\Component;
use Livewire\WithPagination;

class AdminFestivalSearch extends Component

{
    use WithPagination;

    public $search = '';
    public $sortBy = 'name';
    public $sortDirection = 'asc';
    public $searchBy = 'name'; // Default search by name

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
        $this->searchBy = $field;
    }

    public function render()
    {
        $festivals = Festival::query()
            ->when($this->searchBy === 'name', function ($query) {
                $query->where('name', 'like', '%' . $this->search . '%');
            })
            ->when($this->searchBy === 'location', function ($query) {
                $query->where('location', 'like', '%' . $this->search . '%');
            })
            ->when($this->searchBy === 'festival_id', function ($query) {
                $query->where('festival_id', 'like', '%' . $this->search . '%');
            })
            ->orderBy($this->sortBy, $this->sortDirection)
            ->paginate(10);

        return view('livewire.admin-festival-search', ['festivals' => $festivals]);
    }
}
