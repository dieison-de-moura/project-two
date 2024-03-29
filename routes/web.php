<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', ['as' => 'site.home', 'uses' => 'HomeController@index']);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/abrigo/cadastrar-morador', 'abrigoController@index');
Route::get('/abrigo/lista-moradores', 'abrigoController@lista');
Route::get('/abrigo/detalhar-modador/{id}', ['as' => 'detalhar.morador', 'uses' => 'abrigoController@detalheMorador']);
Route::get('/abrigo/perfil-modador/{id}', ['as' => 'perfil.morador', 'uses' => 'abrigoController@perfilMorador']);
Route::post('/abrigo/cadastrar-morador', ['as' => 'abrigo.cadastrar-morador', 'uses' => 'abrigoController@createMorador']); //salvar cadastro
Route::post('/abrigo/atualizar-modador/{id}', ['as' => 'atualizar.morador', 'uses' => 'abrigoController@atualizarMorador']);
Route::post('/abrigo/deletar-morador', ['as' => 'deletar-morador', 'uses' => 'abrigoController@deletarMorador']);

Route::get('/perfil/meu-perfil', 'userController@index');
Route::post('/perfil/atualizar-cadastro', ['as' => 'perfil.atualizar-cadastro', 'uses' => 'userController@atualizaCadastro']);
Route::post('/perfil/deletar-cadastro', ['as' => 'deletar-cadastro', 'uses' => 'userController@deletarCadastro']);
