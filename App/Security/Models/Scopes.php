<?php namespace App\Security\Models;

use Melisa\Laravel\Models\Base;

/**
 * 
 *
 * @author Luis Josafat Heredia Contreras
 */
class Scopes extends Base
{
    
    protected $connection = 'mysql';
    
    protected $table = 'scopes';
    
    protected $fillable = [
        'id', 'name', 'active', 'createdAt', 'updatedAt'
    ];
    
    public $timestamps = true;
    
    /* incrementing */
    
}
