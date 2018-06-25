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
            'cod_processo' => 'required|max:15',
            'descricao' => 'required|max:150',
            'data' => 'required|date',
            'situacao' => 'required|max:50',
            'assunto' => 'required|max:50',
            'arquivo' => 'required|max:50',
            'unidade' => 'required|max:50',            
        
        ];
    }
    
       public function messages()
    {
        return [
            'cod_processo.required' => 'Campo Cod_processo é  obrigatório', 
            'data.required'=> 'Campo data é obrigatório',
            'descricao.required'=>'Campo descrição é obrigatório',
            'situacao.required'=> 'Campo situação é obrigatório',
            'assunto.required'=> 'Campo assunto é obrigatório',
            'arquivo.required'=> 'Campo arquivo é obrigatório',
            'unidade.required'=> 'Campo unidade é obrigatório'

        ];
    }
}
