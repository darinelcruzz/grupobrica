<?php

Route::group(['prefix' => 'runa', 'as' => 'runa.'], function () {

	Route::group(['prefix' => 'clientes', 'as' => 'client.'], function () {
		$ctrl = 'Runa\ClientController';

		Route::get('/', usesas($ctrl, 'index'));
		Route::get('crear', usesas($ctrl, 'create'));
		Route::post('crear', usesas($ctrl, 'store'));
		Route::get('editar/{rClient}', usesas($ctrl, 'edit'));
		Route::post('editar/{rClient}', usesas($ctrl, 'update'));
		Route::get('borrar/{rClient}', usesas($ctrl, 'destroy'));
	});

	Route::group(['prefix' => 'usuarios', 'as' => 'user.'], function () {
		$ctrl = 'Runa\UserController';

		Route::get('/', usesas($ctrl, 'index'));
		Route::get('crear', usesas($ctrl, 'create'));
		Route::post('crear', usesas($ctrl, 'store'));
		Route::get('editar/{user}', usesas($ctrl, 'edit'));
		Route::post('editar/{user}', usesas($ctrl, 'update'));
		Route::get('borrar/{user}', usesas($ctrl, 'destroy'));
	});
	
	Route::get('/', function () {
	    return view('runa.root');
	});

	Route::get('pruebas', function () {
	    return view('runa.tests');
	});
});