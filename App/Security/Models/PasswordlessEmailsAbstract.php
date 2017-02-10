<?php namespace App\Security\Models;

use Melisa\Laravel\Models\BaseUuid;

/**
 * 
 * @author Luis Josafat Heredia Contreras
 */
abstract class PasswordlessEmailsAbstract extends BaseUuid
{
    
    protected $connection = 'mysql';
    
    protected $table = 'passwordlessEmails';
    
    protected $fillable = [
        'id', 'idPasswordless', 'email', 'idIdentityCreated', 'active', 'token', 'createdAt', 'dateExpiry', 'idIdentityUpdated', 'updatedAt'
    ];
    
    public $timestamps = true;
    
    /* incrementing */
    
}
