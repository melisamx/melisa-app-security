<?php 

Route::post('activate', 'RbacTasksController@activate')->middleware('gate:task.security.rbacTasks.activate');
Route::post('deactivate', 'RbacTasksController@deactivate')->middleware('gate:task.security.rbacTasks.deactivate');
Route::post('delete', 'RbacTasksController@delete')->middleware('gate:task.security.rbacTasks.delete');
Route::post('/', 'RbacTasksController@create')->middleware('gate:task.security.rbacTasks.create');

Route::get('/', 'RbacTasksController@paging')->middleware('gate:task.security.rbacTasks.paging');
Route::get('selectPhone', 'RbacTasksController@selectPhone')->middleware('gate:task.security.phone.rbacTasks.select.access');
Route::get('view', 'RbacTasksController@view')->middleware('gate:task.security.rbacTasks.view.access');
Route::get('add', 'RbacTasksController@add')->middleware('gate:task.security.rbacTasks.add.access');
Route::get('delete', 'RbacTasksController@delete')->middleware('gate:task.security.rbacTasks.delete.access');
