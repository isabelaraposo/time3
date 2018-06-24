<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProcessoRequest extends FormRequest
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
            'cod_processo' => 'required|numeric',
            'descricao' => 'required|string',
            'data' => 'required|date',
            'situacao' => 'required|string',
            'assunto' => 'required|string',
            'arquivo' => 'required|string',
            'unidade' => 'required|string',            
        
        ];
    }
    
       public function messages()
    {
        return [
            'cod_processo.required' => 'Campo Obrigatório', 
            'data.required'=> 'Campo Obrigatório',
            'situacao.required'=> 'Campo Obrigatório',
            'assunto.required'=> 'Campo Obrigatório',
            'arquivo.required'=> 'Campo Obrigatório',
            'unidade.required'=> 'Campo Obrigatório'

        ];
    }
}
