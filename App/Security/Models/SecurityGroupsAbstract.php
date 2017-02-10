<?php namespace App\Security\Models;

use Melisa\Laravel\Models\Base;

/**
 * 
 *
 * @author Luis Josafat Heredia Contreras
 */
class SecurityGroupsAbstract extends Base
{
    
    protected $connection = 'mysql';
    
    protected $table = 'securityGroups';
    
    protected $fillable = [
        'id', 'idIdentityCreated', 'name', 'active', 'order', 'oneAllowed', 'required', 'createdAt', 'idIdentityUpdated', 'description', 'updatedAt'
    ];
    
    public $timestamps = true;
    
    public $incrementing = true;
    
}
