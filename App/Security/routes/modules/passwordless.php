<?php 

Route::post('/', 'PasswordlessController@create')->middleware('gate:task.security.passwordless.create');

Route::get('viewPhone', 'PasswordlessController@viewPhone')->middleware('gate:task.security.phone.passwordless.view.access');
Route::get('addPhone', 'PasswordlessController@addPhone')->middleware('gate:task.security.phone.passwordless.add.access');
Route::get('paging', 'PasswordlessController@paging')->middleware('gate:task.security.passwordless.paging');
