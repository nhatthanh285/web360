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

//Route::get('/', function () {
//    return view('frontend/pages/trangchu');
//});

//Route::controllers([
//    'auth' => 'Auth\AuthController',
//    'password' => 'Auth\PasswordController'
//]);




Route::get('/', 'HomeController@index');

Route::get('/signin', ['as'=> 'signin', 'uses' =>'HomeController@signin']);

Route::post('/signin', ['as'=> 'signin', 'uses' =>'HomeController@postSigninByPhone']);

Route::get('/signout', ['as' => 'logout', 'uses' => 'HomeController@signout']);

//Route::get('/signin', ['as'=> 'signin', 'uses' =>'HomeController@signin']);

Route::get('/register', ['as'=> 'register', 'uses' =>'HomeController@register']);

Route::post('/register', ['as'=> 'register', 'uses' =>'HomeController@postRegister']);

Route::post('/phoneValidate', ['as'=> 'phoneValidate', 'uses' =>'HomeController@phoneValidate']);

Route::get('/newpost', ['as'=> 'newpost', 'uses' =>'HomeController@newPost']);

//Route::get('/dangky', function () {
//    return view('frontend/pages/dangky');
//});

Route::get('/allgrid', function () {
    return view('frontend/pages/danhsach_sanpham_grid');
});

Route::get('/alllist', function () {
    return view('frontend/pages/danhsach_sanpham_list');
});

Route::get('/detail', function () {
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

Route::get('/onepost/4', ['as' => 'onepost', 'uses' => 'PostsController@show']);


