<?php

namespace App\Livewire\Jperbaikans;

use App\Models\Jperbaikan;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{

    use WithPagination;

    public function render()
    {
        return view('livewire.jperbaikans.index', [
            'jperbaikans' => Jperbaikan::latest()->paginate(5)
        ]);
    }
}
