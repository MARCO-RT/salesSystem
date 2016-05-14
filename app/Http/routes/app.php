<?php

//composer dumpautoload

Route::get('/', 'PageController@index');
Route::get('/categories/{slug}', 'PageController@categories');
Route::get('/product/{slug}', 'SingleController@getOneProduct');
Route::get('/post', 'PageController@post');

Route::get('/login', function () {
    return view('layouts/login');
});


Route::post('login', 'AuthController@login');