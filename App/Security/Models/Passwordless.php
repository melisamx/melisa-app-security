<?php namespace App\Security\Models;

use Melisa\Laravel\Models\BaseUuid;

/**
 * 
 *
 * @author Luis Josafat Heredia Contreras
 */
class Passwordless extends BaseUuid
{
    
    protected $table = 'passwordless';
    
    protected $fillable = [
        'id', 'idUser', 'idIdentityCreated', 'name', 'active', 
        'createdAt', 'idIdentityUpdated', 'updatedAt'
    ];
    
    public function user() {
        
        return $this->hasOne('App\Core\Models\Users', 'id', 'idUser');
        
    }
    
}
