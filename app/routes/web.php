<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('home');
});

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
