<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cracker extends Model
{

    public function __construct($translater) {
        $this->translater = $translater;
    }

    public function cracker(string $code) : string
    {
        
        $result = "";
        $codeArr = str_split($code);
        $alphabet = range('a', 'z');
        $transArr = explode(" ", $this->translater);
        $combined = array_combine($alphabet, $transArr);

        $combined[" "] = " ";
            
        foreach($codeArr as $symbol) {
            $result .= array_search($symbol, $combined);
        }
        return $result;

    }

}