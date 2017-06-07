<?php

namespace App\Security\Criteria\Users;

use Melisa\Laravel\Criteria\FilterCriteria;
use Melisa\Repositories\Contracts\RepositoryInterface;

/**
 * 
 *
 * @author Luis Josafat Heredia Contreras
 */
class PagingCriteria extends FilterCriteria
{
    
    public function apply($model, RepositoryInterface $repository, array $input = [])
    {        
        $builder = parent::apply($model, $repository, $input);
        return $builder
            ->select([
                'id', 
                'name', 
                'email', 
                'active', 
                'createdAt', 
                'isSystem', 
                'isGod', 
                'firstLogin', 
                'changePassword'
            ])
            ->orderBy('name');        
    }
    
}
