<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Projeto DinDigital
*/

Route::namespace('Api')->group( function(){

    Route::post('auth/login', 'AuthController@login');

    Route::post('/cliente/novo', 'ClienteController@create');
    Route::post('/user/novo', 'UserController@create');
    Route::post('/plano/assinar', 'ChaveController@add');
    Route::put('/cliente/update/{id}', 'ClienteController@update');
    Route::delete('/cliente/delete/{id}', 'ClienteController@delete');

    Route::get('/clientes', 'ClienteController@show');
    Route::get('/clientes/{id}', 'ClienteController@select');

    #Route::get('users', 'UserController@index');

});

Route::group(['middleware' => ['apiJwt']], function(){
    Route::get('users', 'Api\\UserController@index');
});
