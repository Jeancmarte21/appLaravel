<?php

namespace appVS\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProduccionMaquinaRequest extends FormRequest
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
            'maquina' => 'required|numeric|exists:maquina,idmaquina',
            'cigarro' => 'required|numeric|exists:cigarro,idcigarro',
            'configuracion' => 'required|numeric|exists:configuracion,idconfiguracion',
            'cantidad' => 'required|digits_between:1,10',
            'cantidad_sobrante' => 'required|digits_between:1,5'
            //'fecha' => 
        ];
    }
}
