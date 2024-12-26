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
    return view('Administrator.MasterData.KBLI.kbli');
});
Route::get('/penandatangan', function () {
    return view('Administrator.MasterData.Penandatangan.direkturJendral');
});
Route::get('/nomor-sk', function () {
    return view('Administrator.MasterData.NoBeritaAcara.noSk');
});

//satuanKerja
Route::get('/satuan-kerja', function () {
    return view('Administrator.MasterData.SatuanKerja.satuanKerja');
});


//element
Route::get('/element-pemantauan/list', function () {
    return view('Administrator.MasterData.Element.ElementPemantauan.list');
});
Route::get('/element-pemantauan/create', function () {
    return view('Administrator.MasterData.Element.ElementPemantauan.create');
});

Route::get('/element-smk/list', function () {
    return view('Administrator.MasterData.Element.ElementSmk.list');
});
Route::get('/element-smk/create', function () {
    return view('Administrator.MasterData.Element.ElementSmk.create');
});

//perusahaan
Route::get('/perusahaan', function () {
    return view('Administrator.Administrasi.Perusahaan.list');
});
Route::get('/perusahaan/detail', function () {
    return view('Administrator.Administrasi.Perusahaan.detail');
});

//administrasi
Route::get('/hak-akses', function () {
    return view('Administrator.Administrasi.HakAkses.list');
});
Route::get('/user-manajemen', function () {
    return view('Administrator.Administrasi.UserManagement.list');
});

//pengaturan
Route::get('/pengaturan', function () {
    return view('Administrator.Pengaturan.index');
});
Route::get('/profil-akun', function () {
    return view('Administrator.ProfilAkun.index');
});


// Internal
Route::get('/dashboard-internal', function () {
    return view('Internal.dashboard');
});




// Company
Route::get('/dashboard-company', function () {
    return view('Company.dashboard');
});





