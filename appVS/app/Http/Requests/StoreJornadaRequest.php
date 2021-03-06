<?php

namespace appVS\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreJornadaRequest extends FormRequest
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
                'empleado' => 'required|numeric|exists:empleado,idempleado',
                'incentivo' => 'nullable|numeric',
                'hora_extra' => 'nullable|digits:1',
                'fecha' => 'required|date',
        ];
    }
}
