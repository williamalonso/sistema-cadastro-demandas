<?php

namespace App\Http\Controllers\Login;
use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Session;

class LoginController extends Controller
{
    public function index() { 

        return view('login.index'); // retorna a página de fazer login

    }

    public function entrar(Request $req) { 

        $dados = $req->all(); 

        if(Auth::attempt( ['email'=>$dados['email'], 'password'=>$dados['password'] ] ) ) { //Se o usuário tem acesso 

            Session::flash('message', 'Logado com sucesso!');
            Session::flash('alert-class', 'alert-success');

            return redirect()->route('site.home'); // redireciona para tela inicial
            

        }else { 

            Session::flash('message', 'Login ou senha incorretos!');
            Session::flash('alert-class', 'alert-danger');

            return redirect()->route('site.login'); // redireciona para realizar login
            

        } 

    }

    public function sair() { 

        Auth::logout();
        return redirect()->route('site.login'); // redireciona para realizar login

    } 

    public function CadastrarNovoUsuario() {

        return view('login.cadastrar'); // retorna a página de criar nova conta

    }

    public function SalvarNovoUsuario(Request $req) {

        //User::atualiza_id(); //reseta o auto_increment do "id"

        $user = $req->except('_token', '_method'); //dd($user);
        
        $user['email'] = $req->email;
        $user['password'] = bcrypt($req->password);
        
        if(User::where('email', '=', $user['email'])->count()) { // verifica se o email já está cadastrado
            User::where('email', '=', $user['email'])->update($user); // se estiver cadastrado, atualiza com a nova senha digitada
            Session::flash('message', 'Login alterado com sucesso!');
            Session::flash('alert-class', 'alert-success');
        } else {
            User::create($user);
            Session::flash('message', 'Conta criada com sucesso!');
            Session::flash('alert-class', 'alert-success');
        }
        
        return redirect()->route('site.login'); // redireciona para realizar login
    }

}
