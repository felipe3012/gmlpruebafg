<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClientsRequest extends FormRequest
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
            'nombre' => 'required|string|min:5|max:100',
            'apellido' => 'required|string|max:100',
            'cedula' => 'required|min:0',
            'email' => 'required|email|max:150',
            'pais' => 'required',
            'direccion' => 'required|max:180',
            'celular' => 'required|numeric|size:10',
            'id_independient' => 'required|exists:independients,id',
        ];
    }
}
