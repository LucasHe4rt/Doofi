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

Auth::routes();

Route::group(['middleware' => ['auth']],function (){

    Route::prefix('estabelecimento')->group(function (){
        Route::get('','EstabelecimentoController@index')->name('estab.index');
        Route::get('/novo','EstabelecimentoController@store')->name('estab.store');
        Route::get('/add','EstabelecimentoController@create')->name('estab.create');
    });

    Route::prefix('admin')->group(function (){
       Route::get('', 'AdminController@index')->name('admin.index');
    });
});


Route::get('/home', 'HomeController@index')->name('home');
