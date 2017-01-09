<?php namespace App\Security\Models;

use Melisa\Laravel\Models\BaseUuid;

/**
 * 
 * @author Luis Josafat Heredia Contreras
 */
class Passwordless extends BaseUuid
{
    
    protected $connection = 'mysql';
    
    protected $table = 'passwordless';
    
    protected $fillable = [
        'id', 'name', 'idIdentityCreated', 'idUser', 'active', 'createdAt', 'idIdentityUpdated', 'updatedAt'
    ];
    
    public $timestamps = true;
    
    /* incrementing */
    
}
