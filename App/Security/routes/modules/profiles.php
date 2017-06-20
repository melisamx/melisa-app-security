<?php 

Route::post('activate', 'ProfilesController@activate')->middleware('gate:task.security.profiles.activate');
Route::post('deactivate', 'ProfilesController@deactivate')->middleware('gate:task.security.profiles.deactivate');
Route::post('delete', 'ProfilesController@delete')->middleware('gate:task.security.profiles.delete');
Route::post('/', 'ProfilesController@create')->middleware('gate:task.security.profiles.create');

Route::get('/', 'ProfilesController@paging')->middleware('gate:task.security.profiles.paging');
Route::get('selectPhone', 'ProfilesController@selectPhone')->middleware('gate:task.security.phone.profiles.select.access');
Route::get('view', 'ProfilesController@view')->middleware('gate:task.security.profiles.view.access');
Route::get('add', 'ProfilesController@add')->middleware('gate:task.security.profiles.add.access');
Route::get('delete', 'ProfilesController@delete')->middleware('gate:task.security.profiles.delete.access');
