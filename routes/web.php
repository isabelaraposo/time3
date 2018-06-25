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
Route::group(['prefix' => 'processo'], function () {
    Route::get('listar', 'ProcessoController@listar');
    Route::get('criar', 'ProcessoController@criar');
    Route::get('{id}/editar', 'ProcessoController@editar');
    Route::get('{id}/remover', 'ProcessoController@remover');
    Route::post('salvar', 'ProcessoController@salvar');
}); 
Route:: group(['prefix' => 'assunto'], function(){
    Route::get('listar', 'AssuntoController@listar');
    Route::get('criar', 'AssuntoController@criar');
    Route::get('(id)/editar', 'AssuntoController@editar');
    Route::get('(id)/remover', 'AssuntoController@remover');
    Route::get('salvar', 'AssuntoController@salvar');
});
Route:: group(['prefix' => 'Arquivo'], function(){
    Route::get('listar', 'ArquivoController@listar');
    Route::get('criar', 'ArquivoController@criar');
    Route::get('(id)/editar', 'ArquivoController@editar');
    Route::get('(id)/remover', 'ArquivoController@remover');
    Route::get('salvar', 'ArquivoController@salvar');
});
Route::group(['middleware'=>['web']],function(){
    Route::resource('processo','ProcessoController');
    
});