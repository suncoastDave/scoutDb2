<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;

class SearchDrugs extends Component
{
    public function mount()
    {
        $this->search = request()->query('search','');
    }
    public function render()
    {
        $users = Drug::search($this->search)->paginate(10);

        return view('livewire.search-drugs', [
            'drugs' => $drugs,
        ]);
    }
}
