<?php 

Route::post('changePass', 'UserController@changePass')->middleware('gate:task.security.my.user.changePass');
