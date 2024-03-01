<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonaController;

Route::get('/', [PersonaController::class, 'index'])->name('home');

Route::get('/persona/index', [PersonaController::class,'index'])->name('persona.index');
Route::get('/persona/create', [PersonaController::class,'create'])->name('persona.create');
Route::post('/persona/store', [PersonaController::class,'store'])->name('persona.store');
Route::get('/persona/edit{persona}', [PersonaController::class,'edit'])->name('persona.edit');
Route::put('/persona/update{persona}', [PersonaController::class,'update'])->name('persona.update');
Route::delete('/persona/destroy/{persona}',[PersonaController::class, 'destroy'])->name('persona.destroy');
Route::get('/persona/show{persona}', [PersonaController::class,'show'])->name('persona.show');