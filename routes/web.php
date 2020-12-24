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

/*Route::get('/', function () {
    return view('welcome');
});*/
Auth::routes([
	'reset' => false,
	'confirm' => false,
	'verify' => false,
]);


Route::get('locale/{locale}','MainController@changeLocale')->name('locale');

Route::get('/logout', 'Auth\LoginController@logout')->name('get-logout');

Route::middleware(['set_locale'])->group(function(){
	Route::group([
	'middleware' => 'auth',
	'prefix' => 'admin',
], function(){
	Route::get('/basket','BasketController@basket')->name('basket');
	Route::post('/basket/add/{id}', 'BasketController@basketAdd')->name('basket-add');
	
	

	Route::resource('categories', 'Admin\CategoryController');
	Route::resource('films', 'Admin\FilmController');
} );

Route::group([
	'middleware' => 'auth',
	'middleware' => 'is_admin',
], function(){

		Route::get('/home','HomeController@index')->name('home');

	});

Route::get('/','MainController@index')->name('index');

Route::get('/categories','MainController@categories')->name('categories');

Route::post('/basket/remove/{id}', 'BasketController@basketRemove')->name('basket-remove');

Route::get('/{category}','MainController@category')->name('category');

Route::get('/{category}/{film?}','MainController@film')->name('film');
});

	

/*Route::group(['prefix' => 'basket'], function(){
	Route::post('/add/{id}', 'BasketController@basketAdd')->name('basket-add');

	Route::group([
		'middleware' => 'basket_not_empty',
	], function(){
		Route::get('/','BasketController@basket')->name('basket');
		Route::post('/remove/{id}', 'BasketController@basketRemove')->name('basket-remove');
	});
});*/



//Route::get('/basket','BasketController@basket')->name('basket');
//Route::post('/basket/add/{id}', 'BasketController@basketAdd')->name('basket-add');


