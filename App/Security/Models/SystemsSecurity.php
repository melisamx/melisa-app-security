<?php namespace App\Security\Models;

use Melisa\Laravel\Models\Base;

/**
 * 
 *
 * @author Luis Josafat Heredia Contreras
 */
class SystemsSecurity extends Base
{
    
    protected $connection = 'mysql';
    
    protected $table = 'systemsSecurity';
    
    protected $fillable = [
        'id', 'key', 'description', 'active', 'createdAt', 'idIdentityUpdated', 'updatedAt'
    ];
    
    public $timestamps = true;
    
    public $incrementing = true;
    
}