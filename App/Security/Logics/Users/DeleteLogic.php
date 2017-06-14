<?php

namespace App\Security\Logics\Users;

use Melisa\Laravel\Logics\DeleteLogic as BaseDeleteLogic;
use App\Core\Repositories\UsersRepository;

/**
 * Delete user
 *
 * @author Luis Josafat Heredia Contreras
 */
class DeleteLogic extends BaseDeleteLogic
{
    
    protected $fireEvent = 'security.users.delete.success';

    public function __construct(UsersRepository $repository)
    {        
        $this->repository = $repository;        
    }
    
    public function delete(&$input)
    {
        if( !$this->isValid($input['id'])) {
            return false;
        }
        
        return parent::delete($input);
    }
    
    public function isValid(&$idUser)
    {
        $user = $this->repository->find($idUser);
        
        if( !$user) {
            return false;
        }
        
        if( !$user->isSystem) {
            return true;
        }
        
        return $this->error('Imposible eliminar usuario, ya que es de sistema');
    }
    
}
