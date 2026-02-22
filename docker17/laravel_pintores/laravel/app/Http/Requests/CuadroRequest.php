<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CuadroRequest extends FormRequest
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
            'nombreCuadro' => ['required', 'string', 'max:255'],
            'pintor_id' => ['required', 'exists:pintores,id'],
            'imagen' => ['nullable', 'image', 'mimes:jpeg,jpg,png,gif', 'max:2048']
        ];
    }

    public function messages(): array
    {
        return [
            'nombreCuadro.required' => 'El nombre del cuadro es obligatorio',
            'pintor_id.required' => 'Debes seleccionar un pintor',
            'pintor_id.exists' => 'El pintor seleccionado no existe',
            'imagen.image' => 'El archivo debe ser una imagen',
            'imagen.max' => 'La imagen no puede superar 2MB'
        ];
    }
}
