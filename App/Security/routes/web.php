<?php 

Route::get('/test', function() {
    return [
        'success'=>true
    ];
});

Route::group([
    'prefix'=>'modules',
    'namespace'=>'Modules'
], function() {
    
    require realpath(base_path() . '/routes/modules.php');
    
});

Route::group([
    'prefix'=>'passwordless',
], function() {
    
    require realpath(base_path() . '/routes/modules/passwordless.php');
    
});

Route::group([
    'prefix'=>'passwordlessEmails',
], function() {
    
    Route::get('paging', 'PasswordlessEmailsController@paging');
    
});

Route::group([
    'prefix'=>'users',
], function() {
    
    require realpath(base_path() . '/routes/modules/users.php');
    
});
