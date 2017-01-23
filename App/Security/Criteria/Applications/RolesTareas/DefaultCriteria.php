<?php namespace App\Security\Criteria\Applications\RolesTareas;

use Melisa\Repositories\Criteria\Criteria;
use Melisa\Repositories\Contracts\RepositoryInterface;

/**
 * 
 *
 * @author Luis Josafat Heredia Contreras
 */
class DefaultCriteria extends Criteria
{
    
    public function apply($model, RepositoryInterface $repository, array $input = [])
    {
        
        return $model->join('applicationsRoles as ar', 'ar.id', '=', 'applicationsRT.idApplicationRol')
            ->join('applications as a', 'a.id', '=', 'ar.idApplication')
            ->join('tasks as t', 't.id', '=', 'applicationsRT.idTask')
            ->join('rolesIdentities as ri', 'ri.idApplicationRol', '=', 'ar.id')
            ->join('identities as i', 'i.id', '=', 'ri.idIdentity')
            ->select([
                'applicationsRT.active',
                'ar.role',
                'ar.active as roleActive',
                'ri.active as roleIdentittyActive',
                'i.active as identityActive',
            ])
            ->where('t.key', $input['task'])
            ->where('i.id', $input['idIdentity']);
        
    }
    
}
