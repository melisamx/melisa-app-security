<?php

namespace App\Security\Logics\SystemSecurity;

use Melisa\core\LogicBusiness;
use App\Security\Repositories\ApplicationsRTRepository;
use App\Security\Criteria\Applications\RolesTareas\DefaultCriteria;

/**
 * System security ART 
 *
 * @author Luis Josafat Heredia Contreras
 */
class Art
{
    use LogicBusiness;
    
    protected $artRepo;
    protected $artCriteria;

    public function __construct(
        ApplicationsRTRepository $artRepo,
        DefaultCriteria $artCriteria
    )
    {
        $this->artRepo = $artRepo;
        $this->artCriteria = $artCriteria;
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
        $tasks = $this->artRepo->getByCriteria($this->artCriteria, [
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
