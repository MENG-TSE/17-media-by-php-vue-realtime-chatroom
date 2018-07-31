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
///ice以下
Route::get('/', 'LiveController@index');
Route::get('anchor/{anchor}','LiveController@anchor')->name('singleAnchor');
Route::post('new-comment','LiveController@newComment')->name('newComment');

///ice以上

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

////聊天室以下
Route::get('chat', 'ChatController@chat')->name('chat');
Route::post('send', 'ChatController@send');
Route::post('saveToSession', 'ChatController@saveToSession');
Route::post('getOldMessage', 'ChatController@getOldMessage');
Route::post('deleteSession', 'ChatController@deleteSession');

Route::get('check', function(){
    return seesion('chat');
});
////////聊天室以上

// Route::prefix('admin')->group(function(){

// });

Route::prefix('youtuber')->group(function(){
    Route::get('anchors','YoutuberController@anchor')->name('yotuberAnchor');
    Route::get('anchor/{id}/edit','YoutuberController@anchorEdit')->name('anchorEdit');
    Route::post('anchor/{id}/edit','YoutuberController@anchorEditPost')->name('anchorEditPost');
    Route::post('anchor/{id}/delete', 'YoutuberController@deleteAnchor')->name('deleteAnchor');
});

// Route::prefix('user')->group(function(){

// });


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
