<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AnamneseRequest extends FormRequest
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
            'local_do_atendimento' => 'required',
            'nome' => 'required',
            'data' => 'required',
            'cor' => 'required',
            'estado_civil' => 'required',
            'profissao' => 'required',
            'nacionalidade' => 'required',
            'naturalidade' => 'required',
            'procedencia' => 'required',
            'endereco' => 'required',
        ];
    }
}
