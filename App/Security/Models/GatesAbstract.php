<?php namespace App\Security\Models;

use Melisa\Laravel\Models\Base;

/**
 * 
 *
 * @author Luis Josafat Heredia Contreras
 */
class GatesAbstract extends Base
{
    
    protected $connection = 'mysql';
    
    protected $table = 'gates';
    
    protected $fillable = [
        'id', 'key', 'description', 'active', 'idIdentityUpdated', 'updatedAt'
    ];
    
    public $timestamps = false;
    
    public $incrementing = true;
    
}
