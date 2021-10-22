<?php

namespace App\Http\Controllers\Demanda;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;
use DB;
use Auth;
use App\Model\Demanda;

class CadastroController extends Controller
{
    public function IndexNovoCadastro(){
        return view('demanda.cadastrar');
    }

    public function CadastrarNovaDemanda(Request $req){
        
        $dados = new Demanda();

        $dados->Nome = $req->Nome;
        $dados->Telefone = $req->Telefone;
        $dados->DataVisita = $req->DataVisita;
        $dados->Demanda = $req->Demanda;
        $dados->Cidade = $req->Cidade;
        $dados->Sei = $req->Sei;
        $dados->DataConclusao = $req->DataConclusao;
        $dados->Andamento = $req->Andamento;
        $dados->Observacoes = $req->Observacoes;

        if($dados->save()){ //salva os dados na tabela
            Session::flash('message', 'A Demanda foi cadastrada com sucesso!');
            Session::flash('alert-class', 'alert-success');
        } else {
            Session::flash('message', 'Erro ao adicionar demanda!');
            Session::flash('alert-class', 'alert-danger');
        }

        return redirect()->route('site.home');

    }
    
    public function detalhes($id){
        $registro = Demanda::dados($id);
        return view('demanda.editardemanda', compact('registro'));
    }

    public function EditarDemanda(Request $request, $id){
        
        //$data = $request->all();
        
        $data = $request->except('_token');
        $n_id = $id;

        if(Demanda::salva($n_id, $data)) {
            Session::flash('message', 'A demanda foi atualizada com sucesso!');
            Session::flash('alert-class', 'alert-success');
        }else{
            Session::flash('message', 'Erro ao atualizar demanda!');
            Session::flash('alert-class', 'alert-danger');
        }
        
        return redirect()->route('site.home');
    }

    public function excluir($id){
        
        if( Demanda::find($id)->delete() ){
            Session::flash('message', 'A demanda foi deletada com sucesso!');
            Session::flash('alert-class', 'alert-success');
          }
          else{
            Session::flash('message', 'Erro ao deletar demanda!');
            Session::flash('alert-class', 'alert-danger');
          }
        return redirect()->route('site.home');
    }
}
