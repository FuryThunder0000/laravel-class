<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormateurRequest extends FormRequest
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
            
                'matricule' => 'required|numeric',
                'nom' => 'required|alpha',
                'prenom' => 'required|alpha_num',
                'genre' => 'required|in:M,F',
                'date_naissance' => 'required|date',
                'salaire' => 'required|numeric|min:3000',
            
        ];
    }
    public function messages(): array
    {
        return [
            'matricule.required' => 'Le champ Matricule est obligatoire.',
            'matricule.numeric' => 'Le champ Matricule doit être un nombre.',
            'nom.required' => 'Le champ Nom est obligatoire.',
            'nom.alpha' => 'Le champ Nom doit contenir uniquement des lettres.',
            'prenom.required' => 'Le champ Prénom est obligatoire.',
            'prenom.alpha_num' => 'Le champ Prénom doit contenir des lettres et/ou des chiffres.',
            'genre.required' => 'Le champ Genre est obligatoire.',
            'genre.in' => 'Le champ Genre doit être soit "F" ou "M".',
            'date_naissance.required' => 'Le champ Date de naissance est obligatoire.',
            'date_naissance.date' => 'Le champ Date de naissance doit être une date valide.',
            'salaire.required' => 'Le champ Salaire est obligatoire.',
            'salaire.numeric' => 'Le champ Salaire doit être un nombre.',
            'salaire.min' => 'Le champ Salaire doit être d\'au moins 3000.',
        ];
    }
}
