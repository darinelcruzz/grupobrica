<?php

Route::group(['prefix' => 'runa', 'as' => 'runa.'], function () {
	
	Route::get('/', function () {
	    return view('runa.root');
	});

	Route::get('pruebas', function () {
	    return view('runa.tests');
	});
});