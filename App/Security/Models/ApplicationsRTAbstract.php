<?php namespace App\Security\Models;

use Melisa\Laravel\Models\BaseUuid;

/**
 * 
 * @author Luis Josafat Heredia Contreras
 */
abstract class ApplicationsRTAbstract extends BaseUuid
{
    
    protected $connection = 'mysql';
    
    protected $table = 'applicationsRT';
    
    protected $fillable = [
        'id', 'idApplicationRol', 'idTask', 'idIdentityCreated', 'active', 'isSystem', 'createdAt', 'idIdentityUpdated', 'updatedAt'
    ];
    
    public $timestamps = true;
    
    /* incrementing */
    
}
