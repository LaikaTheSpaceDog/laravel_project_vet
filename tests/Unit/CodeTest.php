<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Cracker;

class CodeTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    // public function setUp() : void
    // {
    //     $this->cracker = new Cracker();
    // }

    // public function test1()
    // {
    //     $this->assertSame("a", $this->cracker->cracker("!"));
    // }
    // public function test2()
    // {
    //     $this->assertSame("b", $this->cracker->cracker(")"));
    // }

    // public function test3()
    // {
    //     $this->assertSame("c", $this->cracker->cracker("#"));
    // }

    // public function test4()
    // {
    //     $this->assertSame("a b c", $this->cracker->cracker("! ) #"));
    // }

    // public function test5()
    // {
    //     $this->assertSame("a b c d", $this->cracker->cracker("! ) # ("));
    // }

    // public function test6()
    // {
    //     $this->assertSame("a b c d e", $this->cracker->cracker("! ) # ( ."));
    // }    
    
    // public function test7()
    // {
    //     $this->assertSame("a b c d e f g h i j k l m n o p q r s t u v w x y z", $this->cracker->cracker("! ) # ( . * % & > < @ a b c d e f g h i j k l m n o"));
    // }

    // public function test8()
    // {
    //     $this->assertSame("hello mum", $this->cracker->cracker("&.aad bjb"));
    // }

    public function testFull()
    {
        $cracker = new Cracker("! ) # ( . * % & > < @ a b c d e f g h i j k l m n o");
        $this->assertSame("hello mum", $cracker->cracker("&.aad bjb"));
    }
}
