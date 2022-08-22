<?php

use App\Http\Controllers\CobaController;
use App\Http\Controllers\indexController;
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

// 'url' nnsms url website
Route::get('/', function () {
    return view('welcome');  // view pemanggilan
});


Route::get('tes', function () {
    return view('tes');  // manampilkan file tes yang isinya tulisan tes
});

//        nama url  nama controller       nama fungsi
Route::get('index', [indexController::class, 'index'])->name('home'); //menampilkan file tes

Route::get('tama', [CobaController::class, 'index']);

Route::get('tampilkan-data', [indexController::class, 'tampil'])->name('tampil.data'); //menampilkan data ke table

Route::get('create', [indexController::class, 'FormTambah'])->name('create.view'); //menampilkan file tambah

Route::post('create-proses', [indexController::class, 'ProsesCreate'])->name ('create.proses'); //proses tambah data

Route::get('edit/{id}', [indexController::class, 'edit'])->name('edit.data');//menampilkan form edit data

Route::put('update/{id}', [indexController::class, 'update'])->name('update.data');//proses update data

Route::delete('delete/{id}', [indexController::class, 'delete'])->name('delete.data');//proses delete data
