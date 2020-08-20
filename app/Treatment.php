<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class Treatment extends Model
{
    public $timestamps = false;

    protected $fillable = [
        "name"
    ];

    public function animals()
    {
        return $this->belongsToMany(Animal::class);
    }

    public static function fromString(string $str) : Treatment
    {
        $treatment = Treatment::where("name", trim($str))->first();
        return $treatment ? $treatment :  Treatment::create(["name" => $str]);
    }

    static public function fromStrings(array $strings) : Collection
    {
        return collect($strings)->map([Treatment:: class, "fromString"]);
    }

}
