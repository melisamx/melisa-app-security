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
    Route::group([
        'prefix'=>'users'
    ], function() {
        Route::get('/', 'UsersController@paging')
            ->middleware('gate:task.security.users.paging');
    });
});