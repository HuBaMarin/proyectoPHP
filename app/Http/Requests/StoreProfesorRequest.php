<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProfesorRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;//si le doy autorización
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    //validar cada uno de los campos
    public function rules(): array
    {
        return [
            "nombre"=>'required|min:5',
            "email"=>'required|min:5',
            "dir"=>'required|min:5',
            "dni"=>'required|min:5'
            //
        ];
    }
}
