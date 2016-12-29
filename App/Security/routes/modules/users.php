<?php 

/* ui */
Route::get('selectPhone', 'UsersController@selectPhone');

/* universal */
Route::get('/', 'UsersController@paging');
