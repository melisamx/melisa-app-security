<?php 

Route::get('/', 'UsersController@paging')->middleware('gate:task.security.users.paging');
Route::get('selectPhone', 'UsersController@selectPhone')->middleware('gate:task.security.phone.users.select.access');
Route::get('view', 'UsersController@view')->middleware('gate:task.security.users.view.access');
Route::get('add', 'UsersController@add')->middleware('gate:task.security.users.add.access');
Route::get('delete', 'UsersController@delete')->middleware('gate:task.security.users.delete.access');
