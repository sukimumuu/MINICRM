<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\CompaniesController;

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


// Route::get('/', function () {
//     return view('layout.main');
// });

Route::get('/', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');


Route::group(['middleware'=>['auth','role:admin']], function(){
Route::get('/companies/data', [CompaniesController::class, 'index'])->name('companiesdata');
Route::get('/companies/add', [CompaniesController::class, 'add'])->name('companiesadd');
Route::post('/companies/create', [CompaniesController::class, 'create']);
Route::get('/companies/{id}/edit', [CompaniesController::class, 'edit']);
Route::post('/companies/{id}/update', [CompaniesController::class, 'update']);
Route::get('/companies/{id}/delete', [CompaniesController::class, 'delete']);

Route::get('/employee/data', [EmployeeController::class, 'index'])->name('employeedata');
Route::get('/employee/add', [EmployeeController::class, 'add'])->name('employeeadd');
Route::post('/employee/create', [EmployeeController::class, 'create']);
Route::get('/employee/{id}/edit', [EmployeeController::class, 'edit']);
Route::post('/employee/{id}/update', [EmployeeController::class, 'update']);
Route::get('/employee/{id}/delete', [EmployeeController::class, 'delete']);
});


