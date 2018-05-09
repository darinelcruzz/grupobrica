<?php

Route::get('/', function () {
    return view('lte.root');
})->name('home');
