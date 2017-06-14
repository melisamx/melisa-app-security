<?php

namespace App\Security\Criteria\Passwordless;

use Melisa\Repositories\Criteria\Criteria;
use Melisa\Repositories\Contracts\RepositoryInterface;

/**
 * 
 *
 * @author Luis Josafat Heredia Contreras
 */
class WithUserCriteria extends Criteria
{
    
    public function apply($model, RepositoryInterface $repository, array $input = [])
    {        
        return $model->join('users as u', 'u.id', '=', 'passwordless.idUser')
            ->select([
                'passwordless.*',
                'u.name as userName',
                'u.email as userEmail',
            ])
            ->orderBy('passwordless.name');        
    }
    
}
