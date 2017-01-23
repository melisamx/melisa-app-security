<?php 

/* ui */
Route::get('selectPhone', 'UsersController@selectPhone');

/* universal */
Route::get('/', 'UsersController@paging')->middleware('gate:task.lamina.programaciones.view.access');
