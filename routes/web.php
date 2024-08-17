<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TacheController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


//Routes ferme
Route::get('/', [TacheController::class, 'index'])->name('taches.index');
Route::get('/taches/create', [TacheController::class, 'create'])->name('taches.create');
Route::post('/taches', [TacheController::class, 'store'])->name('taches.store');
Route::get('/taches/{tache}', [TacheController::class, 'show'])->name('taches.show');
Route::get('/taches/{tache}/edit', [TacheController::class, 'edit'])->name('taches.edit');
Route::put('/taches/{tache}', [TacheController::class, 'update'])->name('taches.update');
Route::post('/taches/deleteSelectedF', [TacheController::class, 'deleteSelectedF'])->name('taches.deleteSelectedF');

