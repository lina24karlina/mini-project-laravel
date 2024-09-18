<?php

use App\Http\Controllers\LibraryController;
use Illuminate\Support\Facades\Route;

Route::get('/library', [LibraryController::class, 'index'])->name('library.index');
Route::post('/library', [LibraryController::class, 'store'])->name('library.store');
Route::get('/library2', [LibraryController::class, 'showLibrary2'])->name('library2.index');
Route::get('/library/create', [LibraryController::class, 'create'])->name('library.create');
Route::get('/library/{id}/edit', [LibraryController::class, 'edit'])->name('library.edit');
Route::put('/library/{id}', [LibraryController::class, 'update'])->name('library.update');
Route::delete('/library/{id}', [LibraryController::class, 'destroy'])->name('library.destroy');






