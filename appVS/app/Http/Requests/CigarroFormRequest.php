<?php

namespace appVS\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CigarroFormRequest extends FormRequest
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
            'nombre'=>'required|max:50','tipo_cigarro'=>'required|max:50', 'materiaPrima_idmateriaPrima'=>'required|max:50'
        ];
    }
}
