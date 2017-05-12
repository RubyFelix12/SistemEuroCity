<?php

Auth::routes();

Route::get('/', 'EventoController@mostrar');

Route::get('/home', 'HomeController@index');

Route::post('/guardarCliente', 'clientesController@guardarCliente');

Route::get('/consultarClientes', 'clientesController@consultarClientes');

Route::get('clientesPDF', 'clientesController@clientesPDF');

Route::get('/consultarAdmin', 'adminController@consultarAdmin');

Route::get('/registraruser', 'registrarUsuarioController@registraruser');

Route::get('/eliminarAdmin/{id}', 'adminController@eliminarAdmin');	

Route::post('/guardarAdmin', 'adminController@guardarAdmin');

Route::get('/personalizacion','adminController@personalizacion');

Route::post('/guardarEvento','EventoController@guardar');

Route::get('/eliminarEvento/{id}', 'EventoController@eliminarEvento');	

Route::get('/mostrarEvento', 'EventoController@mostrarEvento');

Route::get('editarEvento/{id}', 'EventoController@editarEvento');

Route::post('actualizarEvento/{id}', 'EventoController@actualizarEvento');
