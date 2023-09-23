<?php

namespace App\Livewire\Jperbaikans;

use App\Models\Jperbaikan;
use Livewire\Component;
use Livewire\Attributes\Rule;

class Create extends Component
{

    // jenis
    #[Rule('required', message: 'Masukkan Jenis Perbaikan')]
    public $jenis;

    /**
     * store
     *
     * @return void
     */
    public function store()
    {
        $this->validate();

        // create jperbaikan
        Jperbaikan::create([
            'jenis' => $this->jenis
        ]);

        // flash message
        session()->flash('message', 'Data berhasil disimpan');

        // redirect
        return redirect()->route('jperbaikans.index');
    }

    public function render()
    {
        return view('livewire.jperbaikans.create');
    }
}
