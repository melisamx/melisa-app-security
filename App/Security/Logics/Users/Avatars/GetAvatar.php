<?php

namespace App\Security\Logics\Users\Avatars;

use App\Core\Repositories\UsersRepository;

/**
 * Get avatar default of user
 *
 * @author Luis Josafat Heredia Contreras
 */
class GetAvatar
{
    
    protected $usersRepo;

    public function __construct(UsersRepository $user)
    {        
        $this->userRepo = $user;        
    }
    
    public function init($user = null)
    {        
        if( is_null($user)) {
            $user = request()->user();
        }
        
        return $this->getDefault($user);        
    }
    
    public function getDefault(&$user)
    {        
        $avatars = $user->avatars;
        
        if( !$avatars->count()) {
            return [];
        }
        
        $avatarDefault = [];
        
        foreach($avatars as $avatar) {
            
            if( $avatar->isDefault && $avatar->active) {
                $avatarDefault = $avatar;
            }
            
        }
        
        if( empty($avatarDefault)) {
            return [];
        }
        
        return $avatarDefault;        
    }
    
}
