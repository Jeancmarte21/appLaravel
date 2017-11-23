<?php

namespace appVS\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreMateriaPrimaRequest extends FormRequest
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
            'nombre' => 'required|max:35',
                'categoria' => 'required|alpha|max:12',
                'porcentaje_pesohumedo' => "required_if:categoria,==,Tabaco|numeric|nullable",
                'existencia_minima' => 'required|numeric'
        ];
    }
}
