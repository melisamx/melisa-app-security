<?php

namespace App\Security\Logics\Identities;

use Melisa\Laravel\Logics\DeleteLogic as BaseDeleteLogic;
use App\Core\Repositories\IdentitiesRepository;

/**
 * Delete identity
 *
 * @author Luis Josafat Heredia Contreras
 */
class DeleteLogic extends BaseDeleteLogic
{
    
    protected $fireEvent = 'security.identities.delete.success';

    public function __construct(IdentitiesRepository $repository)
    {        
        $this->repository = $repository;        
    }
    
}
