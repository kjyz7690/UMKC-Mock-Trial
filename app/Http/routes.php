<?php

Route::get('home', 'PagesController@home');
Route::get('about', 'PagesController@about');
Route::get('join', 'PagesController@join');
Route::get('meet', 'PagesController@meet');

Route::model('team','Team');

Route::get('join', 'JoinController@index');
Route::get('join/{id}','JoinController@show');
Route::model('interested','Interested');
Route::post('join', 'JoinController@store');