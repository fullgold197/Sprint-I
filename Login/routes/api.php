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
Route::post('/register', [App\Http\Controllers\Authcontroller::class, 'register']);

Route::middleware(['auth:api'])->group(function(){
    Route::get('/user', [App\Http\Controllers\Authcontroller::class, 'index']);
    Route::post('/logout', [App\Http\Controllers\Authcontroller::class, 'logout']);
});
