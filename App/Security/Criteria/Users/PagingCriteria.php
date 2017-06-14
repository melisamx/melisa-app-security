<?php

namespace App\Security\Criteria\Users;

use Melisa\Laravel\Criteria\FilterCriteria;
use Melisa\Repositories\Contracts\RepositoryInterface;
use Melisa\core\LogicBusiness;

/**
 * 
 *
 * @author Luis Josafat Heredia Contreras
 */
class PagingCriteria extends FilterCriteria
{
    use LogicBusiness;
    
    public function apply($model, RepositoryInterface $repository, array $input = [])
    {        
        $builder = parent::apply($model, $repository, $input);
        
        if( !$this->isAllowed('app.security.users.show.system')) {
            $builder = $builder->where('isSystem', false);
        }
        
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
