<?php 

Route::group([
    'prefix'=>'passwordless',
], function() {
    
    require realpath(base_path() . '/routes/modules/passwordless.php');
    
});

Route::group([
    'prefix'=>'users',
], function() {
    
    require realpath(base_path() . '/routes/modules/users.php');
    
});
