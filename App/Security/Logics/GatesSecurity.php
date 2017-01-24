<?php namespace App\Security\Logics;

use App\Security\Repositories\GatesRepository;
use App\Security\Repositories\GatesSystemsRepository;
use App\Security\Repositories\SecurityGroupsGatesRepository;
use App\Security\Criteria\SecurityGroups\Gates\WithGroupCriteria;

use Melisa\core\LogicBusiness;

/**
 * 
 *
 * @author Luis Josafat Heredia Contreras
 */
class GatesSecurity
{
    use LogicBusiness;
    
    protected $gates;
    protected $gatesSystems;
    protected $securityGroupsGates;
    protected $sggCriteria;

    public function __construct(
        GatesRepository $gates, 
        GatesSystemsRepository $gs,
        SecurityGroupsGatesRepository $sgg,
        WithGroupCriteria $sggCriteria
    ) {
        
        $this->gates = $gates;
        $this->gatesSystems = $gs;
        $this->securityGroupsGates = $sgg;
        $this->sggCriteria = $sggCriteria;
        
    }
    
    public function init($gateKey = '*') {
        
        $gate = $this->gates->findBy('key', $gateKey);
        
        if( is_null($gate)) {            
            $this->info('Gate {g} no exist, allowed action', [
                'g'=>$gateKey
            ]);            
            return true;            
        }
        
        if( $gate->active) {            
            return $this->runGroupSystems($gate);            
        }
        
        $this->info('Gate {g} is disabled, action allowed', [
            'g'=>$gate
        ]);
        
        return true;
        
    }
    
    public function runGroupSystems($gate)
    {
        
        $securityGroupsGates = $this->securityGroupsGates->getByCriteria($this->sggCriteria, [
            'key'=>$gate->key
        ]);
        
        if( !$securityGroupsGates->count()) {
            return true;
        }
        
        $securityGroups = $securityGroupsGates->groupBy('groupName');
        $groups = [];
        
        foreach($securityGroups as $name => $groupItems) {
            $firts = $groupItems->first();
            $groups [$name]= [
                'required'=>$firts->required,
                'oneAllowed'=>$firts->oneAllowed,
            ];
        }
        
        foreach($securityGroups as $name => $groupItems) {
            
            $this->debug('Evaluating group {g}, contain(s) {i} item(s)', [
                'g'=>$name,
                'i'=>$groupItems->count()
            ]);
            
            $result = $this->evaluateGroup($name, $groupItems, $groups[$name]['oneAllowed']);
            
            if( $result) {
                $this->debug('Success in group {g}', [
                    'g'=>$name
                ]);
                continue;
            }
            
            if( !$groups[$name]['required']) {
                
                if( count($groups) === 1) {
                    $this->info('Only security group denied action');
                    return false;
                }
                
                $this->debug('Group {g} is no allowed gate {ga}, but the group is not required, continue evaluating groups', [
                    'g'=>$name,
                    'ga'=>$gate->key
                ]);
                continue;
            }
            
            $this->error('Is not allowed, group {g} no allowed gate {ga} and is required', [
                'g'=>$name,
                'ga'=>$gate->key
            ]);
            return false;
            
        }
        
        return true;
        
    }
    
    public function evaluateGroup($name, &$groupItems, $groupOneAllowed)
    {
        
        $result = [];
        
        foreach($groupItems as $item) {
            
            if( !$item['systemActive']) {
                $this->debug('The system security {s} is disable, ignore evaluate', [
                    'gr'=>$name
                ]);
                continue;
            }
            
            if( !$item['groupSystemActive']) {
                $this->debug('The system security {s} is disable in the group {g}, ignore evaluate', [
                    's'=>$item['system'],
                    'g'=>$item['$name'],
                ]);
                continue;
            }
            
            if( !$item['groupActive']) {
                $this->debug('The group {gr} is disable, ignore evaluate', [
                    'gr'=>$name
                ]);
                continue;
            }
                
            if( !$item['active']) {
                $this->debug('The gate {g} is disable in the group {gr}, ignore evaluate', [
                    'g'=>$gate,
                    'gr'=>$name
                ]);
                continue;
            }
            
            $this->debug('Evaluating gate {g} with system security {s}', [
                'g'=>$item['gate'],
                's'=>$item['system']
            ]);
            
            $allowed = app($item['system'])->init($item['gate']);
            
            if( !$allowed) {
                $this->debug('Gate {g} is not allowed with system security {s}', [
                    'g'=>$item['gate'],
                    's'=>$item['system']
                ]);
                $result []= 0;                
            } else {
                $result []= 1;
            }
            
            if( !$allowed && !$groupOneAllowed) {
                break;
            }

        }
        
        if( $groupOneAllowed) {
            return in_array(true, $result);
        }
        
        if( !isset(array_count_values($result)['1'])) {
            return false;
        }
        
        return array_count_values($result)['1']  === $groupItems->count();
        
    }
    
    public function runSystems($gate)
    {
        
        $gatesSystems = $this->gatesSystems->findAllBy('idGate', $gate->id .'s');
        
        if( !count($gatesSystems)) {            
            $this->info('Gate {g} is not linked to any security system', [
                'g'=>$gate
            ]);
            return true;            
        }
        
        $flag = true;
        
        foreach($gatesSystems as $gateSystem) {
            
            if( !$gateSystem->active) {                
                $this->info('Gate {g} linked system security {s} is disabled ignore run', [
                    'g'=>$gate,
                    's'=>$gateSystem->id,
                ]);                
                continue;                
            }
            
            $result = app($gateSystem->system->key)->init($gate, $gateSystem);
            
            if( $result) {                
                continue;
            }
            
            $flag = false;
            break;
            
        }
        
        return $flag;
        
    }
    
    public function isAllowed($gate = '*')
    {
        
        return $this->init($gate);
        
    }
    
    public function forUser()
    {
        
        return true;
        
    }
    
}
