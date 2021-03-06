<?php

namespace appVS\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreSuplidorRequest extends FormRequest
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
            'telefono'=>'regex:/[0-9]{3}-[0-9]{3}-[0-9]{4}/', 
            'correo'=>'max:40|email', 
            'pais'=>'required|alpha|max:30', 
            'direccion'=>'max:256'
        ];
    }
}
