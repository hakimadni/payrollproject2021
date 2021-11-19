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
    return view('summary');
})->middleware(['auth'])->name('dashboard');

route::group(['middleware' => ['auth']], function () {
    Route::resources([
        'allowance' => AllowanceController::class,
        'deduction' => DeductionController::class,
        'salary' => DeductionController::class,
        'position' => DeductionController::class
    ]);
});

Auth::routes();

//ini gua cuma buat preview kim, biar muncul



Route::get('/fs', function () {
    return view('fs/index');
});
Route::get('/employee', function () {
    return view('employee/index');
});
Route::get('/employee/create', function () {
    return view('employee/create');
});
require __DIR__.'/auth.php';

// Controller 

