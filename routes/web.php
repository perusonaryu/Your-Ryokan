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
// イベント機能たち
Route::post('/eventadd', 'EventController@store');
Route::get('/eventget','EventController@index');
Route::get('/eventgettop','EventController@indextop');

//トップページの旅館取得
Route::get('/topryokan','RyokanController@topget');

// コンタクト機能たち
Route::post('/contactadd', 'ContactController@store');

Route::post('/contactmail','MailSendController@send');



Route::get('/{any}', function () {
    return view('vue');
})->where('any', '.*');
