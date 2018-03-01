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

Route::group([
    'prefix'=>'rbacRoles',
    'middleware' => 'auth'
], function() {    
    require realpath(base_path() . '/routes/modules/rbacRoles.php');    
});

Route::group([
    'prefix'=>'rbacTasks',
    'middleware' => 'auth'
], function() {    
    require realpath(base_path() . '/routes/modules/rbacTasks.php');    
});

Route::group([
    'prefix'=>'rbacIdentities',
    'middleware' => 'auth'
], function() {    
    require realpath(base_path() . '/routes/modules/rbacIdentities.php');    
});

Route::get('bitacora', function() {
    $result = \App\Core\Models\Binnacle::with([
        'event'
    ])->orderBy('createdAt', 'desc')->paginate(500);
    return view('layouts/binnacle', [
        'report'=>$result
    ]);
});
