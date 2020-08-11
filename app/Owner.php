<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Owner extends Model
{
    public static function haveWeBananas($number)
    {
        if ($number === 0) {
            return "No we have no bananas";
        }

        if (($number === 1) || ($number === -1)) {
            return "Yes we have {$number} banana";
        }
        return "Yes we have {$number} bananas";
    }   
}
