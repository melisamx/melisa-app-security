<?php namespace App\Security\Models;

use Melisa\Laravel\Models\BaseUuid;

/**
 * 
 *
 * @author Luis Josafat Heredia Contreras
 */
class PasswordlessEmails extends BaseUuid
{
    
    protected $table = 'passwordlessEmails';
    
    protected $fillable = [
        'id', 'idPasswordless', 'idIdentityCreated', 'active', 'token', 'email',
        'createdAt', 'dateExpiry', 'idIdentityUpdated', 'updatedAt'
    ];
    
    public function passwordless() {
        
        return $this->hasOne('App\Security\Models\Passwordless', 'id', 'idPasswordless');
        
    }
    
}
