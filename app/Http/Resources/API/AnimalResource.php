<?php

namespace App\Http\Resources\API;

use Illuminate\Http\Resources\Json\JsonResource;

class AnimalResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            "id" => $this->id,
            "name" => $this->name,
            "dob" => $this->dob,
            "weight" => $this->weight_kg,
            "height" => $this->height_m,
            "biteyness" => $this->biteyness,
            "owner first name" => $this->owner->first_name,
            "owner last name" => $this->owner->last_name,
            "treatments" => $this->treatments->pluck("name"),
        ];
    }
}
