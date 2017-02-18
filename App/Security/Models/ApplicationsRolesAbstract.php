<?php namespace App\Security\Models;

use Melisa\Laravel\Models\BaseUuid;

/**
 * 
 * @author Luis Josafat Heredia Contreras
 */
abstract class ApplicationsRolesAbstract extends BaseUuid
{
    
    protected $connection = 'core';
    
    protected $table = 'applicationsRoles';
    
    protected $fillable = [
        'id', 'idApplication', 'role', 'idIdentityCreated', 'active', 'createdAt', 'description', 'isSystem', 'updatedAt', 'idIdentityUpdated'
    ];
    
    public $timestamps = true;
    
    /* incrementing */
    
}
