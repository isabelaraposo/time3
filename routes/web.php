<?php

Route::get('/', function () {
    return view('welcome');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route:: group(['prefix' => 'assunto'], function(){
    Route::get('listar', 'AssuntoController@listar');
    Route::get('criar', 'AssuntoController@criar');
    Route::get('(id)/editar', 'AssuntoController@editar');
    Route::get('(id)/remover', 'AssuntoController@remover');
    Route::get('salvar', 'AssuntoController@salvar');
});