<?php

namespace appVS\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmpleadoFromRequest extends FormRequest
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
            'cedula'=>'required|max:13','nombre'=>'required|max:50', 'apellidos'=>'required|max:50', 'fecha_naci'=>'required|50','direccion'=>'max:256'
        ];
    }
}
