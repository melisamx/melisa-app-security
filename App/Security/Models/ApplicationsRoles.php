<?php namespace App\Security\Models;

use Melisa\Laravel\Models\BaseUuid;

/**
 * 
 * @author Luis Josafat Heredia Contreras
 */
class ApplicationsRoles extends BaseUuid
{
    
    protected $connection = 'mysql';
    
    protected $table = 'applicationsRoles';
    
    protected $fillable = [
        'id', 'idApplication', 'role', 'idIdentityCreated', 'active', 'createdAt', 'description', 'isSystem', 'updatedAt', 'idIdentityUpdated'
    ];
    
    public $timestamps = true;
    
    /* incrementing */
    
}
