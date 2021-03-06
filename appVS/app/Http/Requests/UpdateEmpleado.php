<?php

namespace appVS\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateEmpleado extends FormRequest
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
            'cedula'=> [Rule::unique('empleado')->ignore($this->cedula, 'cedula'), 'required', 'regex:/[0-9]{3}-[0-9]{7}-[0-9]{1}/'],
            'nombre'=>'required|max:25', 
            'apellidos'=>'required|max:50', 
            'fecha_nacimiento'=>'required|date|before:01/01/2005',
            'telefono'=>'regex:/8[0-9]{2}-[0-9]{3}-[0-9]{4}/',
            'direccion'=>'max:256'
        ];
    }
}
