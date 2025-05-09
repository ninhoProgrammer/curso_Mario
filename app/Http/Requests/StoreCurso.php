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
            'slug' => 'required|string|max:255|unique:cursos',
            // 'slug' => 'required|string|max:255|unique:cursos,slug,' . $this->curso->id,
            'descripcion' => 'required|string|max:1000',
            'categoria' => 'required|string|max:255',
        ];
    }

    public function messages()
    {
        return [
            'nombre.required' => 'El nombre del curso es obligatorio.',
            'slug.required' => 'El slug del curso es obligatorio.',
            'slug.unique' => 'El slug del curso ya existe.',
            'descripcion.required' => 'La descripción del curso es obligatoria.',
            'categoria.required' => 'La categoría del curso es obligatoria.',
        ];
    }
    public function attributes()
    {
        return [
            'nombre' => 'nombre',
            'slug' => 'slug',
            'descripcion' => 'descripción',
            'categoria' => 'categoría',
        ];
    }
    
}
