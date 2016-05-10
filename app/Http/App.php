<?php


Route::get('/', 'PageController@index');
Route::get('/categories/{id}', 'PageController@categories');
Route::get('/login', function () {
    return view('layouts/login');
});
Route::post('login', 'AuthController@login');