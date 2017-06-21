<?php

namespace App\Security\Criteria\RbacTasks;

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
        $builder = parent::apply($model, $repository, $input, [
            'task'=>'t.name',
            'taskKey'=>'t.key',
        ]);
        
        if( !$this->isAllowed('app.security.rbacTasks.show.system')) {
            $builder = $builder->where('rbacTasks.isSystem', false);
        }
        
        return $builder
            ->select([
                'rbacTasks.*',
                't.name as task',
                't.key as taskKey',
            ])
            ->join('tasks as t', 't.id', '=', 'rbacTasks.idTask')
            ->orderBy('t.name');        
    }
    
}
