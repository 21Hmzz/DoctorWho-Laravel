<?php

use App\Http\Controllers\CompagnonsController;
use App\Http\Controllers\DoctorsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/doctors', [DoctorsController::class, 'index'])->name('doctors.index');
Route::get('/doctors/create', [DoctorsController::class, 'create'])->name('doctors.create');
Route::post('/doctors', [DoctorsController::class, 'store'])->name('doctors.store');
Route::get('/doctors/{id}', [DoctorsController::class, 'show'])->name('doctors.show');
Route::get('/doctors/{id}/edit', [DoctorsController::class, 'edit'])->name('doctors.edit');
Route::put('/doctors/{id}', [DoctorsController::class, 'update'])->name('doctors.update');
Route::delete('/doctors/{id}', [DoctorsController::class, 'destroy'])->name('doctors.destroy');

Route::get('/compagnons', [CompagnonsController::class, 'index'])->name('compagnons.index');
Route::get('/compagnons/create', [CompagnonsController::class, 'create'])->name('compagnons.create');
Route::post('/compagnons', [CompagnonsController::class, 'store'])->name('compagnons.store');
Route::get('/compagnons/{id}', [CompagnonsController::class, 'show'])->name('compagnons.show');
Route::get('/compagnons/{id}/edit', [CompagnonsController::class, 'edit'])->name('compagnons.edit');
Route::put('/compagnons/{id}', [CompagnonsController::class, 'update'])->name('compagnons.update');
Route::delete('/compagnons/{id}', [CompagnonsController::class, 'destroy'])->name('compagnons.destroy');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
