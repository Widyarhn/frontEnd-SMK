<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login');
});

Route::get('/dashboard', function () {
    return view('Administrator.dashboard');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/forgot-password', function () {
    return view('forgotPassword');
});

//MD wilayah
Route::get('/provinsi', function () {
    return view('Administrator.MasterData.Wilayah.provinsi');
});
Route::get('/kota', function () {
    return view('Administrator.MasterData.Wilayah.kota');
});

//kbli
Route::get('/kbli', function () {
    return view('Administrator.MasterData.kbli');
});

//satuanKerja
Route::get('/satuan-kerja', function ($id) {
    return view('Administrator.MasterData.SatuanKerja.satuanKerja');
});