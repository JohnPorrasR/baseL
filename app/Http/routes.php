<?php

Route::get('/', function () {
    return view('index');
});

Route::get('personas', ['as' => 'personas', 'uses' => 'PersonaController@index']);

Route::get('menu', ['as' => 'menu', 'uses' => 'MenuController@index']);