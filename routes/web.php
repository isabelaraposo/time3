<?php
Route::get('/', function () {
    return view('welcome');
});
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route:: group(['prefix' => 'unidade'], function(){
    Route::get('listar', 'UnidadeController@listar');
    Route::get('criar', 'UnidadeController@criar');
    Route::get('(id)/editar', 'UnidadeController@editar');
    Route::get('(id)/remover', 'UnidadeController@remover');
    Route::get('salvar', 'UnidadeController@salvar');
});