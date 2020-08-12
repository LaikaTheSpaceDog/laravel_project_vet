<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Owner;
use Illuminate\Foundation\Testing\RefreshDatabase;

class OwnerTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic unit test example.
     *
     * @return void
     */
    // public function testDatabase()
    // {
    //     Owner::create([
    //         "first_name" => "Charlotte",
    //         "last_name" => "Radley",
    //         "telephone" => "+6845483140960",
    //         "email" => "cradz@gmail.com",
    //         "address_1" => "5 Not-a-street",
    //         "address_2" => "Flat 13",
    //         "town" => "Salford",
    //         "postcode" => "M10 6GH",
    //     ]);

    //     $ownerFromDB = Owner::all()->first();

    //     $this->assertSame("Charlotte", $ownerFromDB->first_name);

    // }

    // public function testEmail()
    // {
    //     Owner::create([
    //         "first_name" => "Charlotte",
    //         "last_name" => "Radley",
    //         "telephone" => "+6845483140960",
    //         "email" => "cradz@gmail.com",
    //         "address_1" => "5 Not-a-street",
    //         "address_2" => "Flat 13",
    //         "town" => "Salford",
    //         "postcode" => "M10 6GH",
    //     ]);

    //     $this->assertSame(Owner::newEmail("oscarjwales@gmail.com"), true);
    //     $this->assertSame(Owner::newEmail("cradz@gmail.com"), false);
    // }

    public function testTelephone()
    {
        Owner::create([
            "first_name" => "Charlotte",
            "last_name" => "Radley",
            "telephone" => "+6845483140960",
            "email" => "cradz@gmail.com",
            "address_1" => "5 Not-a-street",
            "address_2" => "Flat 13",
            "town" => "Salford",
            "postcode" => "M10 6GH",
        ]);
        
        $ownerFromDB = Owner::all()->first();
        $limit = 14;
        
        $ownerFromDB->telephone = "68454831409601717171717171717171";

    }
}