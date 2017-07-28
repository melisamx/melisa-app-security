<?php

namespace App\Security\Criteria\Identities;

use Melisa\Laravel\Criteria\FilterCriteria;

/**
 * 
 *
 * @author Luis Josafat Heredia Contreras
 */
class PagingCriteria extends FilterCriteria
{
    
    public function apply($model, $repository, array $input = [])
    {
        $builder = parent::apply($model, $repository, $input);
        
        if( isset($input['query'])) {
            $builder = $builder->where('identities.displayEspecific', 'like', '%' . $input['query'] . '%');
        }
        return $builder
            ->select([
                'identities.*',
                'ui.idUser',
                'p.name as profile',
                'p.icon as profileCls'
            ])
            ->join('usersIdentities as ui', 'ui.idIdentity', '=', 'identities.id')
            ->join('users as u', 'u.id', '=', 'ui.idUser')
            ->join('profiles as p', 'p.id', '=', 'identities.idProfile')
            ->orderBy('display');        
    }
    
}
