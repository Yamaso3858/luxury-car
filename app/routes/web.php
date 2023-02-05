<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ManufacturerController;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/lamborghini', function () {
    return view('lamborghini');
});

Route::get('/ferrari', function () {
    return view('ferrari');
});

Route::get('/mclaren', function () {
    return view('mclaren');
});

Route::get('/aston martin', function () {
    return view('aston martin');
});

Route::get('/bentley', function () {
    return view('bentley');
});

Route::get('/rolls royce', function () {
    return view('rolls royce');
});

Route::get('/manufacturers/create', [ManufacturerController::class, 'create'])->name('manufacturers.create');

Route::post('/manufacturers', [ManufacturerController::class, 'store'])->name('manufacturers.store');

Route::delete('/manufacturers/{manufacturer}', [ManufacturerController::class, 'destroy'])->name('manufacturers.destroy');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
