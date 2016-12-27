<?php 

Route::group([
    'prefix'=>'modules',
    'namespace'=>'Modules'
], function() {
    
    require realpath(base_path() . '/routes/modules.php');
    
});

Route::group([
    'prefix'=>'passwordless',
], function() {
    
    Route::get('paging', 'PasswordlessController@paging');
    
});

Route::group([
    'prefix'=>'passwordlessEmails',
], function() {
    
    Route::get('paging', 'PasswordlessEmailsController@paging');
    
});
