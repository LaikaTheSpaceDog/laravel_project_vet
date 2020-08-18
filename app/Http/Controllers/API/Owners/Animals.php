<?php

namespace App\Http\Controllers\API\Owners;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Owner;
use App\Animal;

class Animals extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Owner $owner)
    {
        return $owner->animals;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Owner $owner)
    {
        // $data = $request->all();
        // if ($request->owner_id === $owner->id) {
        //     return Animal::create($data);
        // } else {
        //     return "Inocrrect owner ID";
        // }
        $animal = new Animal($request->all());
        $owner->animals()->save($animal);
        return $animal;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
