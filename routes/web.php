<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/master', function(){
    return view('master');
});

Route::get('/halamanutama', function(){
    return view('data.halamanutama');
});

Route::get('/siswa', function(){
    return view('data.siswa');
});

Route::get('/tambahsiswa', function(){
    return view('data.tambahsiswa');
});
