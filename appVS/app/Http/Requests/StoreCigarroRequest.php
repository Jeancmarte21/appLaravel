<?php

namespace appVS\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCigarroRequest extends FormRequest
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
            'nombre'=>'required|max:45',
            'tipo_cigarro'=>'required|max:13', 
        ];
    }
}
