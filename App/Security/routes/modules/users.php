<?php 

Route::get('selectPhone', 'UsersController@selectPhone')->middleware('gate:task.security.phone.users.select.access');
Route::get('/', 'UsersController@paging')->middleware('gate:task.security.users.paging');
