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
Route::get('/equip',[App\Http\Controllers\EquipController::class, 'index'])->name('equip');
Route::get('/employe',[App\Http\Controllers\EmployeController::class, 'index'])->name('employe');
Route::get('/employe/add',[App\Http\Controllers\EmployeController::class, 'add'])->name('add');
Route::post('/employe/store',[App\Http\Controllers\EmployeController::class, 'store'])->name('store');
Route::get('/employe/edit/{id}',[App\Http\Controllers\EmployeController::class, 'edit'])->name('edit');
Route::post('/employe/update/',[App\Http\Controllers\EmployeController::class, 'update'])->name('update');
Route::get('/employe/hapus/{id}',[App\Http\Controllers\EmployeController::class, 'hapus'])->name('hapus');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
