<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormateurGroupeRequest extends FormRequest
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
                'formateur_id' => 'required',
                'groupe_id' => 'required',
                'annee_formation' => 'required',
        ];
    }
    public function messages(): array
    {
        return [
            'formateur_id.required' => 'Le champ formateur est obligatoire.',
            'groupe_id.numeric' => 'Le champ groupe doit être un nombre.',
            'annee_formation.required' => 'Le champ annee de formation est obligatoire.',
        ];
    }
}
