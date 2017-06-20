<?php

namespace App\Security\Logics\Identities;

use Melisa\Laravel\Logics\CreateLogic as BaseCreateLogic;
use App\Security\Repositories\IdentitiesRepository;
use App\Security\Repositories\UsersIdentitiesRepository;

/**
 * Create identity
 *
 * @author Luis Josafat Heredia Contreras
 */
class CreateLogic extends BaseCreateLogic
{
    protected $autoInyectIdentityCreated = false;
    protected $fireEvent = 'security.identities.create.success';
    protected $userIdentities;
    
    public function __construct(
        IdentitiesRepository $repository
    )
    {        
        $this->repository = $repository;
        $this->userIdentities = app(UsersIdentitiesRepository::class);
    }
    
    public function create(&$input)
    {
        if( !$this->isValidProfile($input['idUser'], $input['idProfile'])) {
            return false;
        }
        
        $idIdentity = parent::create($input);
        
        if( !$idIdentity) {
            return false;
        }
        
        if( !$this->createUserIdentity($input['idUser'], $idIdentity)) {
            return false;
        }
        
        return $idIdentity;
    }
    
    public function isValidProfile($idUser, $idProfile)
    {
        $identities = $this->userIdentities->getModel()
            ->join('identities as i', 'i.id', '=', 'usersIdentities.idIdentity')
            ->where([
                'idUser'=>$idUser
            ])
            ->get();
        
        if( !$identities->count()) {
            return true;
        }
        
        foreach($identities as $identity) {
            if( $identity->idProfile === (int)$idProfile) {
                return $this->error('El usuario ya cuenta con ese perfil');
            }
        }
        
        return true;
    }
    
    public function createUserIdentity($idUser, $idIdentity)
    {
        $id = $this->userIdentities->create([
            'idUser'=>$idUser,
            'idIdentity'=>$idIdentity,
        ]);
        
        if( !$id) {
            return $this->error('Imposible crear relación entre usuario y perfil');
        }
        
        return $id;
    }
    
}
