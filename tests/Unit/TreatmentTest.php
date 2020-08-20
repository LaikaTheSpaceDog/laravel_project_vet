<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Treatment;
use Illuminate\Support\Collection;

class TreatmentTest extends TestCase
{
    
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function setUp() : void
    {
        $this->treatment = new Treatment();
    }

    // public function test1()
    // {
    //     $treatments = Treatment::fromStrings(["Fel-O-Vax Lv-K"]);
    //     $this->assertSame("Fel-O-Vax Lv-K", $treatments[0]);
    // }

    public function test2()
    {
        $result = Treatment::fromString("Test");
        $this->assertInstanceOf(Treatment::class, $result);
        $this->assertSame("Test", $result->name);
    }

    public function test3()
    {
        $result = Treatment::fromString("Banana");
        $this->assertInstanceOf(Treatment::class, $result);
        $this->assertSame("Banana", $result->name);
    }

    public function test4()
    {
        $treatmentFromDB = Treatment::all()->first();
        $this->assertInstanceOf(Treatment::class, $treatmentFromDB);
        $this->assertSame("Test", $treatmentFromDB->name);
    }

}
