<?php

namespace App\Livewire\Tperbaikans;

use App\Models\Tperbaikan;
use Livewire\Component;
use Livewire\Attributes\Rule;

class Create extends Component
{

    // nomor
    #[Rule('required', message: 'Masukkan Nomor Transaksi Perbaikan')]
    public $nomor;

    // tanggal
    #[Rule('required', message: 'Masukkan Tanggal Transaksi Perbaikan')]
    public $tanggal;

    // public $tperbaikandetails = [];

    public function mount($tperbaikandetails)
    {
        // code...
    }

    /**
     * store
     *
     * @return void
     */
    public function store()
    {

        // echo '<pre>';
        // print_r($request);
        // echo '</pre>';

        $this->validate();

        // create tperbaikan
        Tperbaikan::create([
            'nomor' => $this->nomor,
            'tanggal' => $this->tanggal
        ]);

        foreach ($this->tperbaikandetails as $tperbaikandetail) {
            // echo '<pre>';
            // print_r($tperbaikandetail);
            // echo '</pre>';
            Tperbaikan::tperbaikandetails()->attach(
                ['armada' => $tperbaikandetail['armada']],
                ['jperbaikan' => $tperbaikandetail['jperbaikan']]
            );
        }

        // flash message
        session()->flash('message', 'Data berhasil disimpan');

        // redirect
        return redirect()->route('tperbaikans.index');
    }

    public function render()
    {
        return view('livewire.tperbaikans.create');
    }
}
