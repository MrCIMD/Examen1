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
    return view('pages.home');
});

Route::get('/weapons/create', function () {
    return view('pages.weapons.create');
});

Route::get('/weapons', function () {
    return view('pages.weapons.index');
});

Route::get('/weapons/edit/{id?}', function ($id) {
    return view('pages.weapons.edit', ['id' => $id]);
});

Route::get('/weapons/delete/{id?}', function ($id) {
    return view('pages.weapons.delete', ['id' => $id]);
});

Route::group(['middleware' => ['jwt.verify']], function() {
    /*AÑADE AQUI LAS RUTAS QUE QUIERAS PROTEGER CON JWT*/
});