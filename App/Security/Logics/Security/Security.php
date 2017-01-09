<?php namespace App\Security\Logics\Security;

use App\Security\Repositories\GatesRepository;
use App\Security\Repositories\GatesSystemsRepository;

use Melisa\core\LogicBusiness;

/**
 * 
 *
 * @author Luis Josafat Heredia Contreras
 */
class Security
{
    use LogicBusiness;
    
    protected $gates;
    protected $gatesSystems;

    public function __construct(GatesRepository $gates, GatesSystemsRepository $gs) {
        
        $this->gates = $gates;
        $this->gatesSystems = $gs;
        
    }
    
    public function init($gate) {
        
        $gate = $this->gates->findBy('key', $gate);
        
        if( is_null($gate)) {
            
            $this->info('Gate {g} no exist, allowed action', [
                'g'=>$gate
            ]);
            
            return true;
            
        }
        
        if( $gate->active) {
            
            return $this->runSystems($gate);
            
        }
        
        $this->info('Gate {g} is disabled, allowe action', [
            'g'=>$gate
        ]);
        
        return true;
        
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
    
    public function isAllowed($gate)
    {
        
        return $this->init($gate);
        
    }
    
    public function forUser()
    {
        
        return true;
        
    }
    
}
