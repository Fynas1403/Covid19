<?php

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

Route::get('/login_masyarakat', function () {
    return view('login_masyarakat');
});
Route::post('login_masyarakat/cek', 'LoginMasyarakat@cek');
Route::get('/masyarakat', 'DashboardMasyarakat@index_masyarakat');
Route::get('/logout_masyarakat','LoginMasyarakat@logout');

///////////////////////////////////MASYARAKAT//////////////////////////////////
Route::get('/login_masyarakat',"Masyarakat@index_masyarakat");

Route::get('/data_masyarakat',"Masyarakat@index");

Route::get('/masyarakat/edit/{id}',"Masyarakat@edit");

Route::get('/masyarakat_edit',"Masyarakat@edit");

Route::post('/masyarakat/update',"Masyarakat@update")-> name('masyarakat.update');

Route::post('/masyarakat/store',"Masyarakat@store") ->name('masyarakat.store');

Route::get('/masyarakat/hapus/{id}',"Masyarakat@hapus");

/////////////////////////////////////