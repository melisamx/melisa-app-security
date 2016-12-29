<?php namespace App\Security\Criteria\Users;

use Melisa\Repositories\Criteria\Criteria;
use Melisa\Repositories\Contracts\RepositoryInterface;

/**
 * 
 *
 * @author Luis Josafat Heredia Contreras
 */
class PagingCriteria extends Criteria
{
    
    public function apply($model, RepositoryInterface $repository, array $input = [])
    {
        
        return $model->select([
            'id', 'name', 'email', 'active', 'createdAt', 'isSystem', 'isGod', 'firstLogin'
        ])->orderBy('name');
        
    }
    
}
