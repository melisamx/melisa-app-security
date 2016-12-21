<?php 

Route::group([
    'prefix'=>'passwordless',
], function() {
    
    require realpath(base_path() . '/routes/modules/passwordless.php');
    
});
