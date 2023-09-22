<?php

namespace App\Livewire\Armadas;

use App\Models\Armada;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public function render()
    {
        return view('livewire.armadas.index', [
            'armadas' => Armada::latest()->paginate(5)
        ]);
    }
}
