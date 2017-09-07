<?php

Route::get('/', 'ThreadsController@index'); // Búið
Route::get('/home', function() {
	return redirect()->action('ThreadsController@index');
}); // Búið
Route::get('/threads', 'ThreadsController@index'); // Búið
Route::get('/threads/create', 'ThreadsController@create'); 
Route::get('/threads/{id}', 'ThreadsController@show'); 	// Búið