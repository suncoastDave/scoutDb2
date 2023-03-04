<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Drug;

class SearchDrugs extends Component
{

    public function mount()
    {
        $this->search = request()->query('search','');
    }
    public function render()
    {
        $drugs = Drug::search($this->search)->paginate(10);

        return view('livewire.search-drugs', [
            'drugs' => $drugs,
        ]);
    }
}
