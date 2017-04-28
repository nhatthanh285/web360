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
    return view('frontend/pages/Trangchu');
});

Route::get('/dangnhap', function () {
    return view('frontend/pages/dangnhap');
});

Route::get('/dangky', function () {
    return view('frontend/pages/dangky');
});

Route::get('/all_grid', function () {
    return view('frontend/pages/danhsach_sanpham_grid');
});

Route::get('/all_list', function () {
    return view('frontend/pages/danhsach_sanpham_list');
});

Route::get('/chitiet', function () {
    return view('frontend/pages/chitiet_sanpham');
});

Route::get('/dangtin', function () {
    return view('frontend/pages/dangtin');
});

Route::get('/taikhoan', function () {
    return view('frontend/pages/quanlytaikhoan');
});

Route::get('/test', 'Admin\CitiesController@index');

Route::get('/allpost', ['as'=> 'allpost', 'uses' =>'User\PostsController@index']);

Route::get('/onepost/{post}', ['as'=> 'onepost.show', 'uses' => 'User\PostsController@show']);
