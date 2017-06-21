<?php

namespace App\Security\Repositories;

use App\Core\Repositories\RbacIdentitiesRepository as BaseRepository;

/**
 * 
 * @author Luis Josafat Heredia Contreras
 */
class RbacIdentitiesRepository extends BaseRepository
{
    
    public function model()
    {        
        return 'App\Core\Models\RbacIdentities';        
    }
    
}
