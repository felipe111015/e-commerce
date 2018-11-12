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

Route::get('/', 'IndexController@index')->name('index');

Route::get('/bolosDecorados', 'BolosDecorados@index')->name('bolosDecorados');

Route::get('/bolosSimples','BolosSimplesController@index')->name('bolosSimples');

Route::get('/DocesGourmet','DocesGourmetController@index')->name('docesGourmet');

Route::get('/DocesSimples','DocesSimplesController@index')->name('docesSimples');

Route::get ('/Salgados','SalgadosController@index')->name('salgados');

Route::get('/KitsFesta','KitsFestaController@index')->name('kits');

Route::get('/Carrinho','CarrinhoController@index')->name('carrinho');

Route::get('/teste','TesteController@index')->name('teste');

Route::get('/listar/{categoria}','BolosSimplesController@show')->name('listar');

Route::get('/produtos', 'ProdutosController@index')->name('produtos');