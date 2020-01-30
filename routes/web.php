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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/','HomeController@index');





Route::get('/adm','AuthController@index');
Route::post('/proses_login','AuthController@login');

Route::get('/regis','AuthController@regis');
Route::post('/proses_regis','AuthController@register');

Route::get('/barang','AdminController@index');
Route::get('/list','AdminController@json_barang');


Route::get('/tambah','AdminController@tambah');
Route::post('/proses_tambah','AdminController@proses');


Route::get('/kategori','AdminController@kategori');
Route::get('/kat','AdminController@json_kategori');

Route::get('/tambah_kat','AdminController@tambah_kategori');
Route::post('/proses_kategori','AdminController@proses_kat');

Route::get('/produk/{id}','HomeController@detail');
Route::get('/detail','HomeController@barang');

Route::get('/hapus/{id}','AdminController@hapus_barang');

Route::get('/edit/{id}','AdminController@edit_barang');
Route::post('/editkuy/','AdminController@proses_edit');