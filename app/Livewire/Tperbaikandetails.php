<?php

namespace App\Livewire;

use App\Models\Armada;
use App\Models\Jperbaikan;
use Livewire\Component;

class Tperbaikandetails extends Component
{

    public $tperbaikandetails = [];
    public $allArmadas = [];
    public $allJperbaikans = [];

    public function mount()
    {
        $this->tperbaikandetails = [
            ['armada' => '', 'jperbaikan' => '', 'jumlah' => 0]
        ];
        $this->allArmadas = Armada::all();
        $this->allJperbaikans = Jperbaikan::all();
    }

    public function addTperbaikandetail()
    {
        $this->tperbaikandetails[] = ['armada' => '', 'jperbaikan' => '', 'jumlah' => 0];
    }

    public function removeTperbaikandetail($index)
    {
        unset($this->tperbaikandetails[$index]);
        $this->tperbaikandetails = array_values($this->tperbaikandetails);
    }

    public function render()
    {
        info($this->tperbaikandetails);
        return view('livewire.tperbaikandetails');
    }
}
