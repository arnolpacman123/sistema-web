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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => 'auth'], function() {
    Route::resource('users', App\Http\Controllers\UserController::class);
    Route::resource('permissions', App\Http\Controllers\PermissionController::class);
    Route::resource('roles', App\Http\Controllers\RoleController::class);
    Route::resource('projects', App\Http\Controllers\ProjectController::class);
    Route::resource('condominiums', \App\Http\Controllers\CondominumController::class);
    Route::resource('schedules', \App\Http\Controllers\ScheduleController::class);
    Route::resource('reports', \App\Http\Controllers\ReportController::class);
    Route::resource('departments', \App\Http\Controllers\DepartmentController::class);
});
