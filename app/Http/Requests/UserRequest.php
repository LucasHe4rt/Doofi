<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'name'     => 'required|string|max:255',
            'email'    => 'required|unique:users|max:255|string',
            'password' => 'required|min:6'
        ];
    }

    public function messages(){
        return[
            '*.required' => 'Este campo é obrigatório.',
            'email.unique' => 'Este email já esta em uso.',
            'password.min' => 'O mínimo de caracteres é 6.'
        ];
    }
}
