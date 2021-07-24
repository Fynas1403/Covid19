<?php
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;
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
///////////////////////////////////LOGIN MASYARAKAT//////////////////////////////////
Route::get('/login_masyarakat', function () {
    return view('login_masyarakat');
});
Route::post('login_masyarakat/cek', 'LoginMasyarakat@cek');
Route::get('/masyarakat', 'DashboardMasyarakat@index_masyarakat');
Route::get('/logout_masyarakat','LoginMasyarakat@logout');

///////////////////////////////////LOGIN PETUGAS//////////////////////////////////
Route::get('/login_petugas', function () {
    return view('login_petugas');
});
Route::post('login_petugas/cek', 'LoginPetugas@cek');
Route::get('/petugas', 'DashboardPetugas@index_petugas');
Route::get('/logout_petugas','LoginPetugas@logout');

///////////////////////////////////MASYARAKAT//////////////////////////////////
Route::get('/login_masyarakat',"Masyarakat@index_masyarakat");

Route::get('/data_masyarakat',"Masyarakat@index");

Route::get('/masyarakat/edit/{id}',"Masyarakat@edit");

Route::get('/masyarakat_edit',"Masyarakat@edit");

Route::post('/masyarakat/update',"Masyarakat@update")-> name('masyarakat.update');

Route::post('/masyarakat/store',"Masyarakat@store") ->name('masyarakat.store');

Route::get('/masyarakat/hapus/{id}',"Masyarakat@hapus");

/////////////////////////////////////DAFTAR VAKSIN//////////////////////////////////
Route::get('/daftar_vaksin',"DaftarVaksin@index");

Route::post('/daftar_vaksin/store',"DaftarVaksin@store") ->name('daftarvaksin.store');

Route::get('/daftar_vaksin/hapus/{id}',"DaftarVaksin@hapus");

///////////////////////////////////PETUGAS//////////////////////////////////
Route::get('/daftar_pasien',"Petugas@daftar_pasien");

Route::get('/data_petugas',"Petugas@index");

Route::post('/tambah_petugas/store',"Petugas@store") ->name('petugas.store');

Route::get('/petugas/hapus/{id}',"Petugas@hapus");

Route::get('/petugas/edit/{id}',"Petugas@edit");

Route::get('/petugas_edit',"Petugas@edit");

Route::post('/petugas/update',"Petugas@update")-> name('petugas.update');

Route::get('/data_masyarakat',"Petugas@data_masyarakat");

Route::post('/tambah_masyarakat/store',"Petugas@masyarakat_store") ->name('Petugas.masyarakat_store');

Route::get('/data_masyarakat/hapus/{id}',"Petugas@hapus_masyarakat");
