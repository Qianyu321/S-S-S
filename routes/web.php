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

Route::get('/','IndexController@index');

Route::get('/detail/{id}','IndexController@detail');

Route::get('user/index','UserController@index');
Route::get('user/index5','UserController@index5');

Route::get('user/uadd','UserController@uadd');
Route::get('reg','LoginController@reg');
Route::get('login','LoginController@index');
Route::get('user/userindex','UserController@userindex');
Route::get('user/userindex2','UserController@userindex2');
Route::get('user/add','UserController@add');
Route::get('user/edit/{id}','UserController@edit');
Route::get('user/delete/{id}','UserController@delete');


Route::get('user/uuedit/{id}','UserController@uuedit');

Route::get('user/udelete/{id}','UserController@udelete');

Route::get('center','IndexController@center');


Route::get('logout','LoginController@logout');

Route::post('user/fnew','UserController@fnew');
Route::post('user/fupd','UserController@fupd');

Route::post('user/dnew','UserController@dnew');
Route::post('user/dupd','UserController@dupd');

Route::post('user/doedu','UserController@doedu');
Route::post('user/doedk','UserController@doedk');
Route::post('user/new','UserController@new');
Route::get('user/editu','UserController@editu');
Route::post('user/deleteall','UserController@deleteall');
Route::get('user/checkin','UserController@checkin');
Route::post('user/upd','UserController@upd');
Route::post('user/upp','UserController@upp');
Route::post('dologin','LoginController@dologin');
Route::post('doreg','LoginController@doreg');
Route::post('dologin2','LoginController@dologin2');
Route::post('doreg2','LoginController@doreg2');

Route::post('user/doadu','UserController@doadu');
Route::post('user/doadk','UserController@doadk');

Route::get('userlogin','LoginController@userlogin');
Route::get('userreg','LoginController@userreg');
Route::post('doul','LoginController@dologin');
Route::post('doureg','LoginController@doreg');
Route::post('doureg','LoginController@doreg');

