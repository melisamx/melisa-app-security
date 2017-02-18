<?php namespace App\Security\Models;

use Melisa\Laravel\Models\Base;

/**
 * 
 *
 * @author Luis Josafat Heredia Contreras
 */
class ScopesAbstract extends Base
{
    
    protected $connection = 'core';
    
    protected $table = 'scopes';
    
    protected $fillable = [
        'id', 'name', 'active', 'createdAt', 'updatedAt'
    ];
    
    public $timestamps = true;
    
    /* incrementing */
    
}
