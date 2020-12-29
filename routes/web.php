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

Route::get('/', ['uses' => 'App\Http\Controllers\HomeController@index', 'as' => 'home.index']);


Auth::routes();

Route::get('/home', ['uses' => 'App\Http\Controllers\HomeController@index', 'as' => 'home.index']);
Route::get('/marcas/index', ['uses' => 'App\Http\Controllers\MarcaController@index', 'as' => 'marcas.index']);
Route::get('/marcas/create', ['uses' => 'App\Http\Controllers\MarcaController@create', 'as' => 'marcas.create']);
Route::post('/marcas/store', ['uses' => 'App\Http\Controllers\MarcaController@store', 'as' => 'marcas.store']);
//Route::get('/marcas/exibir/{id}', ['uses' => 'App\Http\Controllers\MarcaController@exibir', 'as' => 'marcas.exibir']);
Route::get('/marcas/edit/{id}', ['uses' => 'App\Http\Controllers\MarcaController@edit', 'as' => 'marcas.edit']);
Route::put('/marcas/update/{id}', ['uses' => 'App\Http\Controllers\MarcaController@update', 'as' => 'marcas.update']);
Route::get('/marcas/delete/{id}', ['uses' => 'App\Http\Controllers\MarcaController@delete', 'as' => 'marcas.delete']);
Route::get('/marcas/destroy/{id}', ['uses' => 'App\Http\Controllers\MarcaController@destroy', 'as' => 'marcas.destroy']);
Route::get('/marcas/buscar', ['uses' => 'App\Http\Controllers\MarcaController@buscar', 'as' => 'marcas.buscar']);
Route::get('/marcas/produtos/{id}', ['uses' => 'App\Http\Controllers\MarcaController@produtos', 'as' => 'marcas.produtos']);


Route::get('/produtos/index', ['uses' => 'App\Http\Controllers\ProdutoController@index', 'as' => 'produtos.index']);
Route::get('/produtos/create', ['uses' => 'App\Http\Controllers\ProdutoController@create', 'as' => 'produtos.create']);
Route::get('/produtos/create', ['uses' => 'App\Http\Controllers\ProdutoController@create', 'as' => 'produtos.create']);
Route::post('/produtos/store', ['uses' => 'App\Http\Controllers\ProdutoController@store', 'as' => 'produtos.store']);
Route::get('/produtos/exibir/{id}', ['uses' => 'App\Http\Controllers\ProdutoController@exibir', 'as' => 'produtos.exibir']);
Route::get('/produtos/edit/{id}', ['uses' => 'App\Http\Controllers\ProdutoController@edit', 'as' => 'produtos.edit']);
Route::put('/produtos/update/{id}', ['uses' => 'App\Http\Controllers\ProdutoController@update', 'as' => 'produtos.update']);
Route::get('/produtos/delete/{id}', ['uses' => 'App\Http\Controllers\ProdutoController@delete', 'as' => 'produtos.delete']);
Route::get('/produtos/destroy/{id}', ['uses' => 'App\Http\Controllers\ProdutoController@destroy', 'as' => 'produtos.destroy']);
Route::get('/produtos/buscar', ['uses' => 'App\Http\Controllers\ProdutoController@buscar', 'as' => 'produtos.buscar']);

