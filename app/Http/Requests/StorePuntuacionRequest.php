<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePuntuacionRequest extends FormRequest
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
            'puntuacion' => 'required|string|max:7',
            'usuarios_id' => 'required', 
        ];
    }

    // public function messages(): array
    // {
    //     return [
    //         "puntuacion.required" => "La puntuacion es obligatoria",
    //         "puntuacion.max" => "La puntuacion no puede exceder los 7 digitos",
    //         "usuarios_id.max" => "El id de usuario es obligatorio",
    //     ];
    // }
}
