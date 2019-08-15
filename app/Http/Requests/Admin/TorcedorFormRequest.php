<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class TorcedorFormRequest extends FormRequest
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
            'email' => "email|unique:torcedores,email,{$this->segment(3)},id",
        ];
    }
    
     public function messages(){
        return [
          'email.unique' => 'O e-mail informado já está cadastrado!',  
        ];
    }
}
