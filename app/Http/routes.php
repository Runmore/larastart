<?php

get('/', function(){
  return view('welcome');
});

Route::get('/merchandise', function(){return "Ummmm sorry... We don't actually have anything to give away...";});
Route::get('/extras', function() {
    return view('jextra');
});

Route::get('contact', ['as' => 'contact', 'uses' => 'AboutController@create']);
Route::post('contact', ['as' => 'contact_store', 'uses' => 'AboutController@store']);

get('songs', 'songsController@index');
get('/songs/{slug}', 'songsController@show');
get('songs/{slug}/edit', 'songsController@edit');
patch('songs/{slug}', 'songsController@update');
