<?php 

Route::post('activate', 'UsersController@activate')->middleware('gate:task.security.users.activate');
Route::post('deactivate', 'UsersController@deactivate')->middleware('gate:task.security.users.deactivate');
Route::post('delete', 'UsersController@delete')->middleware('gate:task.security.users.delete');
Route::post('/', 'UsersController@create')->middleware('gate:task.security.users.create');

Route::get('/', 'UsersController@paging')->middleware('gate:task.security.users.paging');
Route::get('selectPhone', 'UsersController@selectPhone')->middleware('gate:task.security.phone.users.select.access');
Route::get('view', 'UsersController@view')->middleware('gate:task.security.users.view.access');
Route::get('add', 'UsersController@add')->middleware('gate:task.security.users.add.access');
Route::get('delete', 'UsersController@delete')->middleware('gate:task.security.users.delete.access');
