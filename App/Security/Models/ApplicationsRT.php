<?php namespace App\Security\Models;

use Melisa\Laravel\Models\BaseUuid;

/**
 * 
 * @author Luis Josafat Heredia Contreras
 */
class ApplicationsRT extends BaseUuid
{
    
    protected $connection = 'mysql';
    
    protected $table = 'applicationsRT';
    
    protected $fillable = [
        'id', 'idApplicationRol', 'idTask', 'idIdentityCreated', 'active', 'createdAt', 'isSystem', 'updatedAt', 'idIdentityUpdated'
    ];
    
    public $timestamps = true;
    
    /* incrementing */
    
}
