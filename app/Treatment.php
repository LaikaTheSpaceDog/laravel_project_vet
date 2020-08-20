<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

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
        return Treatment::create(["name" => $str]);
    }

}
