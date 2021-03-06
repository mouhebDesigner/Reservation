<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SalleRequest extends FormRequest
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
            "numero" => "required | numeric | unique:salles",
            "capacite" => "required | numeric",
            "type_id" => "required",
            "image" => "required",
            "prix" => "required"
        ];
    }
}
