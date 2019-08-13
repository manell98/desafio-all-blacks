<?php

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function(){
    
    Route::any('/torcedores/clientes-xml', 'Admin\TorcedorController@clientesXml')->name('torcedores.clientesXml');
    Route::any('/torcedores/cadastra/clientes-xml/{email}', 'Admin\TorcedorController@cadastraClienteXml')->name('torcedores.cadastraClienteXml');
    Route::resource('torcedores', 'Admin\TorcedorController');
    Route::get('/', 'Admin\HomeController@index')->name('admin');

});

Route::get('/', 'Auth\LoginController@login' );
/******************************************************************
 * Rotas de Autenticação
 ******************************************************************/
// Authentication Routes...
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');
/******************************************************************
 * Rotas de Autenticação
 ******************************************************************/

