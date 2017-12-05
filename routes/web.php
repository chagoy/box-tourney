<?php

Route::get('/', function () {
	return view('welcome');
});

Route::get('/boxers', 'BoxerController@index');
Route::get('/boxers/{boxer}', 'BoxerController@show');
Route::get('/boxers/by/{category}', 'BoxerController@category');

Route::get('/add', 'BoxerController@create');
Route::post('/add', 'BoxerController@store');

Route::get('/tournament', 'TournamentController@index');
Route::get('/tournament/create/{weight}', 'TournamentController@create');
Route::post('/tournament/create/store', 'TournamentController@store');
Route::get('/tournament/{tournament}', 'TournamentController@show');

Route::post('/test', 'TournamentController@test');

Route::get('/about', function () {
	return view('about');
});

Route::post('/robbery', 'RobberyController@store');

Route::get('/seasonpass', function () {
	return view ('season');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
