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
Auth::routes();

/*Route::get('/', function(){
	 
       
	return view('home');
});*/
Route::get('/', 'BaseController@getIndex');
Route::get('/login-form', 'BaseController@login');
Route::get('/code', 'HomeController@code')->name('code');

Route::get('/logout', 'Auth\LoginController@logout')->name('get-logout');


Route::get('/home', 'HomeController@index')->name('home');

Route::post('/home','HomeController@postIndex');

Route::post('/home', 'HomeController@postAdd')->name('home');
Route::post('/ajax/modal', 'Ajax/ModalController@postOne');

Route::get('product/delete/{id}', 'HomeController@getDelete');

Route::group(['middleware' => ['auth']], function () {
Route::get('home', 'HomeController@index');
Route::get('home/edit', 'HomeController@edit')->middleware('admin');
});
Route::get('/home', 'HomeController@index')->name('home')->middleware('cookie');

Route::group(['middleware' => 'lang'], function () {
    Route::get('lang', 'LangController@getIndex');
});
Route::post('ckeditor/image_upload', 'CKEditorController@upload')->name('upload');

/*Route::resource('gift', 'GiftController');*/




