<?php 

Route::post('/', 'ProfileSettingsController@create')->middleware('gate:task.security.my.profile.settings.create');
Route::post('delete', 'ProfileSettingsController@delete')->middleware('gate:task.security.my.profile.settings.delete');
Route::post('update', 'ProfileSettingsController@update')->middleware('gate:task.security.my.profile.settings.update');

Route::get('/', 'ProfileSettingsController@paging')->middleware('gate:task.security.my.profile.settings.paging');
Route::get('view', 'ProfileSettingsController@view')->middleware('gate:task.security.my.profile.settings.view.access');
Route::get('update', 'ProfileSettingsController@update')->middleware('gate:task.security.my.profile.settings.update.access');
Route::get('add', 'ProfileSettingsController@add')->middleware('gate:task.security.my.profile.settings.add.access');
Route::get('report/{id}/{format}', 'ProfileSettingsController@report')->middleware('gate:task.security.my.profile.settings.report');
