<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Adder extends Model
{
    public function add($num1, $num2)
    {
        return $num1 + $num2;
    }

}