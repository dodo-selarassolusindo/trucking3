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

}
