<?php

namespace App\Security\Repositories;

use App\Core\Repositories\RbacRolesRepository as BaseRepository;

/**
 * 
 * @author Luis Josafat Heredia Contreras
 */
class RbacRolesRepository extends BaseRepository
{
    
    public function model()
    {        
        return 'App\Core\Models\RbacRoles';        
    }
    
}
