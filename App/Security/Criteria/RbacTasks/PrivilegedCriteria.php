<?php

namespace App\Security\Criteria\RbacTasks;

use Melisa\Repositories\Criteria\Criteria;

/**
 * 
 *
 * @author Luis Josafat Heredia Contreras
 */
class PrivilegedCriteria extends Criteria
{
    
    public function apply($model, $repository, array $input = [])
    {        
        return $model->join('rbacRoles as rr', 'rr.id', '=', 'rbacTasks.idRbacRol')
            ->join('tasks as t', 't.id', '=', 'rbacTasks.idTask')
            ->join('rbacIdentities as ri', 'ri.idRbacRol', '=', 'rr.id')
            ->join('identities as i', 'i.id', '=', 'ri.idIdentity')
            ->select([
                'rbacTasks.active',
                'rr.role',
                'rr.active as roleActive',
                'ri.active as roleIdentittyActive',
                'i.active as identityActive',
            ])
            ->where('t.key', $input['task'])
            ->where('i.id', $input['idIdentity']);        
    }
    
}
