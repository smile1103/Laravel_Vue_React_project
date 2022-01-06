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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/admin', 'IndexController@gotoAdmin');

Route::get('/login_one', 'IndexController@gotoLoginOne');
Route::get('/login_two', 'IndexController@gotoLoginTwo');
Route::get('/login_three', 'IndexController@gotoLoginThree');

Route::get('/client_main', 'IndexController@gotoMain');
Route::get('/client_inner', 'IndexController@gotoInner');
Route::get('/client_inner2', 'IndexController@gotoInner2');
Route::get('/client_inner3', 'IndexController@gotoInner3');
Route::get('/client_inner4', 'IndexController@gotoInner4');



Route::get('/import_menu', 'IndexController@import_menu');
Route::post('/export_menu', 'IndexController@export_menu');

Route::get('/import_client_main', 'IndexController@import_client_main');
