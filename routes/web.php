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



Route::resource('gift', 'GiftController');


/*Route::get('/', function () {
    return view('index.php');
});

Auth::routes();

Route::get('/','BaseController@getIndex');

*/