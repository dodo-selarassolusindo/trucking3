<?php

namespace App\Livewire\Tperbaikans;

use App\Models\Tperbaikan;
use Livewire\Component;
use Livewire\Attributes\Rule;

class Edit extends Component
{

    // id tperbaikan
    public $tperbaikanID;

    // nomor
    #[Rule('required', message: 'Masukkan Nomor Transaksi Perbaikan')]
    public $nomor;

    // tanggal
    #[Rule('required', message: 'Masukkan Tanggal Transaksi Perbaikan')]
    public $tanggal;

    public function mount($id)
    {
        // get tperbaikan
        $tperbaikan = Tperbaikan::find($id);

        // assign
        $this->tperbaikanID = $tperbaikan->id;
        $this->nomor = $tperbaikan->nomor;
        $this->tanggal = $tperbaikan->tanggal;
    }

    /**
     * update
     *
     * @return void
     */
    public function update()
    {
        $this->validate();

        // get tperbaikan
        $tperbaikan = Tperbaikan::find($this->tperbaikanID);

        // update tperbaikan
        $tperbaikan->update([
            'nomor' => $this->nomor,
            'tanggal' => $this->tanggal
        ]);

        // flash message
        session()->flash('message', 'Data berhasil diupdate');

        // redirect
        return redirect()->route('tperbaikans.index');
    }

    public function render()
    {
        return view('livewire.tperbaikans.edit');
    }
}
