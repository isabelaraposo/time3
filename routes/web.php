<?php
Route::get('/', function () {
    return view('welcome');
});
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route:: group(['prefix' => 'Arquivo'], function(){
    Route::get('listar', 'ArquivoController@listar');
    Route::get('criar', 'ArquivoController@criar');
    Route::get('(id)/editar', 'ArquivoController@editar');
    Route::get('(id)/remover', 'ArquivoController@remover');
    Route::get('salvar', 'ArquivoController@salvar');
});