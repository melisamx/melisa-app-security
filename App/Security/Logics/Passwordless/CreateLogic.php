<?php

namespace App\Security\Logics\Passwordless;

use App\Security\Repositories\PasswordlessRepository;
use Melisa\core\LogicBusiness;

/**
 * 
 *
 * @author Luis Josafat Heredia Contreras
 */
class CreateLogic
{
    use LogicBusiness;
    
    protected $repository;
    
    public function __construct(PasswordlessRepository $repository)
    {        
        $this->repository = $repository;        
    }
    
    public function init(array $input)
    {        
        if( !$this->isAllowed('gate.security.passwordless.create')) {            
            return $this->error('No cuenta con los privilegios para esta acción');            
        }
        
        $input ['idIdentityCreated']= $this->getIdentity();
        
        $passwordless = $this->repository->create($input);
        
        return $passwordless;        
    }
    
}
