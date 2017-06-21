<?php 

Route::post('activate', 'RbacIdentitiesController@activate')->middleware('gate:task.security.rbacIdentities.activate');
Route::post('deactivate', 'RbacIdentitiesController@deactivate')->middleware('gate:task.security.rbacIdentities.deactivate');
Route::post('delete', 'RbacIdentitiesController@delete')->middleware('gate:task.security.rbacIdentities.delete');
Route::post('/', 'RbacIdentitiesController@create')->middleware('gate:task.security.rbacIdentities.create');

Route::get('/', 'RbacIdentitiesController@paging')->middleware('gate:task.security.rbacIdentities.paging');
Route::get('selectPhone', 'RbacIdentitiesController@selectPhone')->middleware('gate:task.security.phone.rbacIdentities.select.access');
Route::get('view', 'RbacIdentitiesController@view')->middleware('gate:task.security.rbacIdentities.view.access');
Route::get('add', 'RbacIdentitiesController@add')->middleware('gate:task.security.rbacIdentities.add.access');
Route::get('delete', 'RbacIdentitiesController@delete')->middleware('gate:task.security.rbacIdentities.delete.access');
