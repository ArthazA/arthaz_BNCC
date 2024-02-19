<?php

use App\Http\Controllers\EmpController;
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

Route::get('/', [EmpController::class, 'ViewAllEmployee']);

Route::get('/add/employee', [EmpController::class, 'AddEmployee']);

Route::post('/store/employee', [EmpController::class, 'StoreEmployee']);

Route::get('/update/employee/{id}', [EmpController::class, 'ViewUpdateEmployee']);

Route::patch('/save/update/{id}', [EmpController::class, 'UpdateEmployee']);

Route::delete('/delete/book/{id}', [EmpController::class, 'DeleteEmployee']);
