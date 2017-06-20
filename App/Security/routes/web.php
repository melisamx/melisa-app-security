<?php 

Route::get('/test', function() {
    return [
        'success'=>true
    ];
});

Route::group([
    'prefix'=>'modules',
    'namespace'=>'Modules',
    'middleware' => 'auth'
], function() {    
    require realpath(base_path() . '/routes/modules.php');    
});

Route::group([
    'prefix'=>'passwordless',
    'middleware' => 'auth'
], function() {    
    require realpath(base_path() . '/routes/modules/passwordless.php');    
});

Route::group([
    'prefix'=>'passwordlessEmails',
    'middleware' => 'auth'
], function() {    
    Route::get('paging', 'PasswordlessEmailsController@paging');    
});

Route::group([
    'prefix'=>'users',
    'middleware' => 'auth'
], function() {    
    require realpath(base_path() . '/routes/modules/users.php');    
});

Route::group([
    'prefix'=>'scopes',
    'middleware' => 'auth'
], function() {    
    require realpath(base_path() . '/routes/modules/scopes.php');    
});

Route::group([
    'prefix'=>'identities',
    'middleware' => 'auth'
], function() {    
    require realpath(base_path() . '/routes/modules/identities.php');    
});

Route::group([
    'prefix'=>'profiles',
    'middleware' => 'auth'
], function() {    
    require realpath(base_path() . '/routes/modules/profiles.php');    
});
