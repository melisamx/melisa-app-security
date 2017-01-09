<?php namespace App\Security\Models;

use Melisa\Laravel\Models\Base;

/**
 * 
 *
 * @author Luis Josafat Heredia Contreras
 */
abstract class GatesSystemsAbstract extends Base
{
    
    protected $connection = 'mysql';
    
    protected $table = 'gatesSystems';
    
    protected $fillable = [
        'id', 'idGate', 'idSystemSecurity', 'active', 'createdAt', 'updatedAt', 'idIdentityUpdated'
    ];
    
    public $timestamps = true;
    
    /* incrementing */
    
}

class GatesSystems extends GatesSystemsAbstract
{
    
    public function system()
    {
        return $this->hasOne('App\Security\Models\SystemsSecurity', 'id', 'idSystemSecurity');
    }
    
}