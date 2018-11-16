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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/bares','EstabelecimentoController@bar')->name('bar');
Route::get('/lanchonetes','EstabelecimentoController@lanchonete')->name('lanchonete');
Route::get('/pizzarias','EstabelecimentoController@pizzaria')->name('pizzaria');
Route::get('/pubs','EstabelecimentoController@pub')->name('pub');
Route::get('/restaurantes','EstabelecimentoController@restaurante')->name('restaurante');
Route::get('/sorveterias','EstabelecimentoController@sorveteria')->name('sorveteria');
Route::get('/todos','EstabelecimentoController@todos')->name('todos');

Auth::routes();

Route::group(['middleware' => ['auth']],function (){

    Route::prefix('estabelecimento')->group(function (){
        Route::get('','EstabelecimentoController@index')->name('estab.index');
        Route::get('/novo','EstabelecimentoController@store')->name('estab.store');
        Route::post('/add','EstabelecimentoController@create')->name('estab.create');
        Route::get('/edit/{id}','EstabelecimentoController@edit')->name('estab.edit');
        Route::post('/update/{id}','EstabelecimentoController@update')->name('estab.update');
        Route::get('/delete/{id}','EstabelecimentoController@delete')->name('estab.delete');
    });

    Route::prefix('admin')->group(function (){
       Route::get('', 'AdminController@index')->name('admin.index');
       Route::get('/user','UserController@index')->name('user.index');
       Route::get('/user/edit/{$id}','UserController@edit')->name('user.edit');
       Route::post('/user/update/{$id}','UserController@update')->name('user.update');
       Route::get('/user/delete/{$id}', 'UserController@delete')->name('user.delete');
    });

    Route::prefix('perfil')->group(function (){
       Route::get('{id}','PerfilController@index')->name('perfil.index');
    });

});


Route::get('/home', 'HomeController@index')->name('home');

