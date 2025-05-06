<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('Asignaturas', CursoController::class)->parameters(['Asignaturas'=>'curso']) ->names('cursos');