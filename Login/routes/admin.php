<?php

use App\Http\Controllers\CambiarContrasenaController;
use App\Http\Controllers\DatosPersonalesController;
use App\Http\Controllers\EgresadosAdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PruebaController;
use Illuminate\Support\Facades\Route;
use Spatie\Permission\Models\Permission;

Route::middleware(['auth', 'isAdmin'])->group(function () {

    Route::get('/admin', function () {
        return view('admin.home');
    });
});
