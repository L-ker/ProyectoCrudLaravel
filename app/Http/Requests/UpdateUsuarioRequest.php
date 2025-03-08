<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUsuarioRequest extends FormRequest
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
            'nombre' => 'required|string|max:50',
            'usuario' => 'required|string|min:5|max:25|unique:usuarios,usuario,' . $this->route('usuario')->id,
            'email' => 'required|email|max:320|unique:usuarios,email,' . $this->route('usuario')->id, 
            'password' => 'required|string|min:8', 
        ];
    }

    public function messages(): array
    {
        return [
            "nombre.required" => "El nombre es obligatorio",
            "nombre.max" => "El nombre no puede exceder 50 caracteres",
            "usuario.max" => "El usuario no puede exceder 25 caracteres",
            "usuario.min" => "El usuario no puede ser mas corto de 5 caracteres",
            "usuario.unique" => "El usuario ya está registrado",
            "usuario.required" => "El usuario es obligatorio",
            "email.required" => "El email es obligatorio",
            "email.unique" => "El email ya esta registrado con otro usuario",
            "email.max" => "El email no puede exceder 320 caracteres",
            "password.min" => "La contraseña debe ser de minimo 8 carácteres",
            "password.required" => "La contraseña es obligatoria",
        ];
    }
}
