<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/teste', function(){
	echo '<h1>Cesar</h1>';
})->middleware('auth');

Route::group(['prefix' => 'admin'],function(){
	//Route::get('/', 'HomeController@index');
	//produtos
	Route::get('/produtos', 'ProductsController@index')->middleware('auth');
	Route::get('/produtos/adicionar', 'ProductsController@adicionar')->middleware('auth');
	Route::get('/produtos/editar/{id}', 'ProductsController@find')->middleware('auth');

	//Route::get('/produtos/adicionar', 'HomeController@index');
	//Route::get('/produtos/congelar', 'HomeController@index');
	

});
Route::group(['prefix' => 'ajax'], function() {

    Route::get('update', 'ProductsController@update');
    Route::get('novoProduto', 'ProductsController@novoProduto');
});

Auth::routes();

Route::get('/home', 'HomeController@index');
