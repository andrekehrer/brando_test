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
    return view('index');
});

Route::get('hello/{name}', function ($name) {
    return view('hello', ['name'=>$name]);
});


Route::get('/api', 'GuzzleController@getRemoteData');


Route::get('/post_api', 'GuzzleController@getRemoteData');