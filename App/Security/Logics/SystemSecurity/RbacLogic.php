<?php

namespace App\Security\Logics\SystemSecurity;

use Melisa\core\LogicBusiness;
use App\Security\Repositories\RbacTasksRepository;
use App\Security\Criteria\RbacTasks\PrivilegedCriteria;

/**
 * System Role Base Access Control
 *
 * @author Luis Josafat Heredia Contreras
 */
class RbacLogic
{
    use LogicBusiness;
    
    protected $tasks;
    protected $criteria;

    public function __construct(
        RbacTasksRepository $tasks,
        PrivilegedCriteria $criteria
    )
    {
        $this->tasks = $tasks;
        $this->criteria = $criteria;
    }
    
    public function init($gate)
    {
        $idIdentity = $this->getIdentity();
        
        if( !$idIdentity) {
            return false;
        }
        
        $tasks = $this->getTasks($gate, $idIdentity);
        
        if( !$tasks) {
            return false;
        }
        
        return $this->isValidTasks($tasks);        
    }
    
    public function isValidTasks(&$tasks)
    {        
        foreach($tasks as $task) {
            
            if( !$task->active) {
                continue;
            }
            
            if( !$task->roleActive) {
                continue;
            }
            
            if( !$task->identityActive) {
                continue;
            }
            
            return true;
            
        }
        
        return false;        
    }
    
    public function getTasks($gate, $idIdentity)
    {
        $tasks = $this->tasks->getByCriteria($this->criteria, [
            'idIdentity'=>$idIdentity,
            'task'=>$gate
        ]);
        
        if( !$tasks->count()) {
            $this->info('Identity {i} without privileged tasks', [
                'i'=>$idIdentity
            ]);
            return false;
        }
        
        $this->debug('Identity {i} with {t} record(s) about the task {g}', [
            'i'=>$idIdentity,
            't'=>$tasks->count(),
            'g'=>$gate
        ]);
        
        return $tasks;        
    }
    
}
