<?php
header('Content-Type: text/html; charset=utf-8');
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

Route::group(['middleware' => 'web','namespace' => 'WebControllers'], function(){
    Route::get('/','IndexController@index')->name('home');
    Route::get('/hakkimizda','IndexController@hakkimizda')->name('web-hakkimizda');
    Route::get('/servisler','IndexController@servisler')->name('web-servisler');
    Route::get('/galeri','IndexController@galeri')->name('web-galeri');
    Route::get('/blog','IndexController@blog')->name('web-blog');
    Route::get('/blog/detay/{blogid}','IndexController@blogdetay')->name('blog.detay');
    Route::get('/iletisim','IndexController@iletisim')->name('web-iletisim');
    Route::post('/send-message','IndexController@mesaj')->name('mesaj-post');
});
