<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FizzBuzz extends Model
{
    private $dictionary = [
        3 => "Fizz",
        5 => "Buzz",
        7 => "Rarr"
    ];
    
    public function forNumber(int $num) : string
    {
        $result = "";
        
        foreach ($this->dictionary as $value => $word) {
            while ($num % $value === 0) {
                $result .= $word;
                break;
            }
        }
        return $result === "" ? "{$num}" : $result;
    }

}