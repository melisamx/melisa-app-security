<?php

namespace App\Security\Criteria\Scopes;

use Melisa\Repositories\Criteria\Criteria;

/**
 * 
 *
 * @author Luis Josafat Heredia Contreras
 */
class PagingCriteria extends Criteria
{
    
    public function apply($model, $repository, array $input = [])
    {        
        return $model->orderBy('scopes.name');        
    }
    
}
