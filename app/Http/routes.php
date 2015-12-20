<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('personas', ['as' => 'personas', 'uses' => 'PersonaController@index']);