<?php namespace App\Security\Repositories;

use Melisa\Repositories\Eloquent\Repository;

/**
 * 
 * @author Luis Josafat Heredia Contreras
 */
class GatesRepository extends Repository
{
    
    public function model() {
        
        return 'App\Security\Models\Gates';
        
    }
    
}
