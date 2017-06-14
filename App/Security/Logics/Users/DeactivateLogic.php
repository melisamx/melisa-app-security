<?php

namespace App\Security\Logics\Users;

use Melisa\Laravel\Logics\UpdateLogic;
use App\Core\Repositories\UsersRepository;

/**
 * Deactivate user
 *
 * @author Luis Josafat Heredia Contreras
 */
class DeactivateLogic extends UpdateLogic
{
    protected $autoInyectIdentityCreated = false;
    protected $fireEvent = 'security.users.deactivate.success';

    public function __construct(UsersRepository $repository)
    {        
        $this->repository = $repository;        
    }
    
    public function create(&$input)
    {
        if( !$this->isValid($input['id'])) {
            return false;
        }
        $input ['active']= false;
        return parent::create($input);
    }
    
    public function isValid($idUser)
    {
        $user = $this->repository->find($idUser);
        
        if( !$user) {
            return $this->error('Usuario invalido');
        }
        
        if( !$user->active) {
            return $this->error('El usuario ya se encuentra desactivado');
        }
        
        if( !$user->isSystem) {
            return true;
        }
        
        return $this->error('El usuario es de sistema no es posible desactivarlo');
    }
    
}
