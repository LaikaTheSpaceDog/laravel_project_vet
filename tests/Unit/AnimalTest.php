<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Animal;

class AnimalTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testBiteyness()
    {
        Animal::create([
            "name" => "Bob",
            "type" => "frog",
            "dob" => "2019/08/12",
            "weight_kg" => 0.6,
            "height_m" => 0.02,
            "biteyness" => 5,
            "owner_id" => 1,
        ]);
        
        $animalFromDb = Animal::all()->last();

        $this->assertSame($animalFromDb->dangerous(), true);
    }
}
