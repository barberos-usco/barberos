<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('cliente/users', 'ClienteUsersController');

Route::resource('barbero/users', 'BarberoUsersController', [
    'as' => 'barbero'
]);

Route::resource('cliente/users', 'ClienteUsersController', [
    'as' => 'cliente'
]);


Route::get('barbero/users/{user}/edit/especialidad', 'BarberoUsersController@especialidad')->name('barbero.users.edit.especialidad');


Route::get('barbero/users/{user}/edit/servicios', 'BarberoUsersController@servicio')->name('barbero.users.edit.servicios');

Route::get('barbero/users/{user}/perfil','BarberoUsersController@perfil')->name('barbero.users.perfil');




Route::get('/barbero/users/inicio', function () {
    return view('barbero.users.inicio');
});