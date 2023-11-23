<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\NoteController;
use App\Http\Controllers\ProductController;


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



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/', function () {
        return view('welcome');
    });
    
    Route::get('/clientes', [ClientController::class, 'index'])->name('clients.index');
    Route::get('/clientes/criar', [ClientController::class, 'create'])->name('clients.create');
    Route::post('/clientes', [ClientController::class, 'store']);
    Route::delete('/clientes/{id}', [ClientController::class, 'destroy']);
    Route::get('/clientes/edit/{id}', [ClientController::class, 'edit']);
    Route::put('/clientes/update/{id}', [ClientController::class, 'update']);
    
    Route::get('/notinhas', [NoteController::class, 'index'])->name('notinhas.index');
    Route::get('/notinhas/criar', [NoteController::class, 'create'])->name('notinhas.create');
    Route::post('/notinhas', [NoteController::class, 'store']);
    Route::delete('/notinhas/{id}', [NoteController::class, 'destroy']);
    Route::get('/notinhas/{id}', [NoteController::class, 'detail'])->name('notinhas.detail');
    Route::get('/notinhas/edit/{id}', [NoteController::class, 'edit']);
    Route::get('/notinhas/update/{id}', [NoteController::class, 'update']);
    
    
    Route::get('/estoque', [ProductController::class, 'index'])->name('estoque.index');
    Route::get('/estoque/criar', [ProductController::class, 'create'])->name('estoque.create');
    Route::post('/estoque', [ProductController::class, 'store']);
    Route::delete('/estoque/{id}', [ProductController::class, 'destroy']);
    Route::get('/estoque/edit/{id}', [ProductController::class, 'edit']);
    Route::put('/estoque/update/{id}', [ProductController::class, 'update']);
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
