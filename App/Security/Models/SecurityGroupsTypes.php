<?php namespace App\Security\Models;

use Melisa\Laravel\Models\Base;

/**
 * 
 *
 * @author Luis Josafat Heredia Contreras
 */
class SecurityGroupsTypes extends Base
{
    
    protected $connection = 'mysql';
    
    protected $table = 'securityGroupsTypes';
    
    protected $fillable = [
        'id', 'name'
    ];
    
    public $timestamps = false;
    
    public $incrementing = true;
    
}
