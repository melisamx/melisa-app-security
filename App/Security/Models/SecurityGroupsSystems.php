<?php namespace App\Security\Models;

use Melisa\Laravel\Models\Base;

/**
 * 
 *
 * @author Luis Josafat Heredia Contreras
 */
class SecurityGroupsSystems extends Base
{
    
    protected $connection = 'mysql';
    
    protected $table = 'securityGroupsSystems';
    
    protected $fillable = [
        'id', 'idSecurityGroup', 'idSystemSecurity', 'idIdentityCreated', 'active', 'order', 'createdAt', 'idIdentityUpdated', 'updatedAt'
    ];
    
    public $timestamps = true;
    
    public $incrementing = true;
    
}
