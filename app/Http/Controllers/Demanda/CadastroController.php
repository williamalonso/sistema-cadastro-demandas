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

        $dados->data_abertura = $req->data_abertura;
        $dados->data_conclusao = $req->data_conclusao;
        $dados->regiao_adm = $req->regiao_adm;
        $dados->tipo_demanda = $req->tipo_demanda;
        $dados->status_demanda = $req->status_demanda;
        $dados->demandante = $req->demandante;
        $dados->assessor_responsavel = $req->assessor_responsavel;
        $dados->observacao = $req->observacao;

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
        
        $data = $request->except('_token');
        
        if(Demanda::salva($id, $data)) {
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
