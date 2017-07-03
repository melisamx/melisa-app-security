<?php

namespace App\Security\Logics\Identities;

use Melisa\core\LogicBusiness;
use App\Security\Repositories\IdentitiesRepository;

/**
 * Report identity
 *
 * @author Luis Josafat Heredia Contreras
 */
class ReportLogic
{
    use LogicBusiness;
    
    protected $identities;


    public function __construct(
        IdentitiesRepository $identities
    )
    {
        $this->identities = $identities;
    }
    
    public function init()
    {
        $idIdentity = $this->getIdentity();
        
        if( !$idIdentity) {
            return false;
        }
        
        return $this->getDetailIdentity($idIdentity);
    }
    
    public function getDetailIdentity($idIdentity)
    {
        return $this->identities->with([
            'profile'
        ])->find($idIdentity);
    }
            
}
