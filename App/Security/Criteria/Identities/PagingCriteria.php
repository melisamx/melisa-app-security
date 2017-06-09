<?php

namespace App\Security\Criteria\Identities;

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
                'identities.*',
                'ui.idUser',
                'p.name as profile'
            ])
            ->join('usersIdentities as ui', 'ui.idIdentity', '=', 'identities.id')
            ->join('users as u', 'u.id', '=', 'ui.idUser')
            ->join('profiles as p', 'p.id', '=', 'identities.idProfile')
            ->orderBy('display');        
    }
    
}
