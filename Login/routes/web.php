<?php

use App\Http\Controllers\CambiarContrasenaController;
use App\Http\Controllers\DatosPersonalesController;
use App\Http\Controllers\EgresadosAdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PruebaController;
use Illuminate\Support\Facades\Route;
use Spatie\Permission\Models\Permission;

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



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('/perfil', PruebaController::class)->middleware('auth');
Route::resource('/datospersonales', DatosPersonalesController::class)->middleware('auth');
Route::resource('/cambiarcontrasena', CambiarContrasenaController::class)->middleware('auth');
Route::resource('/admin/egresado', EgresadosAdminController::class)->middleware('auth');

Route::resource('/permisos', App\Http\Controllers\PermissionController::class);

Route::view('/profile/edit', 'profile.edit')->middleware('auth');
Route::view('/profile/password', 'profile.password')->middleware('auth');

 Route::middleware(['auth','isAdmin'])->group( function (){

    Route::get('/admin', function () {
        return view('admin.home');

 });
});
