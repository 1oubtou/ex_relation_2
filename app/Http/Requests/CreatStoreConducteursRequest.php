<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreatStoreConducteursRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'nom' => 'required|max:10',
            'prenom' => 'required|max:10',
            'lage' => 'required|integer|between:20,60',
            'n_cin' => 'required|max:10',
            'adresse' => 'required|max:50',
            'telephone' => 'required|max:20',
        ];
    }
    public function messages(){
        return [
            'nom.max' => 'Le nom est supérieur à 10',
            'prenom.max' => 'Le prenom est supérieur à 10',
            'lage.between' => 'Lâge doit être compris entre 20 et 60 ans',
            'n_cin.regex' => 'Veuillez entrer un N° CIN valide',
            'adresse.max' => 'Le nom est supérieur à 50',
            'telephone.max' => 'sil vous plaît entrer un numéro de téléphone valide',
        ];
    }
}
