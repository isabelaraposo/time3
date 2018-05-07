<?php

namespace App\Http\Controllers;

use app\Processo;
use Illuminate\Http\Request;

class ProcessoController extends Controller
{
    public function listar() {
        return Processo :: all();
        
    }
        public function criar() {
            
        
    }
        public function editar($id) {
            return Processo ::find($id);
        
    }
        public function remover() {
            $processo = Processo::find($id);
            $processo->delete();
            return redirect('processo/listar');
        
    }
        public function salvar(Request $request) {
            $processo = new Processo();
            
            if($request->has('id')){
                $processo = Processo::fid($id);
            }
            
            $processo->cod_processo = $request->cod_processo;
            $processo->descricao = $request->descricao;
            $processo->data = $request->data;
            $processo->situacao = $request->situacao;
            $processo->assunto = $request->assunto;
            $processo->arquivo = $request->arquivo;
            $processo->unidade = $request->unidade;
            $processo->save();
            
            return('processo/listar');
            
        
    }
}
