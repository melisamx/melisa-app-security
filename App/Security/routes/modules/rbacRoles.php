<?php 

Route::post('activate', 'RbacRolesController@activate')->middleware('gate:task.security.rbacRoles.activate');
Route::post('deactivate', 'RbacRolesController@deactivate')->middleware('gate:task.security.rbacRoles.deactivate');
Route::post('delete', 'RbacRolesController@delete')->middleware('gate:task.security.rbacRoles.delete');
Route::post('/', 'RbacRolesController@create')->middleware('gate:task.security.rbacRoles.create');

Route::get('/', 'RbacRolesController@paging')->middleware('gate:task.security.rbacRoles.paging');
Route::get('selectPhone', 'RbacRolesController@selectPhone')->middleware('gate:task.security.phone.rbacRoles.select.access');
Route::get('view', 'RbacRolesController@view')->middleware('gate:task.security.rbacRoles.view.access');
Route::get('add', 'RbacRolesController@add')->middleware('gate:task.security.rbacRoles.add.access');
Route::get('delete', 'RbacRolesController@delete')->middleware('gate:task.security.rbacRoles.delete.access');
