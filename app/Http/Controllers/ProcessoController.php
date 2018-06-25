<?php

namespace App\Http\Controllers;

use App\Processo;
use Illuminate\Http\Request;
use App\Http\requests\ProcessoRequest;

class ProcessoController extends Controller
{
    public function _construct(){
       $this->middleware('auth');
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
        if ($request->has('id')){
            $processo = Processo::find('id');
        }
            
            $processo->cod_processo = $request->cod_processo;
            $processo->descricao = $request->descricao;
            $processo->data = $request->data;
            $processo->situacao = $request->situacao;
            $processo->assunto = $request->assunto;
            $processo->arquivo = $request->arquivo;
            $processo->unidade = $request->unidade;
            $processo->save();
                    
            return redirect ('processo/listar');
         
            
           }
}


