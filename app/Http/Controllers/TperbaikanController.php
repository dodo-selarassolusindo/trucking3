<?php

namespace App\Http\Controllers;

use App\Models\Tperbaikan;
use App\Models\Tperbaikandetail;

use Illuminate\Http\Request;

class TperbaikanController extends Controller
{

    public function create()
    {
    	return view('tperbaikan.create');
    }

    public function store(Request $request)
    {
        $tperbaikan = Tperbaikan::create([
            'nomor' => $request->nomor,
            'tanggal' => $request->tanggal,
        ]);

        foreach ($request->tperbaikandetails as $row) {
            $tperbaikan->tperbaikandetails()->attach($row['tperbaikandetail_id'],
                [
                    // 'jumlah' => $row['jumlah'],
                    'armada_id' => $row['armada'],
                    // 'jperbaikan_id' => $row['jperbaikan'],
            ]);
        }

        return 'Order stored successfully!';
    }

}
