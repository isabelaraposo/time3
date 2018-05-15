<?php
namespace App\Http\Controllers;
use App\Arquivo;
use Illuminate\Http\Request;
class ArquivoController extends Controller
{
    public function listar() {
        return Arquivo::all();
        
    }
        public function criar() {
            
        
    }
        public function editar($id) {
            return Arquivo::find($id);
        
    }
        public function remover() {
            $arquivo = Arquivo::find($id);
            $arquivo->delete();
            return redirect('Arquivo/listar');
        
    }
        public function salvar(Request $request) {
            $arquivo = new Arquivo();
            
            if($request->has('id')){
                $arquivo = Arquivo::fid($id);
            }
            
            $arquivo->id = $request->id;
            $arquivo->nome = $request->nome;
            $arquivo->save();
            
            return('arquivo/listar');
            
        
    }
}
