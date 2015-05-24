<?php

Route::get('home', 'PagesController@home');
Route::get('about', 'PagesController@about');
Route::get('join', 'PagesController@join');
Route::get('meet', 'PagesController@meet');
Route::model('team','Team');