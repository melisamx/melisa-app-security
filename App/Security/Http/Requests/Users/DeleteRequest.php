<?php

namespace App\Security\Http\Requests\Users;

use Melisa\Laravel\Http\Requests\Generic;

/**
 * 
 *
 * @author Luis Josafat Heredia Contreras
 */
class DeleteRequest extends Generic
{
    
    protected $rules = [
        'id'=>'required|size:36|xss|exists:core.users,id',
    ];
    
}