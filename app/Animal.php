<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    
    protected $fillable = [
        "name",
        "type",
        "dob",
        "weight_kg",
        "height_m",
        "biteyness",
        "owner_id",
    ];

    public function dangerous()
    {
        return $this->biteyness >= 3;
    }
}
