<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Owner;
use App\Animal;
use App\Http\Requests\OwnerRequest;
use App\Http\Requests\AnimalRequest;

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
        return view("createForm");
    }

    public function createPost(OwnerRequest $request)
    {
        $data = $request->all();
        $owner = Owner::create($data);
        return redirect("/owners/{$owner->id}");
    }

    public function edit(Owner $owner)
    {
        return view("editForm", [
            "owner" => $owner,
        ]);
    }

    public function editPost(OwnerRequest $request, Owner $owner)
    {
        $data = $request->all();
        $owner->fill($data)->save();
        return redirect("/owners/{$owner->id}");
    }

    public function search(Request $request)
    {
        $query = $request->get('search');
        return view("owners", [
            "owners" => Owner::where('first_name', 'LIKE', '%' . $query . '%')
                               ->orWhere('last_name', 'LIKE', '%' . $query . '%')
                               ->get()->sortByDesc("updated_at")
        ]);

    }

    public function addAnimal(AnimalRequest $request, Owner $owner)
    {
        // $data = $request->all();
        // $animal = Animal::create($data);
        $animal = new Animal($request->all());
        $owner->animals()->save($animal);
        return redirect("/owners/{$animal->owner_id}");
    }
}

