<?php

namespace App\Security\Repositories;

use App\Core\Repositories\RbacTasksRepository as BaseRepository;

/**
 * 
 * @author Luis Josafat Heredia Contreras
 */
class RbacTasksRepository extends BaseRepository
{
    
    public function model()
    {        
        return 'App\Core\Models\RbacTasks';        
    }
    
}
