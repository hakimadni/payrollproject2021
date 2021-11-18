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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

//ini gua cuma buat preview kim, biar muncul
Route::get('/deduction', function () {
    return view('deduction');
});

Route::get('/employee-data', function () {
    return view('employee-data');
});

Route::get('/add-employee', function () {
    return view('add-employee');
});

Route::get('/deduction', function () {
    return view('deduction');
});

Route::get('/position', function () {
    return view('position');
});

Route::get('/fs', function () {
    return view('fs');
});

require __DIR__.'/auth.php';
