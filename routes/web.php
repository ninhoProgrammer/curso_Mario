<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactanosMailable;

Route::get('/', function () {
    return view('home'); // Cambia 'welcome' por la vista que desees mostrar en la página de inicio
})->name('home');

Route::resource('Asignaturas', CursoController::class)->parameters(['Asignaturas'=>'curso']) ->names('cursos');


Route::view('/Contacto', 'Contacto')->name('contact');

Route::post('/Contactanos', function (Illuminate\Http\Request $request) {
    $data = $request->only(['name', 'email', 'message']);

    // Renombra la clave 'message' a 'user_message'
    $data['name'] = $data['name'] ?? 'No especificado';
    $data['email'] = $data['email'] ?? 'No especificado';
    $data['user_message'] = $data['message'] ?? 'No especificado';
    unset($data['message']); // Elimina la clave original para evitar conflictos

    Mail::to('mariohm100293@gmail.com')->send(new ContactanosMailable($data));
    return redirect()->route('home')->with('success', 'Mensaje enviado correctamente.');
})->name('Contactanos');