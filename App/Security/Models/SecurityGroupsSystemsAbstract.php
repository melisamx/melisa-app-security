<?php namespace App\Security\Models;

use Melisa\Laravel\Models\Base;

/**
 * 
 *
 * @author Luis Josafat Heredia Contreras
 */
class SecurityGroupsSystemsAbstract extends Base
{
    
    protected $connection = 'core';
    
    protected $table = 'securityGroupsSystems';
    
    protected $fillable = [
        'id', 'idSecurityGroup', 'idSystemSecurity', 'idIdentityCreated', 'active', 'order', 'createdAt', 'idIdentityUpdated', 'updatedAt'
    ];
    
    public $timestamps = true;
    
    public $incrementing = true;
    
}
