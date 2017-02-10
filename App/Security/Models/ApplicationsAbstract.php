<?php namespace App\Security\Models;

use Melisa\Laravel\Models\BaseUuid;

/**
 * 
 * @author Luis Josafat Heredia Contreras
 */
abstract class ApplicationsAbstract extends BaseUuid
{
    
    protected $connection = 'mysql';
    
    protected $table = 'applications';
    
    protected $fillable = [
        'id', 'key', 'name', 'description', 'active', 'iconClassSmall', 'iconClassMedium', 'iconClassLarge', 'nameSpace', 'typeSecurity', 'isSystem', 'createdAt', 'version', 'updatedAt'
    ];
    
    public $timestamps = true;
    
    /* incrementing */
    
}
