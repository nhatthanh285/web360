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

Route::get('/', function () {
    return view('pages/Trangchu');
});

Route::get('/dangnhap', function () {
    return view('pages/dangnhap');
});

Route::get('/dangky', function () {
    return view('pages/dangky');
});

Route::get('/all_grid', function () {
    return view('pages/danhsach_sanpham_grid');
});

Route::get('/all_list', function () {
    return view('pages/danhsach_sanpham_list');
});

Route::get('/chitiet', function () {
    return view('pages/chitiet_sanpham');
});

Route::get('/test', 'Admin\CitiesController@index');
