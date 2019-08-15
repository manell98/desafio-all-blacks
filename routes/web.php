<?php

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function(){
    
    // Rotas XmlController 
    Route::any('/xml/clientes-xml', 'Admin\XmlController@clientesXml')->name('torcedores.clientesXml');
    Route::any('/xml/cadastra/clientes-xml/{documento}', 'Admin\XmlController@cadastraClienteXml')->name('torcedores.cadastraClienteXml');
    Route::any('/xml/form-xml', 'Admin\XmlController@formXml')->name('torcedores.formXml');
    Route::any('/xml/upload-xml', 'Admin\XmlController@uploadXml')->name('torcedores.uploadXml');
    
    // Rotas TorcedorController 
    Route::any('/torcedores/excel', 'Admin\TorcedorController@export')->name('torcedores.excel');
    Route::any('/torcedores/email', 'Admin\TorcedorController@formMail')->name('torcedores.email');
    Route::any('/torcedores/email/envia', 'Admin\TorcedorController@enviaEmail')->name('torcedores.envia');
    Route::resource('torcedores', 'Admin\TorcedorController');
    
    // Rotas HomeController
    Route::get('/', 'Admin\HomeController@index')->name('admin');

});

// Rotas de Autenticação
Route::get('/', 'Auth\LoginController@login' );

Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');
// Fim Rotas de Autenticação