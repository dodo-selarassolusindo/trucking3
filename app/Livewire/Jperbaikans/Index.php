<?php

namespace App\Livewire\Jperbaikans;

use App\Models\Jperbaikan;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{

    use WithPagination;

    /**
     * destroy
     *
     * @param mixed $id
     * @return void
     */
    public function destroy($id)
    {
        // destroy
        Jperbaikan::destroy($id);

        // flash message
        session()->flash('message', 'Data berhasil dihapus');

        // redirect
        return redirect()->route('jperbaikans.index');
    }

    public function render()
    {
        return view('livewire.jperbaikans.index', [
            'jperbaikans' => Jperbaikan::latest()->paginate(5)
        ]);
    }
}
