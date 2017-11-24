<?php

namespace appVS\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreConfiguracionRequest extends FormRequest
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
            //
                'cigarro' => 'required|numeric|exists:cigarro,idcigarro',
                'nombre' => 'required|max:35',
                'fecha' => 'required|date|date_equals:today',
                'capa'  => 'nullable|numeric|exists:materiaPrima,idmateriaPrima|different:capote',
                'cantidadcapa' => 'required_with:capa|numeric|nullable',
                'capote'  => 'required|numeric|exists:materiaPrima,idmateriaPrima',
                'cantidadcapote' => 'required|numeric',
                'relleno'  => 'required|numeric|exists:materiaPrima,idmateriaPrima',
                'cantidadrelleno' => 'required|numeric'
        ];
    }
}