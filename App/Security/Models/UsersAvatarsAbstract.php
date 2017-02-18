<?php namespace App\Security\Models;

use Melisa\Laravel\Models\BaseUuid;

/**
 * 
 * @author Luis Josafat Heredia Contreras
 */
abstract class UsersAvatarsAbstract extends BaseUuid
{
    
    protected $connection = 'core';
    
    protected $table = 'usersAvatars';
    
    protected $fillable = [
        'id', 'idUser', 'idFileAvatar', 'active', 'isDefault', 'createdAt', 'updatedAt'
    ];
    
    public $timestamps = true;
    
    /* incrementing */
    
}
