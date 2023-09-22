<?php

namespace App\Livewire\Armadas;

use App\Models\Armada;
use Livewire\Component;
use Livewire\Attributes\Rule;

class Create extends Component
{

    //merk
    #[Rule('required', message: 'Masukkan Merk Armada')]
    public $merk;

    //content
    #[Rule('required', message: 'Masukkan Nopol Armada')]
    public $nopol;

    /**
     * store
     *
     * @return void
     */
    public function store()
    {
        $this->validate();

        //create post
        Armada::create([
            'merk' => $this->merk,
            'nopol' => $this->nopol,
        ]);

        //flash message
        session()->flash('message', 'Data Berhasil Disimpan.');

        //redirect
        return redirect()->route('armadas.index');
    }

    public function render()
    {
        return view('livewire.armadas.create');
    }
}
