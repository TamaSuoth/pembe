<?php

use App\Http\Controllers\CobaController;
use App\Http\Controllers\TesController;
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
Route::get('tes', [TesController::class, 'index']); //menampilkan file tes

Route::get('tama', [CobaController::class, 'index']);


