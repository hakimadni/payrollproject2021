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
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/allowance', function () {
    return view('allowance');
});
Route::get('/deduction', function () {
    return view('deduction');
});
Route::get('/salary', function () {
    return view('salary');
});
Route::get('/taxes', function () {
    return view('taxes');
});
Route::get('/position', function () {
    return view('position');
});
Route::get('/fs', function () {
    return view('fs');
});
Route::get('/register', function () {
    return view('register');
});
/*----------------add------------------- */
Route::get('/add-employ', function () {
    return view('add-employee');
});
Route::get('/add-allow', function () {
    return view('add-allowance');
});
Route::get('/add-deduction', function () {
    return view('add-deduction');
});
Route::get('/add-position', function () {
    return view('add-position');
});
Route::get('/add-fs', function () {
    return view('add-fs');
});
Route::get('/admin-menu', function () {
    return view('admin-menu');
});
