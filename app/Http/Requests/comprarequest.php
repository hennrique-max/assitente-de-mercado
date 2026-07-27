<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class comprarequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return auth()->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name'=>'required|max:255|string',
            'number'=>'required|max:25|integer'
        ];
    }
    public function messages():array
    {
        return[
            'number.required'=>'este campo é obrigatorio',
            'number.max'=>'não temos o tanto necesario no estoque',
            'number.float'=>'aqui voce coloca a quantidade de produto',
            'name.required'=>'este campo é obrigatorio',
            'name.max'=>'tamanho do texto ultrapassa 255 caracteres',
            'name.string'=>'esse texto deve ser um texto',
        ];
    }
}
