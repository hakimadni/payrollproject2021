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

Route::get('/dashboard', function () {
    return view('summary');
})->middleware(['auth']);
Route::get('/', function () {
    return view('summary');
})->middleware(['auth']);

route::group(['middleware' => ['auth']], function () {
    Route::resources([
        'employee' => EmployeeController::class,
        'family_status' => FamilyStatusController::class,
        'allowance' => AllowanceController::class,
        'deduction' => DeductionController::class,
        'salary' => SalaryController::class,
        'position' => PositionController::class,
        'eallowance' => EmployeeHasAllowanceController::class,
        'ededuction' => EmployeeHasDeductionController::class
    ]);
});

Auth::routes();

//ini gua cuma buat preview kim, biar muncul

require __DIR__.'/auth.php';

// Controller 

