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



Route::get('/', ['as'=>'site.home', 'uses'=>'Site\HomeController@index']);

/* Rotas da Demanda*/
Route::get('/tela/cadastrar', ['as'=>'site.cadastrar', 'uses'=>'Demanda\CadastroController@IndexNovoCadastro']);
Route::post('/cadastrar/demanda', ['as'=>'cadastrar.demanda', 'uses'=>'Demanda\CadastroController@CadastrarNovaDemanda']);
Route::get('/detalhes/demanda/{id}', ['as'=>'detalhes.demanda', 'uses'=>'Demanda\CadastroController@detalhes']);
Route::post('/editar/cadastro/demanda/{id}', ['as'=>'editar.demanda', 'uses'=>'Demanda\CadastroController@EditarDemanda']);
Route::get('/excluir/{id}', ['as'=>'excluir', 'uses'=>'Demanda\CadastroController@excluir']);