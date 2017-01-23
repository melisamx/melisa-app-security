<?php namespace App\Security\Models;

use Melisa\Laravel\Models\Base;

/**
 * 
 *
 * @author Luis Josafat Heredia Contreras
 */
class GatesSystems extends Base
{
    
    protected $connection = 'mysql';
    
    protected $table = 'gatesSystems';
    
    protected $fillable = [
        'id', 'idGate', 'idSystemSecurity', 'active', 'createdAt', 'updatedAt', 'idIdentityUpdated'
    ];
    
    public $timestamps = true;
    
    public $incrementing = true;
    
}
