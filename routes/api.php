<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('register', 'UserController@register');

Route::post('login', 'UserController@authenticate');

Route::get('/weapons', 'WeaponsController@GetWeapons');

Route::get('/weapons/{id?}', 'WeaponsController@GetWeapon');

Route::post('/weapons', 'WeaponsController@PostWeapon');

Route::patch('/weapons/{id?}', 'WeaponsController@PatchWeapon');

Route::delete('/weapons/{id?}', 'WeaponsController@DeleteWeapon');
