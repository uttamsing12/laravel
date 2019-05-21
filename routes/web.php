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

Route::get('login', 
	[
		'as' => 'login',
		'uses' => 'AuthController@getLogin',
	]
);



Route::post('login', 
	[
		'as' => 'login.post',
		'uses' => 'AuthController@postLogin',
	]
);

Route::get('index', 
	[
		'as' => 'index',
		'middleware'=>'auth',
		'uses' => 'UserController@getIndex',
	]
);

Route::get('/books', 
	[
		'as' => 'book.list',
		'middleware' => 'auth',
		'uses' => 'BookController@getBooks',
	]
);

Route::get('/book', 
	[   
		'as'=>'book.create',
		'middleware' => 'auth',
		'uses' => 'BookController@create',
	]
);

Route::post('/book', 
	[   
		'as' => 'book.post.form',
		'middleware' => 'auth',
		'uses' => 'BookController@store',
	]
);
