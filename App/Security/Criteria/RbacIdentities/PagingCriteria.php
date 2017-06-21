<?php

namespace App\Security\Criteria\RbacIdentities;

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
        
        if( !$this->isAllowed('app.security.rbacIdentities.show.system')) {
            $builder = $builder->where('rbacIdentities.isSystem', false);
        }
        
        return $builder
            ->select([
                'rbacIdentities.*',
                'i.displayEspecific as identity',
            ])
            ->join('identities as i', 'i.id', '=', 'rbacIdentities.idIdentity')
            ->orderBy('i.displayEspecific');        
    }
    
}
