<?php

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::match(['post', 'get'], 'login', [
	'uses' => 'LoginController@authenticate',
	'as' => 'login'
]);

Route::get('logout', [
	'uses' => 'LoginController@logout',
	'as' => 'logout'
]);
