<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CustomerRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules() //passa as regras de validação para a variável
    {
        return [
            'email' => 'required|email|exists:users,email',
            //
        ];
    }

    public function messages() //
    {
        return [
            'email.required' => 'O campo e-mail é obrigatório',
            'email.exists' => 'O e-mail não está cadastrado',
        
            //
        ];
    }
}