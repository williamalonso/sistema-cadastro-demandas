<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


/* Rotas da Demanda*/
Route::group([ 'middleware' => 'auth' ], function(){
    Route::get('/home', ['as'=>'site.home', 'uses'=>'Site\HomeController@index']);
    Route::get('/tela/cadastrar', ['as'=>'site.cadastrar', 'uses'=>'Demanda\CadastroController@IndexNovoCadastro']);
    Route::post('/cadastrar/demanda', ['as'=>'cadastrar.demanda', 'uses'=>'Demanda\CadastroController@CadastrarNovaDemanda']);
    Route::get('/detalhes/demanda/{id}', ['as'=>'detalhes.demanda', 'uses'=>'Demanda\CadastroController@detalhes']);
    Route::post('/editar/cadastro/demanda/{id}', ['as'=>'editar.demanda', 'uses'=>'Demanda\CadastroController@EditarDemanda']);
    Route::get('/excluir/{id}', ['as'=>'excluir', 'uses'=>'Demanda\CadastroController@excluir']);
});

/* Login */
Route::get('/', ['as'=>'site.login', 'uses'=>'Login\LoginController@index']);
Route::get('/login/cadastrar', ['as'=>'site.login.cadastrar', 'uses'=>'Login\LoginController@CadastrarNovoUsuario']);
Route::post('/salvarusuario', ['as'=>'site.salvarusuario', 'uses'=>'Login\LoginController@SalvarNovoUsuario']);
Route::post('/login/entrar', ['as'=>'site.login.entrar', 'uses'=>'Login\LoginController@entrar']);
Route::get('/login/sair', ['as'=>'site.login.sair', 'uses'=>'Login\LoginController@sair']);
