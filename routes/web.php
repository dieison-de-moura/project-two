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
Route::post('/abrigo/cadastrar-morador', ['as' => 'abrigo.cadastrar-morador', 'uses' => 'abrigoController@createMorador']); //salvar cadastro
