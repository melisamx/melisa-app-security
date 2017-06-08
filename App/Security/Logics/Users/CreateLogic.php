<?php

namespace App\Security\Logics\Users;

use Melisa\Laravel\Logics\CreateLogic as DefaultCreateLogic;
use App\Core\Repositories\UsersRepository;

/**
 * Create user
 *
 * @author Luis Josafat Heredia Contreras
 */
class CreateLogic extends DefaultCreateLogic
{
    protected $autoInyectIdentityCreated = false;
    protected $fireEvent = 'security.users.create.success';

    public function __construct(UsersRepository $repository)
    {        
        $this->repository = $repository;        
    }
    
}
