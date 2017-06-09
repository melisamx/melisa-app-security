<?php

namespace App\Security\Logics\Identities;

use Melisa\Laravel\Logics\UpdateLogic;
use App\Core\Repositories\IdentitiesRepository;

/**
 * Activate user
 *
 * @author Luis Josafat Heredia Contreras
 */
class ActivateLogic extends UpdateLogic
{
    
    protected $autoInyectIdentityCreated = false;
    protected $fireEvent = 'security.users.deactivate.success';

    public function __construct(IdentitiesRepository $repository)
    {        
        $this->repository = $repository;        
    }
    
    public function create(&$input)
    {
        if( !$this->isValid($input['id'])) {
            return false;
        }
        $input ['active']= true;
        return parent::create($input);
    }
    
    public function isValid($idUser)
    {
        $user = $this->repository->find($idUser);
        
        if( !$user) {
            return $this->error('Identidad invalida');
        }
        
        if( $user->active) {
            return $this->error('La identidad ya se encuentra activada');
        }
        
        return true;
    }
    
}
