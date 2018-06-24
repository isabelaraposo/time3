<?php

namespace App\Http\Controllers;

use App\Processo;
use Illuminate\Http\Request;
use App\Http\requests\ProcessoRequest;

class ProcessoController extends Controller
{
    public function _construct(){
       //$this->middleware('auth');
    }
    public function listar() {
        return view('processo.listar', ['processos' => Processo::paginate(5)]);
            }
        
        public function criar() {
            return view('processo.criar' );
        
    }
         public function editar($id){ 

        return view('processo.editar',['processos' => Processo::find($id)]);
        
    }
    
        public function remover($id) {
            $processo = Processo::find($id);
            $processo->delete();
            return redirect('processo/listar');
        
    }
    public function salvar(ProcessoRequest $request) {
        $processo = new Processo();
        $hasprocesso = Processo::find($request->input('id'));
        if ($hasprocesso != null){
            $processo = Processo::find($request->input('id'));
            $processo->cod_processo = $request->input('cod_processo');
            $processo->descricao = $request->input('descricao');
            $processo->data = $request->input('data');
            $processo->situacao = $request->input('situacao');
            $processo->assunto = $request->input('assunto');
            $processo->arquivo = $request->input('arquivo');
            $processo->unidade = $request->input('unidade');
            $processo->save();
        }

            
            return redirect ('processo/listar');
         
            
           }
}


