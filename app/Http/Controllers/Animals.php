<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Owner;
use App\Animal;

class Animals extends Controller
{
    public function index()
    {
        $animalCollection = Animal::all();

        return view("animals", [
            "animals" => $animalCollection,
        ]);
    }

    public function show(Animal $animal)
    {
        return view("animal", [
            "animal" => $animal
        ]);
    }

    public function edit(Animal $animal)
    {
        return view("editAnimal", [
            "animal" => $animal,
        ]);
    }

    public function editPost(AnimalRequest $request, Animal $animal)
    {
        $data = $request->all();
        $animal->fill($data)->save();
        return redirect("/animals/{$animal->id}");
    }
}
