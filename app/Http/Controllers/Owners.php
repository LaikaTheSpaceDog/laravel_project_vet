<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Owner;

class Owners extends Controller
{
    public function index()
    {
        $ownerCollection = Owner::all();

        return view("owners", [
            "owners" => $ownerCollection,
        ]);
    }

    public function show(Owner $owner)
    {
        $owner = Owner::find($owner->id);

        return view("owner", [
            "owner" => $owner
        ]);
    }
}
