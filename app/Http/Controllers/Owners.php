<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Owner;
use App\Http\Requests\OwnerRequest;

date_default_timezone_set("Europe/London");

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

    public function createPost(OwnerRequest $request)
    {
        $data = $request->all();
        $owner = Owner::create($data);
        return redirect("/owners/{$owner->id}");
    }
}

