<?php namespace App\Security\Models;

use Melisa\Laravel\Models\Base;

/**
 * 
 *
 * @author Luis Josafat Heredia Contreras
 */
class GatesSystemsAbstract extends Base
{
    
    protected $connection = 'core';
    
    protected $table = 'gatesSystems';
    
    protected $fillable = [
        'id', 'idGate', 'idSystemSecurity', 'active', 'createdAt', 'updatedAt', 'idIdentityUpdated'
    ];
    
    public $timestamps = true;
    
    public $incrementing = true;
    
}
