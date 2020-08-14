<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Owner;
use App\Home;
use App\Http\Controllers\Owners;

class Search extends Controller
{
    public function find()
    {	
        $owners = Owner::all();

        return view('owners', ['owners' => $owners]);
    }		
}
