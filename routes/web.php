<?php

use App\Http\Controllers\FormulirController; // Pastikan ini menggunakan huruf kapital
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('komponen.app');
})->name('dashboard');

Route::resource('formulir', FormulirController::class); // Pastikan ini menggunakan huruf kapital
Route::get('/formulir/create', [FormulirController::class, 'create'])->name('formulir.create');
Route::get('/formulir/{id}/edit', [FormulirController::class, 'edit'])->name('formulir.edit');
     