<?php namespace App\Security\Models;

use Melisa\Laravel\Models\BaseUuid;

/**
 * 
 * @author Luis Josafat Heredia Contreras
 */
class RolesIdentities extends BaseUuid
{
    
    protected $connection = 'mysql';
    
    protected $table = 'rolesIdentities';
    
    protected $fillable = [
        'id', 'idApplicationRol', 'idIdentity', 'idIdentityCreated', 'active', 'createdAt', 'idIdentityUpdated', 'updatedAt'
    ];
    
    public $timestamps = true;
    
    /* incrementing */
    
}
