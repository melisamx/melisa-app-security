<?php 

Route::group([
    'prefix'=>'passwordless'
], function() {    
    require realpath(base_path() . '/routes/modules/passwordless.php');    
});

Route::group([
    'prefix'=>'users'
], function() {    
    require realpath(base_path() . '/routes/modules/users.php');    
});

Route::group([
    'prefix'=>'scopes'
], function() {    
    require realpath(base_path() . '/routes/modules/scopes.php');    
});

Route::group([
    'prefix'=>'identities'
], function() {    
    require realpath(base_path() . '/routes/modules/identities.php');    
});

Route::group([
    'prefix'=>'rbacRoles'
], function() {    
    require realpath(base_path() . '/routes/modules/rbacRoles.php');    
});

Route::group([
    'prefix'=>'rbacIdentities'
], function() {    
    require realpath(base_path() . '/routes/modules/rbacIdentities.php');    
});
