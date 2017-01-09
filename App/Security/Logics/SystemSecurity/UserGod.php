<?php namespace App\Security\Logics\SystemSecurity;

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
            return $this->error('user is not God deny action');
        }
        
        if( !$user->active) {
            return $this->error('user is God but is disabled, the action {g} is denied', [
                'g'=>$gate->key
            ]);
        }
        
        return true;
        
    }
    
    public function getUser()
    {
        static $user = null;
        
        if( $user) {
            return $user;
        }
        
        $user = request()->user();
        
        if( is_null($user)) {
            return $this->error('User Unauthenticated');
        }
        
        return $user;
        
    }
    
}
