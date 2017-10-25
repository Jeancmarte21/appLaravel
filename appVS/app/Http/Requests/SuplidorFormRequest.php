<?php

namespace appVS\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SuplidorFormRequest extends FormRequest
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
    public function rules()//nombre de los objetos del formulario html
    {
        return [
            'nombre'=>'required|max:50', 'telefono'=>'max:50', 'correo'=>'required|50', 'pais'=>'max:50', 'direccion'=>'max:256'
        ];
    }
}
