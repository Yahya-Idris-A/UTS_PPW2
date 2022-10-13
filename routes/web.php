<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControllerUTS;

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
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/home', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/inisialisasi', function () {
    return view('inisialisasi', [
        "title" => "Inisialisasi"
    ]);
});

// Route::get('/mata_kuliah', function () {
//     return view('mata_kuliah', [
//         "title" => "Mata Kuliah"
//     ]);
// });

Route::get('/mata_kuliah', [ControllerUTS::class, 'index']);

Route::resource('MataKuliahs', 'App\Http\Controllers\ControllerUTS');
