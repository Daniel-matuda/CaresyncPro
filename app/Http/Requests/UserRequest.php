<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
    public function rules()
    {
        $userId = $this->route('user'); // Obtém o ID do usuário da rota, se aplicável
    
        return [
            'firstName' => 'required|string|max:255',
            'lastName' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $userId, // Ignora o email do usuário atual
            'password' => 'nullable|string', // Permite que o password seja opcional
            'nascimento' => 'required|date',
            'sexo' => 'required|string|in:masculino,feminino,outro',
            'endereco' => 'required|string|max:255',
            'telefone' => 'required|string|max:30',
            'especialidade' => 'nullable|string|max:255',
            'cep' => 'nullable|string|max:255',
            'cidade' => 'nullable|string|max:255',
            'uf' => 'nullable|string|max:255',
            'nr_sus' => 'nullable|string|max:255',
        ];
    }
}