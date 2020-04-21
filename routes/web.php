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
Auth::routes([
	'reset' => false,
	'confirm' => false,
	'verify' => false
]);

Route::get('/logout', 'Auth\LoginController@logout')->name('get-logout');



Route:: group(['middleware' => 'auth'], function(){
Route::get('/home', 'HomeController@index')->name('home');
});

Route::get('/', 'HomeController@index')->name('index');
/*Route::get('/', function () {
    return view('index.php');
});

Auth::routes();

Route::get('/','BaseController@getIndex');

*/