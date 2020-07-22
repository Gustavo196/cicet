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
    return view('login');
});

Route::get('/user', function () {
    $usuarios= array(
        'nombre'=>'nombreusuario',
        'apellidos'=>'apellidousuario'
);

    return view('users.indexuser')-> with('usuarios',$usuarios);
});

Route::get('/user/edit/{user}', function ($user) {
    return view('/users/edit/', compact(user));
});