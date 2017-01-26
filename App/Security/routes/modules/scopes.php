<?php 

Route::post('/', 'ScopesController@create')->middleware('gate:task.security.scopes.create');
Route::post('delete', 'ScopesController@delete')->middleware('gate:task.security.scopes.delete');

Route::get('/', 'ScopesController@paging')->middleware('gate:task.security.scopes.paging');
Route::get('view', 'ScopesController@view')->middleware('gate:task.security.scopes.view.access');
Route::get('add', 'ScopesController@add')->middleware('gate:task.security.scopes.add.access');
