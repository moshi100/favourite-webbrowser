<?php

Route::get('/', 'HomeController@index');
Route::get('post', 'PostsController@index');
Route::post('post', 'PostsController@newPost');
Route::resource('show', 'ShowController');
