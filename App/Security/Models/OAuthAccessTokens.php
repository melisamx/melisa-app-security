<?php

namespace App\Security\Models;

use Illuminate\Database\Eloquent\Model;

class OAuthAccessTokens extends Model
{
    
    protected $table = 'oauth_access_tokens';

    public function deleteById($id)
    {
        return $this->where('id', $id)->delete();
    }
    
}
