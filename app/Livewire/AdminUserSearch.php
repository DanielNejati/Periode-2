<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class AdminUserSearch extends Component
{

    use WithPagination;

    public $search = '';
    public $sortBy = 'name';
    public $sortDirection = 'asc';
    public $searchBy = 'name'; // Default search by name
    public $searchByUserId = false;
    public $searchByName = false;
    public $searchByEmail = false;

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
        $this->searchByUserId = $field === 'user_id';
        $this->searchByName = $field === 'name';
        $this->searchByEmail = $field === 'email';
    }

    public function render()
    {
        $users = User::query()
            ->when($this->searchByUserId, function ($query) {
                $query->where('user_id', 'like', '%' . $this->search . '%');
            })
            ->when($this->searchByName, function ($query) {
                $query->where('name', 'like', '%' . $this->search . '%');
            })
            ->when($this->searchByEmail, function ($query) {
                $query->where('email', 'like', '%' . $this->search . '%');
            })
            ->orderBy($this->sortBy, $this->sortDirection)
            ->paginate(10);

        return view('livewire.admin-user-search', ['users' => $users]);
    }
}
