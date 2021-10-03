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

Route::get('/hello', function () {
    return ('Hello World');
});

Route::get('/helloworld', function () {
    return view('hello');
});

// Route::get('/test', 'App\Http\Controllers\TestController@test');

Route::get('/test', 'App\Http\Controllers\TestController@test2');

Route::post('/whoami','App\Http\Controllers\WhatsMyNameController@index'); 

Route::get('/askme', function () { return view('whoami'); }); 

Route::get('/login', function () { return view('login'); });

Route::post('/dologin','App\Http\Controllers\LoginController@index');

Route::get('/login2', function (){
    return view('login2');
});