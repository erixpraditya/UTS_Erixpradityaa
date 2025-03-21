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

Route::get('/detail', function(){
    return view('layout.detail');
});

Route::get('/hapus', function(){
    return view('layout.hapus');
});

Route::get('/daftarbuku', function(){
    return view('data.daftarbuku');
});

Route::get('/tambahbuku', function(){
    return view('data.tambahbuku');
});

Route::get('/detailbuku', function(){
    return view('layout.detailbuku');
});

Route::get('/hapusbuku', function(){
    return view('layout.hapusbuku');
});

Route::get('/peminjam', function(){
    return view('data.peminjam');
});

Route::get('/tambahpeminjam', function(){
    return view('data.tambahpeminjam');
});

Route::get('/pengembalian', function(){
    return view('data.pengembalian');
});

Route::get('/editpengembalian', function(){
    return view('layout.editpengembalian');
});

Route::get('/hapuspengembalian', function(){
    return view('layout.hapuspengembalian');
});
