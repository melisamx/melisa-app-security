<?php 

/* ui */
Route::get('viewPhone', 'PasswordlessController@viewPhone');
Route::get('addPhone', 'PasswordlessController@addPhone');

/* universal */
Route::get('paging', 'PasswordlessController@paging');
Route::post('/', 'PasswordlessController@create');