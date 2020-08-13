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

        return view("owner", [
            "owner" => $owner
        ]);
    }

    public function create()
    {
        return view("form");
    }
}

