<?php

use App\Http\Controllers\DocenteController;
use App\Http\Controllers\EstudianteController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // Grupo de rutas que solo el rol 'super-admin' puede acceder
    Route::middleware(['role:super-admin'])->group(function () {
        Route::resource('permissions', PermissionController::class);
        Route::get('permissions/{permissionId}/delete', [PermissionController::class, 'destroy']);

        Route::resource('roles', RoleController::class);
        Route::get('roles/{roleId}/delete', [RoleController::class, 'destroy']);
        Route::get('roles/{roleId}/give-permissions', [RoleController::class, 'addPermissionToRole']);
        Route::put('roles/{roleId}/give-permissions', [RoleController::class, 'givePermissionToRole']);

        Route::resource('users', UserController::class);
        Route::get('users/{userId}/delete', [UserController::class, 'destroy']);

        Route::resource('docentes', DocenteController::class);
        Route::resource('estudiantes', EstudianteController::class);
    });

    
});



/* Route::resource('permissions', PermissionController::class);
Route::get('permissions/{permissionId}/delete', [PermissionController::class, 'destroy']);

Route::resource('roles', RoleController::class);
Route::get('roles/{roleId}/delete', [RoleController::class, 'destroy']);

Route::get('roles/{roleId}/give-permissions', [RoleController::class, 'addPermissionToRole']);
Route::put('roles/{roleId}/give-permissions', [App\Http\Controllers\RoleController::class, 'givePermissionToRole']);

Route::resource('users', UserController::class);
Route::get('users/{userId}/delete', [UserController::class, 'destroy']);
 */