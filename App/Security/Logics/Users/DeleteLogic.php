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
    
}
