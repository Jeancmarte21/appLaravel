<?php

namespace appVS\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FechaNominaRequest extends FormRequest
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
            'fecha_desde' => 'required|date|different:fecha_hasta',
            'fecha_hasta' => 'required|after:fecha_desde'
        ];
    }
}
