<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('home', function () {
    return view('home');
});

Route::get('main', function () {
    return view('main');
});

Route::get('mom/main', function () {
    return view('main');
});

Route::get('mom/edit/main', function () {
    return view('main');
});

Route::get('logout', function () {
    return view('logout');
});

Route::get('mom/logout', function () {
    return view('logout');
});

Route::get('mom/edit/logout', function () {
    return view('logout');
});

Route::get("dosen", "DosenController@index");
//Route::get("pegawai", "PegawaiController@index");
//Route::get('/pegawai/{ALPHARD}', "PegawaiController@index");
Route::get("/formulir", "PegawaiController@formulir");
Route::post("/formulir/proses", "PegawaiController@proses");
//route pegawai crud
Route::get("/pegawai", "PegawaiController@index");
Route::get("/pegawai/tambah", "PegawaiController@tambah");
Route::post("/pegawai/store", "PegawaiController@store");
Route::get("/pegawai/edit/{id}", "PegawaiController@edit");
Route::post("/pegawai/update", "PegawaiController@update");
Route::get("/pegawai/hapus/{id}", "PegawaiController@hapus");
Route::get("/pegawai/cari", "PegawaiController@cari");

Route::get("/mom", "MomController@index")->middleware("auth");
Route::get("/mom/mom", "MomController@index");
Route::get("/mom/edit/mom", "MomController@index");
Route::get("/mom/hapus/{id}", "MomController@hapus");
Route::get("/mom/tambah", "MomController@tambah");
Route::post("/mom/store", "MomController@store");
Route::get("/mom/tambah", "MomController@tambah");
Route::get("/mom/edit/{id}", "MomController@edit");
Route::post("/mom/update", "MomController@update");

//route blog
Route::get("/blog", "BlogController@homee");
Route::get("/blog/tentang", "BlogController@tentang");
Route::get("/blog/kontak", "BlogController@kontak");

//route authenticate
Route::get("/login", "LoginController@index")->name("login")->middleware("guest");
Route::post("/login/authenticate", "LoginController@authenticate");
Route::post("/logout", "LoginController@logout");
Route::get("/register", "RegisterController@index")->middleware("guest");
Route::post("/register/store", "RegisterController@store");
