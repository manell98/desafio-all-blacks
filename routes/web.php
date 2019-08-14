<?php

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function(){
    
    Route::any('/xml/clientes-xml', 'Admin\TorcedorController@clientesXml')->name('torcedores.clientesXml');
    Route::any('/xml/cadastra/clientes-xml/{email}', 'Admin\TorcedorController@cadastraClienteXml')->name('torcedores.cadastraClienteXml');
    Route::any('/xml/form-xml', 'Admin\TorcedorController@formXml')->name('torcedores.formXml');
    Route::any('/xml/upload-xml', 'Admin\TorcedorController@uploadXml')->name('torcedores.uploadXml');
    
    Route::any('/torcedores/excel', 'Admin\TorcedorController@export')->name('torcedores.excel');

    Route::resource('torcedores', 'Admin\TorcedorController');
    
    Route::get('/', 'Admin\HomeController@index')->name('admin');

});

Route::get('/', 'Auth\LoginController@login' );

Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');