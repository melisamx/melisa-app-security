<?php namespace App\Security\Models;

use Melisa\Laravel\Models\Base;

/**
 * 
 *
 * @author Luis Josafat Heredia Contreras
 */
class TasksAbstract extends Base
{
    
    protected $connection = 'mysql';
    
    protected $table = 'tasks';
    
    protected $fillable = [
        'id', 'key', 'name', 'active', 'isSystem', 'description', 'pattern'
    ];
    
    public $timestamps = false;
    
    public $incrementing = true;
    
}
