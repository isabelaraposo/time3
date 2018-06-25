<?php
namespace App\Http\Controllers;
use App\Unidade;
use Illuminate\Http\Request;
class UnidadeController extends Controller
{
    public function listar() {
        return Unidade::all();
        
    }
        public function criar() {
            
        
    }
        public function editar($id) {
            return Unidade::find($id);
        
    }
        public function remover() {
            $unidade = Unidade::find($id);
            $unidade->delete();
            return redirect('Unidade/listar');
        
    }
        public function salvar(Request $request) {
            $unidade = new Unidade();
            
            if($request->has('id')){
                $unidade = Unidade::fid($id);
            }
            
            $unidade->id = $request->id;
            $unidade->nome = $request->nome;
            $unidade->situacao = $request->situacao;
            $unidade->sigla = $request->sigla;
            $unidade->save();
            
            return('unidade/listar');
            
        
    }
}