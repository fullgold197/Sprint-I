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

Route::post('/login', [App\Http\Controllers\Authcontroller::class, 'login']);


Route::middleware(['auth:api'])->group(function(){
    Route::get('/user', [App\Http\Controllers\Authcontroller::class, 'datospersonales']);
    Route::get('/trayectoriaaca', [App\Http\Controllers\Authcontroller::class, 'trayectoriaaca']);
    Route::put('/updatedp/{matricula}', [App\Http\Controllers\Authcontroller::class, 'updatedp']);
    Route::get('/trayectoriapro', [App\Http\Controllers\Authcontroller::class, 'trayectoriapro']);
    Route::post('/logout', [App\Http\Controllers\Authcontroller::class, 'logout']);
});
