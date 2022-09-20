<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\{
    GuruController,
    MapelController,
    KelasController,
    SiswaController
};

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

//route guru
Route::resource('/guru',GuruController::class);
Route::get('/guru/{id}/hapus',[GuruController::class, 'destroy']);
Route::get('/guru/{id}/edit',[GuruController::class, 'edit']);

//route mapel
Route::resource('/mapel',MapelController::class);
Route::get('/mapel/hapus/{id}',[MapelController::class, 'destroy']);
Route::get('/mapel/edit/{id}',[MapelController::class, 'edit']);

//route kelas
Route::resource('/kelas',KelasController::class);
Route::get('/kelas/hapus/{id}',[KelasController::class, 'destroy']);
Route::get('/kelas/edit/{id}',[KelasController::class, 'edit']);

//route siswa
Route::resource('/siswa',SiswaController::class);
Route::get('/siswa/{id}/hapus',[SiswaController::class, 'destroy']);
Route::get('/siswa/edit/{id}',[SiswaController::class, 'edit']);
