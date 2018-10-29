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
    return view('welcome');
});

Auth::routes();
// エラー画面
Route::group([
    'prefix' => '/errors'
], function () {
    // 常にエラー
    Route::get('/always/{id?}', [
        'uses' => 'ErrorPageController@getAlwaysError'
    ])->where('id', '[0-9]+');
});

Route::get('/home', 'HomeController@index')->name('home');
