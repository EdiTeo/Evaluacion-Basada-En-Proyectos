<?php

use App\Http\Controllers\DocenteController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;
use Spatie\Permission\Models\Role;

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
    
    Route::get('/docente/estudiantes', [DocenteController::class, 'showEstudiantes'])->name('docente.estudiantes');
});



