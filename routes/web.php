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

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');
Route::get('/barberos', 'HomeController@listarBarberos')->name('barberos');
Route::get('/perfil/{id}', 'HomeController@perfil')->name('perfil');
Route::get('/portafolio', 'PortafolioController@index')->name('portafolio');

Route::get('/password', 'HomeController@password')->name('barbero.users.password');
Route::post('/updatepassword', 'HomeController@updatePassword');

Route::get('/edit/{id}', 'BarberoUsersController@update')->name('edit');

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

Route::get('cliente/users/{user}/perfil','ClienteUsersController@perfil')->name('cliente.users.perfil');




Route::get('/barbero/users/inicio', function () {
    return view('barbero.users.inicio');
});