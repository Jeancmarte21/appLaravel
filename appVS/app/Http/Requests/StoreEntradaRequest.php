<?php

namespace appVS\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreEntradaRequest extends FormRequest
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
            'nombre' => 'required|numeric|exists:materiaPrima,idmateriaPrima',
                'precio' => 'required|numeric',
                'cantidad' => 'required|numeric',
                'fecha' => 'required|date|date_equals:today', 
                'suplidor' => 'required|numeric|exists:suplidor,idsuplidor'
        ];
    }
}
