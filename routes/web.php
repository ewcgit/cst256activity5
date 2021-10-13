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
    return view('index');
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

Route::get('/customer', function () { return view('customer'); });

Route::post('/addcustomer','App\Http\Controllers\CustomerController@index');

Route::get('/order', function () { return view('order'); });

Route::post('/addorder','App\Http\Controllers\orderController@index');

Route::get('/login', function () { return view('login'); });

Route::post('/dologin','App\Http\Controllers\LoginController@index');

Route::resource('/usersrest', 'App\Http\Controllers\UsersRestController');

Route::get('/usersrest1', 'App\Http\Controllers\UsersRestController@index');

Route::get('/usersrest2', 'App\Http\Controllers\UsersRestController@show');

Route::get('/usersrest3', 'App\Http\Controllers\RestClientController@index');

Route::get('/usersrest4', 'App\Http\Controllers\RestClientController@show');

Route::get('/middlewareTest', 'App\Http\Controllers\CustomerController@middlewareTest');

Route::get('/loggingservice','App\Http\Controllers\TestLoggingController@index');

Route::get('/login2', function (){
    return view('login2');
});