<?php namespace App\Security\Models;

use Melisa\Laravel\Models\BaseUuid;

/**
 * 
 * @author Luis Josafat Heredia Contreras
 */
abstract class PasswordlessAbstract extends BaseUuid
{
    
    protected $connection = 'core';
    
    protected $table = 'passwordless';
    
    protected $fillable = [
        'id', 'name', 'idIdentityCreated', 'idUser', 'active', 'createdAt', 'idIdentityUpdated', 'updatedAt'
    ];
    
    public $timestamps = true;
    
    /* incrementing */
    
}
