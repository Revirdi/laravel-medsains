<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;

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

Route::get('/pegawai', [EmployeeController::class, 'index'])->name('pegawai');
Route::get('/tambahpegawai', [EmployeeController::class, 'tambahpegawai'])->name('tambahpegawai');
Route::get('/pegawai/{id}', [EmployeeController::class, 'pegawai'])->name('pegawai');
Route::post('/tambahpegawai', [EmployeeController::class, 'tambah_pegawai'])->name('tambah_pegawai');
Route::put('/editpegawai/{id}', [EmployeeController::class, 'edit_pegawai'])->name('edit_pegawai');
Route::delete('/deletepegawai/{id}', [EmployeeController::class, 'delete_pegawai'])->name('delete_pegawai');
