<?php

namespace App\Security\Logics\SystemSecurity;

use Melisa\core\LogicBusiness;

/**
 * Description of UserGod
 *
 * @author Luis Josafat Heredia Contreras
 */
class UserGod
{
    use LogicBusiness;
    
    public function init($gate)
    {        
        $user = $this->getUser();
        
        if( !$user) {
            return false;
        }
        
        return $this->isValid($user, $gate);        
    }
    
    public function isValid(&$user, &$gate)
    {        
        if( !$user->isGod) {
            $this->info('user is not God, deny action');
            return false;
        }
        
        if( !$user->active) {
            $this->info('user is God but is disabled, the action {g} is denied', [
                'g'=>$gate->key
            ]);
            return false;
        }
        
        return true;        
    }
    
    public function getUser()
    {        
        $user = request()->user();
        
        if( is_null($user)) {
            return $this->error('User Unauthenticated');
        }
        
        return $user;        
    }
    
}
