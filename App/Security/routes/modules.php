<?php 

Route::group([
    'prefix'=>'passwordless',
    'middleware'=>'gate'
], function() {
    
    require realpath(base_path() . '/routes/modules/passwordless.php');
    
});

Route::group([
    'prefix'=>'users',
    'middleware'=>'gate'
], function() {
    
    require realpath(base_path() . '/routes/modules/users.php');
    
});
