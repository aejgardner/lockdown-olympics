<?php

namespace App\Http\Requests\API;

use Illuminate\Foundation\Http\FormRequest;

class CompetitorRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            "name" => ["required", "string", "max:50"],
            "bio" => ["required", "string"],
            "dob" => ["required", "date"],
            "sport_id" => ["required", "integer"],
            "img_pathway" => ["string", "max:200"],
        ];
    }
}
