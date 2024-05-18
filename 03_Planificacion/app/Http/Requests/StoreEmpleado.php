<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreEmpleado extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            //Escribir como en la base de datos
            'nombre'=>'required',
            'apellido'=>'required',
            'telefono'=>'required',
            'email'=>'required',
            'usuario'=>'required',
            'contraseña'=>'required',
        ];
    }
}
