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
    return view('welcome');
});



Route::get('', function () {
	if (Session::has('locale')) {
		App::setLocale(Session::get('locale'));
	}
	return view('welcome');
});

Route::get('language/{locale}', function ($locale) {
	App::setLocale($locale);
	Session::put('locale', $locale); 
	
	return redirect()->back();
});


Route::resource('/','DemoFileSystemController');
Auth::routes();

Route::get('/home', 'HomeController@index');
