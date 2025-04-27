<?php

use App\Http\Controllers\Vincontroller;
use App\Http\Controllers\Adminvincontroller;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('caveavin');
});
Route::get('/admin/admin', function () {
    return view('admin.admin');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
});

Route::get('/ajout', [vincontroller::class, 'create']);
Route::post('/ajout', [vincontroller::class, 'store'])->name('vin.store');
Route::get('/collection', [Vincontroller::class, 'index'])->name('collection.index');
Route::get('/vin/{id}', [VinController::class, 'show'])->name('vin.show');

// Routes pour l'administration des vins

Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/admin', [Adminvincontroller::class, 'index'])->name('admin.index');
    Route::get('/admin/vin/{id}/edit', [Vincontroller::class, 'edit'])->name('vin.edit');
    Route::put('/admin/vin/{id}', [VinController::class, 'update'])->name('vin.update');
    Route::delete('/admin/vin/{id}', [VinController::class, 'destroy'])->name('vin.destroy');
});

require __DIR__.'/auth.php';
