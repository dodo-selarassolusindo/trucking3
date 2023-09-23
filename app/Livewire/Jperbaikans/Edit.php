<?php

namespace App\Livewire\Jperbaikans;

use App\Models\Jperbaikan;
use Livewire\Component;
use Livewire\Attributes\Rule;

class Edit extends Component
{

    // id jperbaikan
    public $jperbaikanID;

    // jenis
    #[Rule('required', message: 'Masukkan Jenis Perbaikan')]
    public $jenis;

    public function mount($id)
    {
        // get jperbaikan
        $jperbaikan = Jperbaikan::find($id);

        // assign
        $this->jperbaikanID = $jperbaikan->id;
        $this->jenis = $jperbaikan->jenis;
    }

    /**
     * update
     *
     * @return void
     */
    public function update()
    {
        $this->validate();

        // get jperbaikan
        $jperbaikan = Jperbaikan::find($this->jperbaikanID);

        // update jperbaikan
        $jperbaikan->update([
            'jenis' => $this->jenis
        ]);

        // flash message
        session()->flash('message', 'Data berhasil diupdate');

        // redirect
        return redirect()->route('jperbaikans.index');
    }

    public function render()
    {
        return view('livewire.jperbaikans.edit');
    }
}
