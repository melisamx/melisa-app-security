<?php 

Route::post('activate', 'IdentitiesController@activate')->middleware('gate:task.security.identities.activate');
Route::post('deactivate', 'IdentitiesController@deactivate')->middleware('gate:task.security.identities.deactivate');
Route::post('delete', 'IdentitiesController@delete')->middleware('gate:task.security.identities.delete');
Route::post('/', 'IdentitiesController@create')->middleware('gate:task.security.identities.create');

Route::get('/', 'IdentitiesController@paging')->middleware('gate:task.security.identities.paging');
Route::get('selectPhone', 'IdentitiesController@selectPhone')->middleware('gate:task.security.phone.identities.select.access');
Route::get('view', 'IdentitiesController@view')->middleware('gate:task.security.identities.view.access');
Route::get('add', 'IdentitiesController@add')->middleware('gate:task.security.identities.add.access');
Route::get('delete', 'IdentitiesController@delete')->middleware('gate:task.security.identities.delete.access');
