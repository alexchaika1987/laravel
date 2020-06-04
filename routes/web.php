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

Route::get('/', function(){
	 
       
	return view('home');
});
/*Route::get('/', function(){
	 $gifts = DB::table('gifts')->get();
       
	return view('welcome', compact('gifts'));
});
*/
Route::get('/logout', 'Auth\LoginController@logout')->name('get-logout');


Route:: group(['middleware' => 'auth'], function(){
Route::get('/home', 'HomeController@index')->name('home');


});




Route::get('/additional','HomeController@additional')->name('additional');
Route::post('/additional','HomeController@postIndex');
Route::post('/additional', 'HomeController@postAdd')->name('additional');
Route::post('/modal','ModalController@postOne');

Route::get('product/delete/{id}', 'HomeController@getDelete');

Route::resource('gift', 'GiftController');




Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
