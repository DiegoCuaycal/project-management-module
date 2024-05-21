<?php

use App\Http\Controllers\RoleController;
use App\Http\Controllers\EntrevistaController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SettingsController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

    // Route::get('/', function () {
    //     return view('templade');
    // });
Route::view('/panel', 'panel.index')->name('panel');
Route::get('/login', function () {
    return view('auth.login');
});
Route::get('/401', function () {
    return view('pages.401');
});
Route::get('/404', function () {
    return view('pages.404');
});
Route::get('/500', function () {
    return view('pages.500');
});
Auth::routes();

Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('/roles', App\Http\Controllers\RoleController::class);
Route::resource('/entrevistas', App\Http\Controllers\EntrevistaController::class);
Route::resource('/clientes', App\Http\Controllers\ClienteController::class);
Route::resource('/proyectos', App\Http\Controllers\ProyectoController::class);
Route::resource('/tareas', App\Http\Controllers\TareaController::class);
Route::resource('/empleados', App\Http\Controllers\EmpleadoController::class);
Route::resource('/users', App\Http\Controllers\UserController::class);

Route::get('/profile', [UserController::class, 'showProfile'])->name('profile');
Route::get('/settings', [SettingsController::class, 'index'])->name('settings');