<?php 

Route::group([
    'prefix'=>'profile/settings',
    'middleware'=>'auth',
], function() {    
    require realpath(base_path() . '/routes/my/profileSettings.php');    
});
