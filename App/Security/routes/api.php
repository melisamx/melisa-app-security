<?php 

Route::group([
    'prefix'=>'v1',
    'namespace'=>'v1'
], function() {
    Route::post('login', 'ProxyController@login');
});

Route::group([
    'prefix'=>'v1',
    'namespace'=>'v1',
    'middleware'=>'auth:api'
], function() {
    Route::post('logout', 'ProxyController@logout');
    Route::group([
        'prefix'=>'users'
    ], function() {
        Route::get('/', 'UsersController@paging')
            ->middleware('gate:task.security.users.paging');
    });
    Route::get('menus/{key}', 'MenusController@byKey');
});