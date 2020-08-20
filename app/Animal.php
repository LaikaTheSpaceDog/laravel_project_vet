<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    
    public function owner()
    {
        return $this->belongsTo(Owner::class);
    }

    public function treatments()
    {
        return $this->belongsToMany(Treatment::class);
    }
    
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

    public function setTreatments(array $strings) : Animal
    {
        $treatments = Treatment::fromStrings($strings);
        $this->treatments()->sync($treatments->pluck("id"));
        return $this;
    }
}
