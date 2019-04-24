<?php

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
    return view('paginaPrincipal');
});

// Route::get('/login', 'LoginController@login');
// Route::post('/login', 'LoginController@confirmarLogin');
// Route::get('/registo', 'LoginController@registo');
// Route::post('/registo', 'LoginController@confirmarRegisto');


Route::get('/eventos/home', function () {
    return view('eventos.home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
