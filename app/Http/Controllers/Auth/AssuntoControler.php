<?php
namespace App\Http\Controllers;
use App\Assunto;
use Illuminate\Http\Request;
class AssuntoController extends Controller
{
    public function listar() {
        return Assunto::all();
        
    }
        public function criar() {
            
        
    }
        public function editar($id) {
            return Assunto::find($id);
        
    }
        public function remover() {
            $assunto = Assunto::find($id);
            $assunto->delete();
            return redirect('Assunto/listar');
        
    }
        public function salvar(Request $request) {
            $assunto = new Assunto();
            
            if($request->has('id')){
                $assunto = Assunto::fid($id);
            }
            
            $assunto->nome = $request->nome;
            $assunto->situacao = $request->situacao;
            $assunto->save();
            
            return('assunto/listar');
            
        
    }
}
