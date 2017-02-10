<?php namespace App\Security\Models;

use Melisa\Laravel\Models\Base;

/**
 * 
 *
 * @author Luis Josafat Heredia Contreras
 */
class SecurityGroupsGatesAbstract extends Base
{
    
    protected $connection = 'mysql';
    
    protected $table = 'securityGroupsGates';
    
    protected $fillable = [
        'id', 'idSecurityGroup', 'idGate', 'idIdentityCreated', 'active', 'createdAt', 'idIdentityUpdated', 'updatedAt'
    ];
    
    public $timestamps = true;
    
    public $incrementing = true;
    
}
