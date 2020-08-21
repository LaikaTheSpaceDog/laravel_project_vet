<?php

namespace App\Http\Requests\API;

use Illuminate\Foundation\Http\FormRequest;

class AnimalStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return $this->user()['role'] === 'vet';
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            "name" => ["required", "string", "max:100"],
            "type" => ["required", "string", "max:50"],
            "dob" => ["required", "date"],
            "weight_kg" => ["required", "numeric"],
            "height_m" => ["required", "numeric"],
            "biteyness" => ["required", "integer"],
            "treatments" => ["required", "array"],
            "treatments.*" => ["string", "max:100"],
        ];
    }
}
