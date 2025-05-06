<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCurso extends FormRequest
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
            'nombre' => 'required|string|max:255',
            'descripcion' => 'required|string|max:1000',
            'categoria' => 'required|string|max:255',
        ];
    }

    public function messages()
    {
        return [
            'nombre.required' => 'El nombre del curso es obligatorio.',
            'descripcion.required' => 'La descripción del curso es obligatoria.',
            'categoria.required' => 'La categoría del curso es obligatoria.',
        ];
    }
    public function attributes()
    {
        return [
            'nombre' => 'nombre',
            'descripcion' => 'descripción',
            'categoria' => 'categoría',
        ];
    }
    
}
