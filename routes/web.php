<?php


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route:: group(['prefix' => 'processo'], function(){
    Route::get('listar', 'ProcessoController@listar');
    Route::get('criar', 'ProcessoController@criar');
    Route::get('(id)/editar', 'ProcessoController@editar');
    Route::get('(id)/remover', 'ProcessoController@remover');
    Route::get('salvar', 'ProcessoController@salvar');
});